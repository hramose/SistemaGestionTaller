<?php

//dashboard routes

Route::group(['middleware' => ['permission:ver_dashboard']], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard.index');
});

// clientes routes

Route::group(['middleware' => ['permission:ver_clientes']], function () {
  Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
});

Route::group(['middleware' => ['permission:crear_clientes']], function () {
  Route::get('/clientes/create', 'ClientesController@create')->name('clientes.create');
  Route::post('/clientes', 'ClientesController@store')->name('clientes.store');
});

Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
	  Route::resource('permissions','PermissionController');
});
