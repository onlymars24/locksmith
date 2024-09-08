<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
        Mail::to(env('MAIL_ADMIN'))->send(new ApplicationMail($request->name, $request->phone, $request->text));
    }
}
