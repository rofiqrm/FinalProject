<?php

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

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    // \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/question', 'QuestionController');
Route::resource('/answer', 'AnswerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
