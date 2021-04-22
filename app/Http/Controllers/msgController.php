<?php

namespace App\Http\Controllers;

use App\Models\msg;
use Illuminate\Http\Request;
use App\Models\Users;
class msgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function insert(Request $request){
    $this->validate($request, [
         'from'=>'required',
         'to'=>'required',
         'sms'=>'required'
    ]);
   
    $msg = new msg;
    $msg->from=$request->input('from');
    $msg->to=$request->input('to');
    $msg->sms=$request->input('sms');
      $msg->save();
   
          


return back();
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function show(msg $msg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function edit(msg $msg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function destroy(msg $msg)
    {
        //
    }
}
