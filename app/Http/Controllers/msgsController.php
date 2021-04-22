<?php

namespace App\Http\Controllers;

use App\Models\msgs;
use Illuminate\Http\Request;

class msgsController extends Controller
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
   
    $msg = new msgs;
    $msg->fromu=$request->input('from');
    $msg->tou=$request->input('to');
    $msg->sms=$request->input('sms');
      $msg->save();
   
          


return  redirect()->back()->with('info','Messeg sended!');
        
}
 public function delete(Request $request)
    {  $this->validate($request, [
         'smsid'=>'required'
    ]);
         $ass=msgs::findOrFail($request->input('smsid'));
        if($ass->delete()){
            
             return back();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\msgs  $msgs
     * @return \Illuminate\Http\Response
     */
    public function show(msgs $msgs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\msgs  $msgs
     * @return \Illuminate\Http\Response
     */
    public function edit(msgs $msgs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\msgs  $msgs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, msgs $msgs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\msgs  $msgs
     * @return \Illuminate\Http\Response
     */
    public function destroy(msgs $msgs)
    {
        //
    }
}
