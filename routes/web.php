<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => 'DataController@index',
    'as' => 'home'
]);

Route::get('/employee', [
    'uses' => 'EmployeeController@index',
    'as' => 'employee.index'
]);
Route::get('/employee.create', [
    'uses' => 'EmployeeController@create',
    'as' => 'employee.create'
]);
Route::post('/employee.store', [
    'uses' => 'EmployeeController@store',
    'as' => 'employee.store'
]);
Route::get('/{employee}/employee.edit', [
    'uses' => 'EmployeeController@edit',
    'as' => 'employee.edit'
]);
Route::post('/{employee}/employee.update', [
    'uses' => 'EmployeeController@update',
    'as' => 'employee.update'
]);
Route::get('/{employee}/employee.destroy', [
    'uses' => 'EmployeeController@delete',
    'as' => 'employee.destroy'
]);

Route::get('/company', [
    'uses' => 'CompanyController@index',
    'as' => 'company.index'
]);
Route::get('/company.create', [
    'uses' => 'CompanyController@create',
    'as' => 'company.create'
]);
Route::post('/company.store', [
    'uses' => 'CompanyController@store',
    'as' => 'company.store'
]);
Route::get('/{company}/company.edit', [
    'uses' => 'CompanyController@edit',
    'as' => 'company.edit'
]);
Route::post('/{company}/company.update', [
    'uses' => 'CompanyController@update',
    'as' => 'company.update'
]);
Route::get('/{company}/company.destroy', [
    'uses' => 'CompanyController@delete',
    'as' => 'company.destroy'
]);

Route::get('/exportexcel',[
    'uses' => 'DataController@exportexcel',
    'as' => 'exportexcel'
]);

Route::get('/exportpdf',[
    'uses' => 'DataController@exportpdf',
    'as' => 'exportpdf'
]);