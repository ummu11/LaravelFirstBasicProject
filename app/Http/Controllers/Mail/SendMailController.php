<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendMailController extends Controller
{
    public function send(Request $request){
        $email=$request->input('email');
        $message=$request->input('message');
        Mail::to($email)->send(new SendMail());
        return view('website.SendingMail');

    }
}
