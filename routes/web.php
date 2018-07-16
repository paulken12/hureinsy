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

//public page
Route::get('/', function () {
    return view('welcome');
});

//login and register redirection
Auth::routes();

//user home page - constructor already have auth
Route::get('/home', 'HomeController@index')->name('home');

//middleware => auth group to check if the user is login
//if not login go to login page
Route::group(['middleware' => 'auth'],function()
{
    //view-create-edit-delete page redirection
    Route::resource('employees', 'EmpBasicInfoController');

    // password change redirection
    Route::get('changePassword', 'ChangePasswordController@show');
    Route::post('changePassword', 'ChangePasswordController@change')->name('changePassword');

    //user profile redirection
    Route::get('profile/{employees}', 'EmpProfileController@show')->name('profiles');

    //redirect to edit form
    Route::get('profile/{profile}/basic/edit', 'EmpBasicInfoController@edit')->name('profile.basic.edit');
    //redirect to contact form
    Route::get('profile/{profile}/contact/edit', 'EmpContactInfoController@edit')->name('profile.contact.edit');

    //update the basic information
    Route::post('profile/{profile}/basic', 'EmpBasicInfoController@update')->name('profile.basic.update');
    //update contact
    Route::post('profile/{profile}/contact', 'EmpContactInfoController@update')->name('profile.contact.update');

    Route::get('authorization', 'PermissionRoleController@index')->name('authorization');

    Route::get('authorization/edit', 'PermissionRoleController@edit')->name('authorization.edit');

    Route::get('users', 'UserController@index')->name('users');



});