<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\MessagesController;
use App\Http\Controllers\front\LoginController;

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

Route::get('/','App\Http\Controllers\UserController@home')->name('home');
Route::get('cat/{id}','App\Http\Controllers\CourseController@cat');
Route::get('course/{id}','App\Http\Controllers\CourseController@showDetails');
Route::get('contact','App\Http\Controllers\front\ContactController@contact')->name('contact');
Route::post('newsletter','App\Http\Controllers\front\MessagesController@newsLetter')->name('newsLetter');
Route::get('contact/messages','App\Http\Controllers\front\ContactController@contactMessages')->name('contactMessages');
Route::post('enroll','App\Http\Controllers\front\MessagesController@enroll')->name('enroll');
Route::prefix('trainer')->name('trainer.')->group(function () {
    Route::group(['middleware' => 'guest:trainer'], function () {
        Route::get('login','App\Http\Controllers\front\TrainerController@getTrainerLogin')->name('login');
        Route::post('login','App\Http\Controllers\front\TrainerController@postTrainerLogin')->name('dologin');
        Route::get('register','App\Http\Controllers\front\TrainerController@getRegisterTrainer')->name('register');
        Route::post('store','App\Http\Controllers\front\TrainerController@store')->name('store');
    });

    Route::group(['middleware' => 'auth:trainer'], function () {
        Route::get('/','App\Http\Controllers\front\TrainerController@trainerProfile')->name('dashboard');
        Route::get('logout','App\Http\Controllers\front\TrainerController@logout')->name('trainerLogout');
        Route::post('profile/{id}','App\Http\Controllers\front\TrainerController@profile')->name('profile');

    });

});
Route::prefix('user')->name('user.')->group(function () {
  //  Route::group(['middleware' => 'guest:user'], function () {
        Route::get('login','App\Http\Controllers\front\LoginController@getUserLogin')->name('login');
        Route::post('login','App\Http\Controllers\front\LoginController@postUserLogin')->name('dologin');
        Route::get('register','App\Http\Controllers\front\LoginController@getRegisterUser')->name('register');
        Route::post('store','App\Http\Controllers\front\LoginController@store')->name('store');
        Route::get('logout','App\Http\Controllers\front\LoginController@logout')->name('userLogout');
        Route::get('/','App\Http\Controllers\front\UserController@index')->name('userprofile');


   // });

});
