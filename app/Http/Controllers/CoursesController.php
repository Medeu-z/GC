<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Users;
use Validator;
use Illuminate\Support\Facades\Auth;
use public\image;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $this->validate($request, [
         'userid'=>'required',
         'curper'=>'required',
         'course'=>'required',
         'photo'=>'required',
         'AssMethNum'=>'required',
         'goalPersent'=>'required'
    ]);
   
   if ($request->hasFile('photo')) {

    $allowedfileExtension=['jpg','png'];
    $file = $request->file('photo');
    $destPath ='image';
    
    $filename = $file->getClientOriginalName();
    $ext = $file->getClientOriginalExtension();
    $check=in_array($ext, $allowedfileExtension);
    if ($check) {
       
        $filename = $request->file('photo')->store('image');
        $course = new Courses;
    $course->users_id=$request->input('userid');
    $course->CourseName=$request->input('course');
    $course->CourseImage=$filename;
    $course->numOfAss=$request->input('AssMethNum');
    $course->numOfInsertAss='0';
    $course->persOfInsertAss='0';
    $course->Goal=$request->input('goalPersent');
    $course->CurentPer=$request->input('curper');
    $course->save();

         $file->move($destPath,$file->getClientOriginalName());
    }
    return back();
       
   }else{
    echo "ups";
   }

    
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {   $this->validate($request, [
         'cid'=>'required'
    ]);
    /* $users = Users::where('email', '=', $request->input('email'))->first();
        echo "del";*/
         $id = $request->input('cid');
         $course=Courses::findOrFail($id);
        if($course->delete()){
             return back();
        }else{
            echo "string";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
   /* public function show(Courses $courses)
    {
        
    }*/
    public function show($id){
     
     /*return view('courses');*/
     return view("courses",["nameC" => $id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
