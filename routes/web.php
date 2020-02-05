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
Route::post('/insertg','Gallery\GalleryController@upload');
Route::get('Regdetails', 'LoginReg\LoginRegController@dataTab')->name('go');
Route::get('/edit/{id}','UpdateDel\UpdateDelController@up');
Route::get('/del/{id}','UpdateDel\UpdateDelController@del');    
Route::post('/editbyuser','UpdateDel\UpdateDelController@edit');
Route::post('/photos','Gallery\GalleryController@show');
Route::post('/gal/{id}','Gallery\GalleryController@photodata');
Route::view('/userprofile','website.UserProfile');
Route::view('/uploadex','website.UploadExcel');
Route::post('/import','upload\UploadExcelController@UploadExcel');