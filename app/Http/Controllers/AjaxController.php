<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
     public function index(){
    
    	$msg = "Achieve your goals with us";
    	return response()->json(array('msg' => $msg),200);
    }
}
