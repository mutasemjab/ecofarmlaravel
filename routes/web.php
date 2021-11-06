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

Route::get('/', function () {
    return view('project.index');
});

//////////// users farm /////////////////////////////
Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('admin.usersFarm');
    Route::get('create', 'UserController@create')->name('admin.usersFarm.create');
    Route::post('store', 'UserController@store')->name('admin.usersFarm.store');
    Route::get('edit/{id}', 'UserController@edit')->name('admin.usersFarm.edit');
    Route::post('update/{id}', 'UserController@update')->name('admin.usersFarm.update');
    Route::get('delete/{id}', 'UserController@destroy')->name('admin.usersFarm.delete');
});


//////////// sensor farm ///////////////////////////////////////// users farm /////////////////////////////
Route::group(['prefix' => 'sensors'], function () {
    Route::get('/', 'SensorController@index')->name('admin.sensors');
    Route::post('update/{id}', 'SensorController@update')->name('admin.sensors.update');
});
//////////// end sensor farm /////////////////////////////



//////////// device farm ///////////////////////////////////////// users farm /////////////////////////////
Route::group(['prefix' => 'devices'], function () {
    Route::get('/', 'DeviceController@index')->name('admin.devices');
    Route::get('create', 'DeviceController@create')->name('admin.devices.create');
    Route::post('store', 'DeviceController@store')->name('admin.devices.store');
    Route::get('edit/{id}', 'DeviceController@edit')->name('admin.devices.edit');
    Route::post('update/{id}', 'DeviceController@update')->name('admin.devices.update');
    Route::get('delete/{id}', 'DeviceController@destroy')->name('admin.devices.delete');
});
//////////// end device farm /////////////////////////////




//////////// output farm ///////////////////////////////////////// users farm /////////////////////////////
Route::group(['prefix' => 'outputs'], function () {
    Route::get('/', 'OutputController@index')->name('admin.outputs');
    Route::post('update/{id}', 'OutputController@update')->name('admin.outputs.update');
});
//////////// end output farm ///////////////////////////////////////// output farm ///////////////////////////////////////// users farm /////////////////////////////



/////////////// timers/////////////////////////////
Route::group(['prefix' => 'timers'], function () {
    Route::get('/', 'TimerController@index')->name('admin.timers');
    Route::get('create', 'TimerController@create')->name('admin.timers.create');
    Route::post('store', 'TimerController@store')->name('admin.timers.store');
    Route::get('edit/{id}', 'TimerController@edit')->name('admin.timers.edit');
    Route::post('update/{id}', 'TimerController@update')->name('admin.timers.update');
    Route::get('delete/{id}', 'TimerController@destroy')->name('admin.timers.delete');
});
//////////// end timers farm /////////////////////////////
