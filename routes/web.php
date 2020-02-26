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

Route::view('/','website.Home')->name('home');

Route::post('/reg','LoginReg\LoginRegController@Reg');
Route::post('/loginuser','LoginReg\LoginRegController@Log')->name('login');
Route::post('insertg','Gallery\GalleryController@upload');
Route::get('Regdetails', 'LoginReg\LoginRegController@dataTab')->name('go');
Route::get('/edit/{id}','UpdateDel\UpdateDelController@up');
Route::get('/assign/{id}','UpdateDel\UpdateDelController@attach');
Route::get('/del/{id}','UpdateDel\UpdateDelController@del');    
Route::post('/editbyuser','UpdateDel\UpdateDelController@edit');
Route::get('/photos','Gallery\GalleryController@show');
Route::post('/gal/{id}','Gallery\GalleryController@photodata');
Route::get('/userprofile','LoginReg\LoginRegController@ProfileCheck')->name('profile');
Route::view('/uploadex','website.UploadExcel');
Route::post('/import','upload\UploadExcelController@UploadExcel');
Route::post('/send','Mail\SendMailController@send');
Route::view('mailsend','website.SendingMail');
Route::post('resetpassword','LoginReg\LoginRegController@reset');
Route::view('changepassword/','website.ChangePassword')->name('change');
Route::get('logout','LoginReg\LoginRegController@logout');
Route::view('viewdt','website.DataTable');
Route::post('/newpass','LoginReg\LoginRegController@change');
Route::get('/test','LoginReg\LoginRegController@test');
Route::view('/breadcrumb','website.Breadcrumb');
Route::view('/blade','website.Testingpurpose');
Route::get('/checkpivot','Relationship\ManytoManytestcontroller@index');
Route::post('/assign','LoginReg\LoginRegController@assign');
Route::get('/createroleper','LoginReg\LoginRegController@createroleper');