<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

// Route::get('/', 'HomeController@index');
//Route::get('/home', 'HomeController@index');

Route::get('/home', 'PagesController@home');
Route::get('/about_us', 'PagesController@about_us');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/team', 'PagesController@team');



// Route::get('/user', 'UserController@index');
// Route::post('/user/save', 'UserController@store');

$router->resource('user_profile','UserController');
//Route::get('user_profile', array('as' => 'user_profile.index', 'uses' => 'UserController@index'));

// //edit
// Route::get('user_profile/{edit}/{id}', array('as' => 'user_profile.edit', 'uses' => 'UserController@edit'));
// //update
// Route::put('user_profile/{uid}/{id}', array('as' => 'user_profile.update', 'uses' => 'UserController@update'));
// Route::patch('user_profile/{uid}/{id}', array('uses' => 'UserController@update'));




Route::get('change_password', array('as' => 'user_profile.change_pass', 'uses' => 'ChangePassController@change_pass'));
Route::put('change_password/{id}', array('as' => 'user_profile.update_pass', 'uses' => 'ChangePassController@update_pass'));
Route::patch('change_password/{id}', array('uses' => 'ChangePassController@update_pass'));



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//admin
Route::get('admin_dashboard', array('as' => 'admin_dashboard.index', 'uses' => 'AdminController@index'));

Route::get('admin_dashboard/search', array('as' => 'admin_dashboard.search', 'uses' => 'AdminController@search'));

Route::get('admin_dashboard/view', array('as' => 'admin_dashboard.view', 'uses' => 'AdminController@view'));

$router->resource('user_profile/personal_info','pinfoController');
$router->resource('user_profile/education','EducController');
$router->resource('user_profile/reference','RefController');
$router->resource('user_profile/position','CompController');




Route::get('user_profile/position/create', array('as' => 'user_profile.position.create', 'uses' => 'UserController@index'));

Route::get('user_profile/reference/create', array('as' => 'user_profile.reference.create', 'uses' => 'UserController@index'));

Route::get('user_profile/education/create', array('as' => 'user_profile.education.create', 'uses' => 'UserController@index'));


//cancel
Route:post('user_profile/education/cancel/{id}', array('as' => 'user_profile.cancel', 'uses' => 'EducController@cancel'));
