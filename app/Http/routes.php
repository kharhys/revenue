<?php

# todo: use for finance bill

Route::get('/', 'WelcomeController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('wards', 'WelcomeController@wards');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'dashboard' => 'DashboardController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('form', 'DomainFormController');
Route::resource('field', 'FieldController');
Route::resource('fee', 'FeeController');
Route::resource('user', 'UsersController');
Route::resource('domain', 'DomainsController');
Route::resource('docket', 'DocketController');
Route::resource('plot', 'PlotController');
Route::resource('account', 'AccountController');
Route::resource('service', 'ServiceController');
Route::resource('section', 'SectionController');
Route::resource('department', 'DepartmentsController');
Route::resource('rulemessage', 'RulemessageController');
Route::resource('service.application', 'ApplicationController');
