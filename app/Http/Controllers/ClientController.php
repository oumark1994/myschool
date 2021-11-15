<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Facility;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\visitorcontact;  

class ClientController extends Controller
{
    //
    public function setting(){
        $settings = Setting::get();
        // print($settings);
        return view('frontend.app')->with('settings',$settings);

    }

    public function home(){
        $settings = Setting::get();
        $sliders = Slider::get();
        $courses= Course::get();
        $events= Event::get();
        $latestgalleries = Gallery::orderBy('created_at','asc')->take(4)->get();
        // print($latestgalleries);

         return view('frontend.home')->with('settings',$settings)->with('sliders',$sliders)->with('courses',$courses)->with('events',$events)->with('latestgalleries',$latestgalleries);

    }
    public function about(){

        $settings = Setting::get();
        $facilities = Facility::get();
        $courses= Course::get();
        return view('frontend.about')->with('settings',$settings)->with('facilities',$facilities)->with('courses',$courses);
    }
   
    public function courses(){
        $settings = Setting::get();
        $courses= Course::get();
        $events= Event::get();
        return view('frontend.courses')->with('settings',$settings)->with('courses',$courses)->with('events',$events);
    }
    public function events(){
        $settings = Setting::get();
        $events= Event::get();
        return view('frontend.events')->with('settings',$settings)->with('events',$events);
    }
    public function gallery(){
        $settings = Setting::get();
        $galleries = Gallery::get();
        $courses = Course::get();

        return view('frontend.gallery')->with('settings',$settings)->with('galleries',$galleries)->with('courses',$courses);
    }
    public function contact(){
        $settings = Setting::get();
        
        return view('frontend.contact')->with('settings',$settings);
    }
    public function visitorcontact(Request $request){
        $this->validate($request,['name'=>'required','email'=>'required|email','title'=>'required','message'=>'required']);

        $data = [
            'name' => $request->name,
            'email'=>$request->email,
            'title'=>$request->title,
            'message'=>$request->message,
        ];
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->title;
        $message->message = $request->message;
        $message->save();
        
        Mail::to('oumarfilston@gmail.com')->send(new VisitorContact($data));
        // Session::flash('message','Thank you for your email');
        return redirect()->back()->with('status','Your email have been send successfully');

    }
}
