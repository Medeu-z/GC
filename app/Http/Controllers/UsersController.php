<?php

namespace App\Http\Controllers;
use App\Mail\GradesCalculated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Users;
use Validator;
 use Hash;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
     /*public function insert(Request $request)
    {
        \DB::table('users')->insert([
         'Fname'=>$request->input('Fname'),
         'Lname'=>$request->input('Lname'),
         'bday'=>$request->input('bday'),
         'email'=>$request->input('email'),
         'password'=>$request->input('password')
        ]);
       // return ['success'=>"sub"];

    }*/

public function insert(Request $request){
    $this->validate($request, [
         'Fname'=>'required',
         'Lname'=>'required',
         'bday'=>'required',
         'email'=>'required',
         'password'=>'required'
    ]);
   $users = Users::where('email', '=', $request->input('email'))->first();
if ($users === null) {
  
    $account = new Users;
    $account->Fname=$request->input('Fname');
    $account->Lname=$request->input('Lname');
    $account->bday=$request->input('bday');
    $account->email=$request->input('email');
    $password = $request->input('password');// password is form field
    $hashed = Hash::make($password);
    $account->password=$hashed;
    $account->save();
    $d = new \stdClass();
    $d->sender='Grades Calculated';
    $d->receiver= $account->Fname;
    Mail::to($account->email)->send(new GradesCalculated($d));
          


return view('login');
} else { return redirect()->back()->with('info','User with this email exits!');
  // User exits
}
        
}

   public function checkLogin(Request $request){
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|alphaNum'
    ]);
       /*$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {*/
       $user_date = array(
         'email' => $request->get('email'),
         'password' => $request->get('password')
       );
       if(Auth::attempt($user_date)){
        return redirect('welcome/success');
       }else{
        return back()->with('error', 'Wrong Login Details');
       }
   }

   public function success(){
    return view('test');
   }


    public function store(Request $request)
    {
         \DB::table('users')->insert([
         'Fname'=>$request->input('Fname'),
         'Lname'=>$request->input('Lname'),
         'bday'=>$request->input('bday'),
         'email'=>$request->input('email'),
         'password'=>$request->input('password')
        ]);
         return response()->json(['success'=>'Ajax request submitted successfully']);
    }
    public function logout(){
        Auth::logout();
        return redirect('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
