<?php

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



Auth::routes();
Route::get('activeinactive/{id_hash}/{action}', 'Admin\UploadController@activeinactive');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('frontend.homepage');
});
Route::group(['middleware' => 'preventBackHistory'],function(){
  Auth::routes();
  Route::get('/home', 'HomeController@index');
  
});
Route::get('activeinactiveofficial/{id_hash}/{action}', 'Admin\KeyofficialController@activeinactive');
Route::get('saveorderofficial/{id_hash}/{order_val}', 'Admin\KeyofficialController@saveorder');
Route::get('activeinactivelink/{id_hash}/{action}', 'Admin\ImportantlinksController@activeinactive');
Route::get('saveorder/{id_hash}/{order_val}', 'Admin\ImportantlinksController@saveorder');

Route::get('activeinactivebanner/{id_hash}/{action}', 'Admin\BannerController@activeinactive');
Route::get('bannerorder/{id_hash}/{order_val}', 'Admin\BannerController@saveorder');
Route::get('activeinactivetypes/{id_hash}/{action}', 'Admin\TbluploadtypesController@activeinactive');
Route::get('useraddition/{selectedVal}', 'UsersController@ajaj');
Route::get('about-us', 'frontend\AboutController@index');
Route::get('important-links', 'frontend\ImportantlinksController@index');
Route::get('contact-us', 'frontend\ContactusController@index');
Route::get('organizational_stucture', 'frontend\OrgstructController@index');
Route::get('organizational_stucture/dsp', 'frontend\OrgstructController@dsp');
Route::get('organizational_stucture/inspector', 'frontend\OrgstructController@inspector');
Route::get('functions', 'frontend\FunctionsController@index');