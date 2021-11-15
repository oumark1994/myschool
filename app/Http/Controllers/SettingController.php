<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;

class SettingController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function newschool(Request $request){
        $this->validate($request,['name'=>'required','logo'=>'required','telephone'=>'required','email'=>'required','lotto1'=>'required','lotto2'=>'required','lotto3'=>'required','year'=>'required']);
        if($request->hasFile('logo')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('logo')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('logo')->storeAs('public/logo_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $newschool = new Setting();
        $newschool->name = $request->input('name');
        $newschool->mobile = $request->input('mobile');
        $newschool->logo = $fileNameToStore;
        $newschool->telephone = $request->input('telephone');
        $newschool->email = $request->input('email');
        $newschool->lotto1 = $request->input('lotto1');
        $newschool->lotto2 = $request->input('lotto2');
        $newschool->lotto3 = $request->input('lotto3');
        $newschool->facebook_link = $request->input('f_link');
        $newschool->instagram_link = $request->input('i_link');
        $newschool->twitter_link = $request->input('t_link');
        $newschool->founder = $request->input('founder');
        $newschool->year = $request->input('year');
        $newschool->save();
        return redirect('/setting')->with('status','New school '.$newschool->name.' has been registered successfully ');

    }
    public function setting(){
        $settings = Setting::get();
        return view('backend.setting')->with('settings',$settings);
    }
   
    public function newsetting(){
        return view('backend.newsetting');
    }
    public function editsetting($id){
        $setting = Setting::find($id);
        return view('backend.editsetting')->with('setting',$setting);
    }
    public function updatesetting(Request $request,$id){
        $setting =  Setting::find($id);
        $setting->name = $request->input('name');
        $setting->mobile = $request->input('mobile');
        $setting->telephone = $request->input('telephone');
        $setting->email = $request->input('email');
        $setting->lotto1 = $request->input('lotto1');
        $setting->lotto2 = $request->input('lotto2');
        $setting->lotto3 = $request->input('lotto3');
        $setting->facebook_link = $request->input('f_link');
        $setting->instagram_link = $request->input('i_link');
        $setting->twitter_link = $request->input('t_link');
        $setting->founder = $request->input('founder');
        $setting->year = $request->input('year');
        if($request->hasFile('logo')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('logo')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('logo')->storeAs('public/logo_images',$fileNameToStore);
            if($setting->logo != 'noimage.jpg'){
                Storage::delete('public/logo_images/'.$setting->logo);
            }
            $setting->logo = $fileNameToStore;

        }
        $setting->update();
        return redirect('/setting')->with('status',' School '.$setting->name.' has been update successfully ');

    }
    public function deletesetting($id){
    }
}
