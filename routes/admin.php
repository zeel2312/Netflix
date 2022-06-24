<?php

// Authentication admin Login Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Auth\LoginController@login')->name('admin.postlogin');
Route::get('logout/{id?}', 'Auth\LoginController@logout')->name('admin.logout');

// Forget and reset password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.passwordemail');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('admin.auth.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.resetpassword');

// Dashboard Route....
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::post('/chart', 'AdminController@chart')->name('admin.chart');

// Admin Update Route....
Route::get('/edit-admin/{id}', 'AdminController@editAdmin')->name('admin.editAdmin');
Route::post('/update-admin', 'AdminController@updateAdmin')->name('admin.updateAdmin');

// Admin Change Password Route....
Route::get('/edit-password/{id}', 'AdminController@editPassword')->name('admin.editPassword');
Route::post('/change-password', 'AdminController@changePassword')->name('admin.changePassword');

// User Route
Route::group(['prefix' => 'user'], function () {
	Route::get('/add-user', 'UserController@addUserForm')->name('admin.addUserForm');
	Route::post('/upload', 'UserController@upload')->name('admin.upload');
	Route::match(['get','post'],'/all-users', 'UserController@allUsers')->name('admin.allUsers');
	Route::get('/delete-user/{id}', 'UserController@deleteUser')->name('admin.deleteUser');
	Route::get('/edit-user/{id}', 'UserController@editUser')->name('admin.editUser');
	Route::post('/update-user', 'UserController@updateUser')->name('admin.updateUser');
});

// Plan Route
Route::group(['prefix' => 'plan'], function () {
	Route::get('/add-plan', 'PlanController@addPlanForm')->name('admin.addPlanForm');
	Route::post('/upload-plan', 'PlanController@uploadPlan')->name('admin.uploadPlan');
	Route::get('/all-plans', 'PlanController@allPlans')->name('admin.allPlans');
	Route::get('/delete-plan/{id}', 'PlanController@deletePlan')->name('admin.deletePlan');
	Route::get('/edit-plan/{id}', 'PlanController@editPlan')->name('admin.editPlan');
	Route::post('/update-plan', 'PlanController@updatePlan')->name('admin.updatePlan');
});

// Category Route
Route::group(['prefix' => 'category'], function () {
	Route::post('/check-name', 'CategoryController@checkCategorya')->name('admin.checkCategorya');
	Route::get('/add-category', 'CategoryController@addCategoryForm')->name('admin.addCategoryForm');
	Route::post('/upload-category', 'CategoryController@uploadCategory')->name('admin.uploadCategory');
	Route::get('/all-categories', 'CategoryController@allCategories')->name('admin.allCategories');
	Route::get('/delete-category/{id}', 'CategoryController@deleteCategory')->name('admin.deleteCategory');
	Route::get('/edit-category/{id}', 'CategoryController@editCategory')->name('admin.editCategory');
	Route::post('/update-category', 'CategoryController@updateCategory')->name('admin.updateCategory');
});

// Sub-Category Route
Route::group(['prefix' => 'subcategory'], function () {
	Route::post('/check-sub-name', 'SubCategoryController@checkSubCategory')->name('admin.checkSubCategory');
	Route::get('/add-sub-category', 'SubCategoryController@addSubCategoryForm')->name('admin.addSubCategoryForm');
	Route::post('/upload-sub-category', 'SubCategoryController@uploadSubCategory')->name('admin.uploadSubCategory');
	Route::get('/all-sub-categories', 'SubCategoryController@allSubCategories')->name('admin.allSubCategories');
	Route::get('/delete-sub-category/{id}', 'SubCategoryController@deleteSubCategory')->name('admin.deleteSubCategory');
	Route::get('/edit-sub-category/{id}', 'SubCategoryController@editSubCategory')->name('admin.editSubCategory');
	Route::post('/update-sub-category', 'SubCategoryController@updateSubCategory')->name('admin.updateSubCategory');
});

// Video-Uploader Route
Route::group(['prefix' => 'videouploader'], function () {
	Route::post('/check-category', 'VideoUploaderController@checkCategory')->name('admin.checkCategory');
	Route::get('/add-video', 'VideoUploaderController@addVideoForm')->name('admin.addVideoForm');
	Route::post('/upload-video', 'VideoUploaderController@uploadVideo')->name('admin.uploadVideo');
	Route::get('/all-videos', 'VideoUploaderController@allVideos')->name('admin.allVideos');
	Route::get('/delete-video/{id}', 'VideoUploaderController@deleteVideo')->name('admin.deleteVideo');
	Route::get('/edit-video/{id}', 'VideoUploaderController@editVideo')->name('admin.editVideo');
	Route::post('/update-video', 'VideoUploaderController@updateVideo')->name('admin.updateVideo');
});

// Settings Route
Route::group(['prefix' => 'settings'], function () {
	Route::get('/add-settings', 'SettingsController@addSettingsForm')->name('admin.addSettingsForm');
	Route::post('/upload-settings', 'SettingsController@uploadSettings')->name('admin.uploadSettings');
	Route::get('/all-settings', 'SettingsController@allSettings')->name('admin.allSettings');
	Route::get('/delete-settings/{id}', 'SettingsController@deleteSettings')->name('admin.deleteSettings');
	Route::get('/edit-settings/{id}', 'SettingsController@editSettings')->name('admin.editSettings');
	Route::post('/update-settings', 'SettingsController@updateSettings')->name('admin.updateSettings');
});