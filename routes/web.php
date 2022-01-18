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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('guest');
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('diare', 'App\Http\Controllers\PenyakitController@diare')->name('diare');
Route::get('ispa', 'App\Http\Controllers\PenyakitController@ispa')->name('ispa');
Route::get('tbc', 'App\Http\Controllers\PenyakitController@tbc')->name('tbc');
Route::get('dbd', 'App\Http\Controllers\PenyakitController@dbd')->name('dbd');


// CONSOLE URL
// 

Route::get('/symlink', function (Request $request) {
	Artisan::call('storage:link');
	echo '<script>alert("Create Symlink Success")</script>';
});

Route::get('/db-seed', function (Request $request) {
	Artisan::call('db:seed');
	echo '<script>alert("Seed Success")</script>';
});

Route::get('/cc', function (Request $request) {
	Artisan::call('cache:clear');
	echo '<script>alert("cache clear Success")</script>';
});
Route::get('/ccc', function (Request $request) {
	Artisan::call('config:cache');
	echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function (Request $request) {
	Artisan::call('view:clear');
	echo '<script>alert("view clear Success")</script>';
});
Route::get('/rc', function (Request $request) {
	Artisan::call('route:cache');
	echo '<script>alert("route cache Success")</script>';
});
Route::get('/rcc', function (Request $request) {
	Artisan::call('route:clear');
	echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function (Request $request) {
	Artisan::call('config:clear');
	echo '<script>alert("config clear Success")</script>';
});
Route::get('/opt', function (Request $request) {
	Artisan::call('optimize');
	echo '<script>alert("Optimize Success")</script>';
});
Route::get('/vc', function (Request $request) {
	Artisan::call('view:clear');
	echo '<script>alert("view clear Success")</script>';
});
Route::get('/rc', function (Request $request) {
	Artisan::call('route:cache');
	echo '<script>alert("route cache Success")</script>';
});
Route::get('/rcc', function (Request $request) {
	Artisan::call('route:clear');
	echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function (Request $request) {
	Artisan::call('config:clear');
	echo '<script>alert("config clear Success")</script>';
});