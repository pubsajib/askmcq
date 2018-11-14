<?php
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
//PROFILE
Route::prefix('profile')->group(function () {
	Route::get('/', 'ProfileController@view')->name('profile');
	Route::get('/edit', 'ProfileController@edit')->name('profile.edit');
	Route::put('/edit', 'ProfileController@update')->name('profile.update');
	Route::get('/password', 'ProfileController@password')->name('profile.password');
	Route::put('/password', 'ProfileController@savePassword')->name('profile.updatepassword');
	Route::get('/{user_id}/show', 'ProfileController@show')->name('profile.show');
});
// Route::get('profile/{profile}', 'UserController@profile')->name('profile')->middleware('verified');
// FOLLOW
Route::get('profile/{profile}/follow', 'UserController@follow')->name('user.follow');
Route::get('/{profile}/unfollow', 'UserController@unfollow')->name('user.unfollow');
// Role routes
Route::get('/role', 'RoleController@index')->name('role.index')->middleware('roles:admin');
Route::post('/role/{role}', 'RoleController@update')->name('role.update')->middleware('roles:admin');
// CATEGORIES
Route::resource('category', 'CategoryController');
// SUBCATEGORIES
Route::resource('subcategory', 'SubcategoryController');
// GROUPS
Route::resource('group', 'GroupController');
// QUESTIONS
Route::resource('question', 'QuestionController');
Route::get('/question-ask', 'QuestionController@ask')->name('question.ask');

// AJAX CALLS
Route::get('/api/group/{group}', 'GroupController@categories')->name('group.category');
Route::post('/api/user-bio', 'UserController@bio')->name('user.bio');







// IMAGE UPLOADER
Route::get('/image', 'ImageController@index')->name('image.show');
Route::post('/image', 'ImageController@uploadImage')->name('image.upload');
// Route::post('/image', function($value='') {
// 	return [1,2,3,4];
// })->name('image.upload');








// AUTHENTICATIONS
Auth::routes(['verify' => true]);
Route::get('{emailVerify}', 'Auth\VerificationController@showLoginModal')->name('emailvarification');
Route::get('{token}', 'Auth\ResetPasswordController@showResetModal')->name('passwordreset');

// PAGES
Route::get('/report/{question}', 'PageController@report')->name('report');
Route::get('/answer/{question}', 'PageController@answer')->name('answer');
Route::get('/discussion/{question}', 'PageController@discussion')->name('discussion');
Route::get('/terms', 'PageController@terms')->name('terms');
Route::get('/privacy-policy', 'PageController@privacypolicy')->name('privacypolicy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');