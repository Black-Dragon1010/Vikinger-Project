<?php
use Illuminate\Support\Facades\Route;
/**
 * Category Routes
 */
Route::group(array('prefix' => 'profile', 'middleware'=>'authentication'), function () {
	Route::get('/{user_id}', array('uses'=>'profile\ProfileController@index', 'as'=>'profile.index'));
	Route::get('/hub_info', array('uses'=>'profile\ProfileController@hubInfo', 'as'=>'profile.hub_info'));
    Route::post('/upload_avatar', array('uses'=>'profile\ProfileController@uploadAvatar', 'as'=>'profile.upload_avatar'));
    Route::post('/upload_cover', array('uses'=>'profile\ProfileController@uploadCover', 'as'=>'profile.upload_cover'));
    Route::get('/{user_id}/time_line', array('uses'=>'profile\ProfileController@getTimeLine', 'as'=>'profile.time_line'));
    Route::get('/{user_id}/friend_list', array('uses'=>'profile\ProfileController@getFriendList', 'as'=>'profile.friend_list'));
    //Route::get('/', array('uses'=>'category\CategoryController@index', 'as'=>'category.index'));
    //Route::get('create', array('uses'=>'category\CategoryController@create', 'as'=>'category.create'));
    //Route::post('delete/{blog}', array('uses'=>'category\CategoryController@destroy', 'as'=>'category.destroy'));
});
