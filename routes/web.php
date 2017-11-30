<?php

//dashboard routes

Route::group(['middleware' => ['permission:ver_dashboard']], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard.index');
});

Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
	  Route::resource('permissions','PermissionController');
});
