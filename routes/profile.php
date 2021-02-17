<?php
use Illuminate\Support\Facades\Route;
/**
 * Category Routes
 */
Route::group(array('prefix' => 'profile'), function () {
	Route::get('/', array('uses'=>'profile\ProfileController@index', 'as'=>'profile.index'));
	Route::get('/hub_info', array('uses'=>'profile\ProfileController@hubInfo', 'as'=>'profile.hub_info'));
    Route::post('/upload_avatar', array('uses'=>'profile\ProfileController@uploadAvatar', 'as'=>'profile.upload_avatar'));
    Route::post('/upload_cover', array('uses'=>'profile\ProfileController@uploadCover', 'as'=>'profile.upload_cover'));
    //Route::get('/', array('uses'=>'category\CategoryController@index', 'as'=>'category.index'));
    //Route::get('create', array('uses'=>'category\CategoryController@create', 'as'=>'category.create'));
    //Route::post('delete/{blog}', array('uses'=>'category\CategoryController@destroy', 'as'=>'category.destroy'));
});