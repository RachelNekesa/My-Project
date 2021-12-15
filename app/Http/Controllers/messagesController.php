<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Mail;

class messagesController extends Controller
{

    public function contactForm()
      {
          return view('contactForm');
      }
   public function store1(Request $request)
  {
    $messages = new Message;
        $messages->name =$request->name;
        $messages->email =$request->email;
        $messages->subject =$request->subject;
        $messages->message=$request->message;
        $messages->save();
      return redirect('contactForm')->with('status', 'Message sent successfully');
  }
}
