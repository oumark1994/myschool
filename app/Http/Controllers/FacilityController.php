<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;


class FacilityController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listfacilities(){
        $facilities = Facility::get();
        return view('backend.facilities')->with('facilities',$facilities);
    }
    public function newfacility(){
        return view('backend.newfacility');
    }
    public function addfacility(Request $request){
        $this->validate($request,['title'=>'required','description'=>'required']);
    
        
        $newfacility = new Facility();
        $newfacility->title = $request->input('title');
        $newfacility->description = $request->input('description');
        $newfacility->save();
        return redirect('/listfacilities')->with('status','Facility'.$newfacility->title.' has been registered successfully');

    }
    public function editfacility($id){
        $facility = Facility::find($id);

        return view('backend.editfacility')->with('facility',$facility);
    }
    public function updatefacility(Request $request,$id){
        $this->validate($request,['title'=>'required','description'=>'required']);
        $facility = Facility::find($id);
        $facility->title = $request->title;
        $facility->description = $request->description;
     
        $facility->update();
        return redirect('/listfacilities')->with('status','The facility '.$facility->title.' has been modified successfully');
        
    }
    public function deletefacility($id){
        $facility = Facility::find($id);
        $facility->delete();

        return redirect('/listfacilities')->with('status','The facility '.$facility->title.' has been delete successfully');

    }
}
