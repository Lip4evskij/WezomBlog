<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    /**
     * @param Request $request
     */
    public function send_form(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $msg=$request->msg;
        Mail::to('lip4evskij@ukr.net')->send(new MailClass($name,$phone,$email,$msg));
        return back();
    }
}
