<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;


class CourseController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listcourses(){
        $courses = Course::get();
        return view('backend.courses')->with('courses',$courses);
    }
    public function newcourse(){
        return view('backend.newcourse');
    }
    public function editcourse($id){
        $course = Course::find($id);
        return view('backend.editcourse')->with('course',$course);
    }
    public function updatecourse(Request $request,$id){
         $this->validate($request,['name'=>'required','description'=>'required','course_image'=>'image|nullable|max:20999']);
        $course =  Course::find($id);
        $course->name = $request->input('name');
        $course->description = $request->input('description');

        if($request->hasFile('course_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('course_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('course_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('course_image')->storeAs('public/course_images',$fileNameToStore);
            if($course->image != 'noimage.jpg'){
                Storage::delete('public/course_images/'.$course->course_image);
            }
            $course->image = $fileNameToStore;

        }
       
        $course->update();
        return redirect('/listcourses')->with('status','The course '.$course->name.' has been modified successfully');
        
    }
    public function deletecourse($id){
        $course = Course::find($id);
        $course->delete();
        return redirect('/listcourses')->with('status','Course '.$course->name.' has been deleted successfully ');
    }
    public function addcourse(Request $request){
        $this->validate($request,['name'=>'required|unique:courses','course_image'=>'image|nullable|max:20999','course_details'=>'required']);
        if($request->hasFile('course_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('course_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('course_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('course_image')->storeAs('public/course_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $newcourse = new Course();
        $newcourse->name = $request->input('name');
        $newcourse->description = $request->input('course_details');
        $newcourse->image = $fileNameToStore;
        $newcourse->save();
        return redirect('/listcourses')->with('status','Course '.$newcourse->name.' has been registered successfully ');

    }
}
