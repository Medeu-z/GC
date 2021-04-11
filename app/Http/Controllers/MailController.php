<?php

namespace App\Http\Controllers;
use App\Mail\GradesCalculated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
  
     public function send(){
     	 $d = new \stdClass();
    $d->sender='medeuovazhaniya01';
     $d->receiver='medeuovazhaniya01';
     Mail::to("medeuovazhaniya01@gmail.com")->send(new WelcomeToGradesCalculated($d));}
}
