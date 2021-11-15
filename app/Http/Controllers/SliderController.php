<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class SliderController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listsliders(){
        $sliders = Slider::get();
        return view('backend.sliders')->with('sliders',$sliders);
    }
    public function newslider(){
        return view('backend.newslider');
    }
    public function addslider(Request $request){
        $this->validate($request,['description1'=>'required','description2'=>'required','slider_image'=>'image|nullable|max:20999']);
        if($request->hasFile('slider_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('slider_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $newslider = new Slider();
        $newslider->description1 = $request->input('description1');
        $newslider->description2 = $request->input('description2');
        $newslider->slider_image = $fileNameToStore;
        $newslider->save();
        return redirect('/sliders')->with('status','Slider has been registered successfully ');
        

    }
    public function editslider($id){
        $slider = Slider::find($id);
        return view('backend.editslider')->with('slider',$slider);
    }
    public function updateslider(Request $request,$id){
        $this->validate($request,['description1'=>'required','description2'=>'required']);
        $slider =  Slider::find($id);
        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');

        if($request->hasFile('slider_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('slider_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
            if($slider->slider_image != 'noimage.jpg'){
                Storage::delete('public/slider_images/'.$slider->slider_image);
            }
            $slider->slider_image = $fileNameToStore;

        }
       
        $slider->update();
        return redirect('/sliders')->with('status','The slider has been modified successfully');  
        
    }
    public function deleteslider($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/sliders')->with('status','Slider has been deleted successfully ');
    }
}
