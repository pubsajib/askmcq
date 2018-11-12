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
Route::get('user-profile', 'UserController@profile')->name('user.profile');
Route::get('profile/{profile}', 'UserController@profile')->name('profile')->middleware('verified');
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