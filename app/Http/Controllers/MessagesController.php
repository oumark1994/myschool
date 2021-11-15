<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class MessagesController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function messages(){
        $messages = Message::get();

        return view('backend.messages')->with('messages',$messages);
    }
    public function deletemessage ($id){
        $message = Message::find($id);
        $message->delete();
        return redirect('/messages')->with('status','The message has been delete successfully');

    }
}
