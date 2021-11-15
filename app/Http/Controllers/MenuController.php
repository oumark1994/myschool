<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;

class MenuController extends Controller
{
    //
      //
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function listmenus(){
        $menus = Menu::get();
        return view('backend.menus')->with('menus',$menus);
    }
    public function newmenu(){
        return view('backend.newmenu');
    }
    public function addmenu(Request $request){
        $this->validate($request,['title'=>'required']);
    
        
        $newmenu = new Menu();
        $newmenu->title = $request->input('title');

        $newmenu->save();
        return redirect('/listmenus')->with('status','New menu has been registered successfully ');
        

    }
    public function editmenu($id){
        $menu = Menu::find($id);
        return view('backend.editmenu')->with('menu',$menu);
    }
    public function updatemenu(Request $request,$id){
        $this->validate($request,['title'=>'required']);
        $menu =  Menu::find($id);
        $menu->title = $request->input('title');
        $menu->update();
        return redirect('/listmenus')->with('status','The menu has been modified successfully');  
        
    }
    public function deletemenu($id){
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/listmenus')->with('status','Menu has been deleted successfully ');
    }
}
