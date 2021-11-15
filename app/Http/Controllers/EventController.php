<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;

class EventController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listevents(){
        $events = Event::get();
        return view('backend.events')->with('events',$events);
    }
    public function newevent(){
        return view('backend.newevent');
    }
    public function addevent(Request $request){
        $this->validate($request,['title'=>'required','event_image'=>'image|nullable|max:20999','description'=>'required','date'=>'required']);
        if($request->hasFile('event_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('event_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('event_image')->storeAs('public/event_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $newevent = new Event();
        $newevent->title = $request->input('title');
        $newevent->description = $request->input('description');

        $newevent->date = $request->input('date');

        $newevent->image = $fileNameToStore;
        $newevent->save();
        return redirect('/listevents')->with('status','Event '.$newevent->title.' has been added successfully ');


    }
    public function editevent($id){
        $event = Event::find($id);
        return view('backend.editevent')->with('event',$event);
    }
    public function updateevent(Request $request,$id){
        $this->validate($request,['title'=>'required','event_image'=>'image|nullable|max:20999','description'=>'required','date'=>'required']);
        $event =  Event::find($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->date = $request->input('date');

        if($request->hasFile('event_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('event_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('event_image')->storeAs('public/event_images',$fileNameToStore);
            if($event->image != 'noimage.jpg'){
                Storage::delete('public/event_images/'.$event->event_image);
            }
            $event->image = $fileNameToStore;

        }
       
        $event->update();
        return redirect('/listevents')->with('status','The event '.$event->title.' has been modified successfully');

        
    }
    public function deleteevent($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/listevents')->with('status','Event '.$event->title.' has been deleted successfully ');
        
    }
}
