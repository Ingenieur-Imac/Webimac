<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class MailController extends Controller
{
    public function internshipOffer(Request $request){
        $result = $request->all();
        var_dump($result);
        $text = "Coucou";
        Mail::raw($text,function($message){
            $message->from("webimac2016@gmail.com");
            $message->to("julien.rousset01@gmail.com");
            $message->subject("Proposition de stages de : ");
        });
    }
}
