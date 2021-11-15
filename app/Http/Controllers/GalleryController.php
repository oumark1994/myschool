<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;

class GalleryController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listgallery(){
        $galleries = Gallery::get();
        return view('backend.galleries')->with('galleries',$galleries);
    }
    public function newgallery(){
        return view('backend.newgallery');
    }
    public function addgallery(Request $request){
        $this->validate($request,['title'=>'required|unique:galleries','gallery_image'=>'image|nullable|max:20999']);
        if($request->hasFile('gallery_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('gallery_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('gallery_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('gallery_image')->storeAs('public/gallery_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $newgallery = new Gallery();
        $newgallery->title = $request->input('title');
        $newgallery->image_gallery = $fileNameToStore;
        $newgallery->save();
        return redirect('/listgallery')->with('status','Gallery '.$newgallery->title.' has been registered successfully ');
        

    }
    public function editgallery($id){
        $gallery = Gallery::find($id);
        return view('backend.editgallery')->with('gallery',$gallery);
    }
    public function updategallery(Request $request,$id){
        $this->validate($request,['title'=>'required','gallery_image'=>'image|nullable|max:20999']);
        $gallery =  Gallery::find($id);
        $gallery->title = $request->input('title');

        if($request->hasFile('gallery_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('gallery_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('gallery_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('gallery_image')->storeAs('public/gallery_images',$fileNameToStore);
            if($gallery->image_gallery != 'noimage.jpg'){
                Storage::delete('public/gallery_images/'.$gallery->image_gallery);
            }
            $gallery->image_gallery = $fileNameToStore;

        }
       
        $gallery->update();
        return redirect('/listgallery')->with('status','The gallery '.$gallery->title.' has been modified successfully');  
        
    }
    public function deletegallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/listgallery')->with('status','Gallery '.$gallery->title.' has been deleted successfully ');
    }
}
