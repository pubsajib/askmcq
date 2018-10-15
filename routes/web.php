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
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});

// User routes
Route::resource('user', 'UserController');
Route::get('user-active', 'UserController@activeUsers')->name('user.active');
Route::get('user-freeze', 'UserController@freezeUsers')->name('user.freeze');
Route::get('user-inactive', 'UserController@inactiveUsers')->name('user.inactive');
Route::put('user-status/{user}', 'UserController@updateStaush')->name('user.changeStatus');
Route::get('user-profile', 'UserController@profile')->name('user.profile');
Route::get('profile/{profile}', 'UserController@profile')->name('profile')->middleware('verified');
// Role routes
Route::get('/role', 'RoleController@index')->name('role.index')->middleware('roles:admin');
Route::post('/role/{role}', 'RoleController@update')->name('role.update')->middleware('roles:admin');
// CATEGORIES
Route::resource('category', 'CategoryController');
// GROUPS
Route::resource('group', 'GroupController');

Auth::routes(['verify' => true]);
Route::get('{emailVerify}', 'Auth\VerificationController@showLoginModal')->name('emailvarification');
Route::get('{token}', 'Auth\ResetPasswordController@showResetModal')->name('passwordreset');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () { return view('welcome'); });