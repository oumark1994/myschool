<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home Route
Route::get('/topbar','App\Http\Controllers\ClientController@setting');
Route::get('/','App\Http\Controllers\ClientController@home');

Route::get('/about','App\Http\Controllers\ClientController@about');
Route::get('/courses','App\Http\Controllers\ClientController@courses');
Route::get('/events','App\Http\Controllers\ClientController@events');
Route::get('/gallery','App\Http\Controllers\ClientController@gallery');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::post('/visitors','App\Http\Controllers\ClientController@visitorcontact');

//Admin Route
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');

Route::get('/setting','App\Http\Controllers\AdminController@setting');
//courses
Route::get('/listcourses','App\Http\Controllers\CourseController@listcourses');
Route::get('/newcourse','App\Http\Controllers\CourseController@newcourse');


Route::get('/editcourse/{id}','App\Http\Controllers\CourseController@editcourse');
Route::post('/updatecourse/{id}','App\Http\Controllers\CourseController@updatecourse');
Route::post('/addcourse','App\Http\Controllers\CourseController@addcourse');
Route::get('/deletecourse/{id}','App\Http\Controllers\CourseController@deletecourse');
Route::post('/addevent','App\Http\Controllers\EventController@addevent');

//events
Route::get('/listevents','App\Http\Controllers\EventController@listevents');
Route::get('/newevent','App\Http\Controllers\EventController@newevent');
Route::get('/editevent/{id}','App\Http\Controllers\EventController@editevent');
Route::post('/updateevent/{id}','App\Http\Controllers\EventController@updateevent');
Route::get('/deleteevent/{id}','App\Http\Controllers\EventController@deleteevent');
//messages
Route::get('/messages','App\Http\Controllers\MessagesController@messages');

Route::get('/deletemessage/{id}','App\Http\Controllers\MessagesController@deletemessage');
//gallery
Route::get('/listgallery','App\Http\Controllers\GalleryController@listgallery');
Route::get('/newgallery','App\Http\Controllers\GalleryController@newgallery');
Route::get('/editgallery/{id}','App\Http\Controllers\GalleryController@editgallery');
Route::post('/updategallery/{id}','App\Http\Controllers\GalleryController@updategallery');
Route::get('/deletegallery/{id}','App\Http\Controllers\GalleryController@deletegallery');

Route::post('/addgallery','App\Http\Controllers\GalleryController@addgallery');
Route::delete('/deleteevent/{id}','App\Http\Controllers\GalleryController@deletegallery');
//facilites
Route::get('/listfacilities','App\Http\Controllers\FacilityController@listfacilities');
Route::get('/newfacility','App\Http\Controllers\FacilityController@newfacility');
Route::post('/addfacility','App\Http\Controllers\FacilityController@addfacility');
Route::get('/editfacility/{id}','App\Http\Controllers\FacilityController@editfacility');
Route::post('/updatefacility/{id}','App\Http\Controllers\FacilityController@updatefacility');
Route::get('/deletefacility/{id}','App\Http\Controllers\FacilityController@deletefacility');
//setting
Route::get('/setting','App\Http\Controllers\SettingController@setting');
Route::get('/newsetting','App\Http\Controllers\SettingController@newsetting');
Route::post('/newschool','App\Http\Controllers\SettingController@newschool');

Route::get('/editsetting/{id}','App\Http\Controllers\SettingController@editsetting');
Route::post('/updatesetting/{id}','App\Http\Controllers\SettingController@updatesetting');
Route::delete('/deletesetting/{id}','App\Http\Controllers\SettingController@deletesetting');
//sliders
Route::get('/sliders','App\Http\Controllers\SliderController@listsliders');
Route::get('/newslider','App\Http\Controllers\SliderController@newslider');
Route::post('/addslider','App\Http\Controllers\SliderController@addslider');
Route::get('/editslider/{id}','App\Http\Controllers\SliderController@editslider');
Route::post('/updateslider/{id}','App\Http\Controllers\SliderController@updateslider');
Route::get('/deleteslider/{id}','App\Http\Controllers\SliderController@deleteslider');
//menus
Route::get('/listmenus','App\Http\Controllers\MenuController@listmenus');
Route::get('/newmenu','App\Http\Controllers\MenuController@newmenu');
Route::post('/addmenu','App\Http\Controllers\MenuController@addmenu');
Route::get('/editmenu/{id}','App\Http\Controllers\MenuController@editmenu');
Route::post('/updatemenu/{id}','App\Http\Controllers\MenuController@updatemenu');
Route::get('/deletemenu/{id}','App\Http\Controllers\MenuController@deletemenu');
//frontend
Route::get('/schooldata','App\Http\Controllers\ClientController@home');


Auth::routes();
Route::get('/school', [App\Http\Controllers\HomeController::class, 'index']);







