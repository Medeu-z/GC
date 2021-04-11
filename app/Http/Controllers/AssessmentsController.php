<?php

namespace App\Http\Controllers;
use App\Models\assessments;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AssessmentsController extends Controller
{
     public function insert(Request $request)
    {
         $this->validate($request, [
         'idcourse'=>'required',
         'selecto'=>'required',
         'weight'=>'required'
    ]);  $cours1 = Courses::where('id', '=', $request->input('idcourse'))->first()->numOfInsertAss;
         $cours2 = Courses::where('id', '=', $request->input('idcourse'))->first()->numOfAss;
          $cours3 = Courses::where('id', '=', $request->input('idcourse'))->first()->persOfInsertAss;
          $check = $cours3 + $request->input('weight');
          $check2 = $cours1 + 1;
      if ($check > 100) {
         	return redirect()->back()->with('info','You reached to the 100% or Please change the percent, because the sum of all assessment methods percent will be bigger than 100!  ');
         }elseif ($check2 === $cours2 and $check<100 ) {
         	return redirect()->back()->with('info','Please change the percent, because this assessment method is the last method that you can add and the sum of all assessment methods percent will be smaller  than 100!  ');
         }
         else{	

         $assessment = new assessments;
         $assessment->courses_id=$request->input('idcourse');
         $assessment->AssName=$request->input('selecto');;
         $assessment->PerFromTotal=$request->input('weight');
         $assessment->CurentPer='0';
         $assessment->save();
         $cours = Courses::findOrFail($request->input('idcourse'));
         $cours->numOfInsertAss=$cours1+1;
          $cours->persOfInsertAss=$cours3+$request->input('weight');
          $cours->save();
        return back();
         	
         }
    }

     public function update(Request $request)
    {  $this->validate($request, [
         'selectu'=>'required',
         'weightu'=>'required',
         'cweightu'=>'required',
         'asidu'=>'required',
         'cidu'=>'required'

    ]); 
         
            $perAss = assessments::where('id', '=', $request->input('asidu'))->first()->PerFromTotal;
             $cper = Courses::where('id', '=', $request->input('cidu'))->first()->CurentPer;
          $cours3 = Courses::where('id', '=', $request->input('cidu'))->first()->persOfInsertAss;
          $total = $cours3 - $perAss;
        if ($total+$request->input('weightu') > 100) {
         	return redirect()->back()->with('info','You reached to the 100% or Please change the percent, because the sum of all assessment methods percent will be bigger than 100!  ');
         }else{
        
    	$assessment = assessments::findOrFail($request->input('asidu'));
         $assessment->AssName=$request->input('selectu');;
         $assessment->PerFromTotal=$request->input('weightu');
         $assessment->CurentPer=$request->input('cweightu');
         $assessment->save();
          $cours = Courses::findOrFail($request->input('cidu'));
          $cours->CurentPer=$cper+$request->input('cweightu');
          $cours->persOfInsertAss=$total+$request->input('weightu');
          $cours->save();
          if ($total + $request->input('weightu')<100 ) {
         	return redirect()->back()->with('info','Add new assessment method ,the sum of all assessment methods percent will be smaller  than 100!   ');
         }
          return back();
     }
        
    }






        public function delete(Request $request)
    {   $this->validate($request, [
         'asid'=>'required',
         'cid'=>'required'
    ]);   $tcper = Courses::where('id', '=', $request->input('cid'))->first()->CurentPer;
          $cours1 = Courses::where('id', '=', $request->input('cid'))->first()->numOfInsertAss;
          $cours3 = Courses::where('id', '=', $request->input('cid'))->first()->persOfInsertAss;
          $perAss = assessments::where('id', '=', $request->input('asid'))->first()->PerFromTotal;
          $cper = assessments::where('id', '=', $request->input('asid'))->first()->CurentPer;
          $cours = Courses::findOrFail($request->input('cid'));
          $cours->numOfInsertAss=$cours1-1;
          $cours->CurentPer=$tcper-$cper;
          $cours->persOfInsertAss=$cours3-$perAss;
          $cours->save();
         $id = $request->input('asid');
          $ass=assessments::findOrFail($id);
        if($ass->delete()){
        	
             return back();
        }else{
            echo "string";
        }
    }
}
