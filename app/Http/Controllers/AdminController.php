<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Message;


class AdminController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function setting(){
        // print($settings);
        return view('backend.template');

    }
    public function dashboard() {
        
        $courses = Course::all()->count();
        $events = Event::all()->count();
        $sliders = Slider::all()->count();
        $messages = Message::orderBy('created_at','asc')->take(10)->get();
        return view('backend.dashboard')->with('messages',$messages);
    }
}
