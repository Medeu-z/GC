<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Validator;
 use Hash;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
     public function delete(Request $request)
    {  $this->validate($request, [
         'userid'=>'required'
    ]);
         $ass=Users::findOrFail($request->input('userid'));
        if($ass->delete()){
            
             return back();
        }
    }
     public function admin(){
    return view('admin');
   }

     public function update(Request $request)
    {
         $this->validate($request, [
         'userid'=>'required',
         'Fname'=>'required',
         'Lname'=>'required',
         'bday'=>'required',
         'email'=>'required',
         'password'=>'required'
    ]);
         
         $account = Users::findOrFail($request->input('userid'));
         $account->Fname=$request->input('Fname');
         $account->Lname=$request->input('Lname');
         $account->bday=$request->input('bday');
         $account->email=$request->input('email');
         $password = $request->input('password');// password is form field
         $hashed = Hash::make($password);
         $account->password=$hashed;
         $account->save();
        
        return back();
    }
}
