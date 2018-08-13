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
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('confirmed');

//middleware => auth group to check if the user is login
//if not login go to login page
Route::group(['middleware' => ['auth','confirmed','permissions']],function()
{
    Route::get('api/users', 'Api\UsersController@index');

    Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store')->name('avatar');
    //view-create-edit-delete page redirection
    Route::resource('employees', 'EmpBasicInfoController');

    // password change redirection
    Route::get('changePassword', 'ChangePasswordController@show');
    Route::post('changePassword', 'ChangePasswordController@change')->name('changePassword');

    //user profile redirection
    Route::get('profile/{profile}', 'EmpProfileController@show')->name('profiles');

    //=================================================== CREATE ================================================================

    Route::get('employee/profile', 'EmpProfileController@create');

    //=================================================== EDIT ================================================================

    //redirect to edit form
    Route::get('profile/{profile}/basic/edit', 'EmpBasicInfoController@edit')->name('profile.basic.edit');
    //redirect to contact form
    Route::get('profile/{profile}/contact/edit', 'EmpContactInfoController@edit')->name('profile.contact.edit');

    Route::get('profile/{profile}/address/edit', 'EmpAddressInfoController@edit')->name('profile.address.edit');

    Route::get('profile/{profile}/family/edit', 'EmpFamilyBackgroundController@edit')->name('profile.family.edit');

    Route::get('profile/{profile}/education/edit', 'EmpEducationController@edit')->name('profile.education.edit');

    Route::get('profile/{profile}/experience/edit', 'EmpExperienceController@edit')->name('profile.experience.edit');

    Route::get('profile/{profile}/reference/edit', 'EmpReferenceController@edit')->name('profile.reference.edit');

    Route::get('profile/{profile}/emergency/edit', 'EmpEmergencyController@edit')->name('profile.emergency.edit');

    Route::get('profile/{profile}/medical/edit', 'EmpMedicalController@edit')->name('profile.medical.edit');

    Route::get('profile/{profile}/skills/edit', 'EmpSkillController@edit')->name('profile.skills.edit');

    Route::get('profile/{profile}/training/edit', 'EmpTrainingController@edit')->name('profile.training.edit');

    Route::get('profile/{profile}/conviction/edit', 'EmpCriminalController@edit')->name('profile.conviction.edit');

    Route::get('profile/{profile}/benefits/edit', 'EmpBenefitController@edit')->name('profile.benefits.edit');

    //=================================================== UPDATE ================================================================

    //update the basic information
    Route::post('profile/{profile}/basic', 'EmpBasicInfoController@update')->name('profile.basic.update');
    //update contact
    Route::post('profile/{profile}/contact', 'EmpContactInfoController@update')->name('profile.contact.update');

    Route::post('profile/{profile}/address', 'EmpAddressInfoController@update')->name('profile.address.update');

    Route::post('profile/{profile}/family', 'EmpFamilyBackgroundController@update')->name('profile.family.update');

    Route::post('profile/{profile}/education', 'EmpEducationController@update')->name('profile.education.update');

    Route::post('profile/{profile}/experience', 'EmpExperienceController@update')->name('profile.experience.update');

    Route::post('profile/{profile}/reference', 'EmpReferenceController@update')->name('profile.reference.update');

    Route::post('profile/{profile}/emergency', 'EmpEmergencyController@update')->name('profile.emergency.update');

    Route::post('profile/{profile}/medical', 'EmpMedicalController@update')->name('profile.medical.update');

    Route::post('profile/{profile}/skills', 'EmpSkillController@update')->name('profile.skills.update');

    Route::post('profile/{profile}/training', 'EmpTrainingController@update')->name('profile.training.update');

    Route::post('profile/{profile}/conviction', 'EmpCriminalController@update')->name('profile.conviction.update');

    Route::post('profile/{profile}/benefits', 'EmpBenefitController@update')->name('profile.benefits.update');

    //=================================================== UPDATE END ================================================================

    Route::get('authorization', 'PermissionRoleController@index')->name('authorization');

    Route::get('authorization/edit', 'PermissionRoleController@edit')->name('authorization.edit');

    Route::get('admin/users', 'UserController@index')->name('users');

    Route::get('register/employee', 'NewEmployee\RegisterEmployeeController@create')->name('register.create');

    Route::post('register/employee', 'NewEmployee\RegisterEmployeeController@store')->name('register.store');

    //=================================================== PAF ================================================================

    Route::get('paf/search', 'Paf\RequestController@index')->name('paf.index');    

    Route::any('paf/search/result', 'Paf\RequestController@search')->name('paf.search');

    Route::post('paf/search/request', 'Paf\RequestController@store')->name('paf.store');
});

Route::post('/register/confirmed', 'Auth\RegisterConfirmationController@store')->name('register.confirmed')->middleware('auth');
Route::get('/register/confirm', 'Auth\RegisterConfirmationController@create')->name('register.confirm');