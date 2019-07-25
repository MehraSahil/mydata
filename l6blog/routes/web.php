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

Route::get('/', function () {
    return view('welcome');
});
Route::match(['GET','POST'], 'sendSms','TwillioOtp\TwillioController@sendOtp');
Route::match(['GET','POST'],'ajaxData','AjaxController@ajaxData')->name('ajaxData');
Route::get('deleteRecord/{id}','AjaxController@deleteRecord')->name('deleteRecord');
Route::get('showdata','AjaxController@showdata')->name('showdata');

//Live search by ajax in laravel
Route::get('search','LiveSearch\SearchController@showdata');
Route::get('search/data','LiveSearch\SearchController@ajaxData');

//Cookie set and get method run execute 
Route::get('cookie/set','LiveSearch\SearchController@setCookie');
Route::get('cookie/get','LiveSearch\SearchController@getCookie');

//Fetch Record by ajax 
Route::get('showRecord','FetchRecord\AjaxFetchRecord@setRecord');
Route::get('recordfetch','FetchRecord\AjaxFetchRecord@getRecord');
//single image preview 
Route::get('imagePreview',function(){
		return view('singleImage.singleImage');
});
//notification send by email 
Route::get('sendNotification','Notification\NotificationController@sendNotification');

Route::match(['GET','POST'],'registerbyQueueable','JobController@sendEmailviaNotification');

Route::match(['GET','POST'],'loginGuard','GuradLoginController@login');
Route::get('profile','GuradLoginController@profile')->name('profile');

Route::group(['middleware' => 'CheckUser'], function(){

	Route::get('dashboard','GuradLoginController@dashboard');
	Route::get('logout','GuradLoginController@logout');
});
Route::get('mypractise','GuradLoginController@practise');

Auth::routes();

Route::get('showUser', 'HomeController@showUser');
Route::get('postbyid/{id}','HomeController@showUser');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dynamicSet','DynamicSetData@dynamicSetData');
Route::get('index','DynamicSetData@searchdata');
