<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $name = $request->name;
        $prename = $request->prename;
        $email = $request->email;
        $phone = $request->phone;
        $but = $request->but;
        $message1 = $request->message;
        $data = ['name' => $name, 'prename' => $prename, 'email' => $email, 'phone' => $phone, 'but' => $but, 'message1' => $message1];
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('contact@epronetworks.eu')->subject
            ('Question?');
         $message->from('test.testing254@outlook.fr','Epronetworks');
      });
      return redirect()->back();
    }
}