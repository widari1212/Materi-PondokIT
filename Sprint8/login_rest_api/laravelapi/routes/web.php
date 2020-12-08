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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//   $nama = "ica";
//     return view('about', ['nama' => $nama] );
// });

// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');

// Route::get('/mahasiswa', 'MahasiswaController@index');

//students
// Route::get('/students', 'StudentsController@index');

// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show'); //bacanya kalo ada request di method get ke hal students / id student nya maka arahkan ke controller students method nya show
// Route::post('/students', 'StudentsController@store'); //untuk menagani insert data kedalam database. ini adalah url form tambah data
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::put('/students/{student}', 'StudentsController@update');
Route::resource('students', 'StudentsController');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');
// Route::group(['prefix' => 'admin', "middleware" => "auth"], function () {
// });
