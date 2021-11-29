<?php


use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
//use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CatController;
use App\Http\Controllers\admin\TrainerController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\MessagesController;

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


Route::prefix('admin')->name('admin.')->group(function () {

    Route::group(['middleware'=>'guest:admin'],function () {
        Route::get('login','App\Http\Controllers\admin\AdminController@getLogin')->name('login');
        Route::post('login','App\Http\Controllers\admin\AdminController@postLogin')->name('dologin');
    });

    Route::get('logout','App\Http\Controllers\admin\AdminController@logout')->name('logout');

    Route::group(['middleware'=>'auth:admin'],function () {
        Route::get('/','App\Http\Controllers\admin\AdminController@index')->name('dashboard');
        Route::get('allstudents','App\Http\Controllers\admin\AdminController@allStudent')->name('allStudents');
        Route::get('allcategories','App\Http\Controllers\admin\CatController@allCategory')->name('allCategories');
        //trainers//
        Route::get('alltrainers','App\Http\Controllers\admin\TrainerController@allTrainers')->name('allTrainers');
        Route::get('addTrainer','App\Http\Controllers\admin\TrainerController@addTrainer')->name('addTrainer');
        Route::post('saveTrainer','App\Http\Controllers\admin\TrainerController@saveTrainer')->name('saveTrainer');
        Route::get('deleteTrainer/{id}','App\Http\Controllers\admin\TrainerController@delete')->name('delete');
        //user//
        Route::get('allUsers','App\Http\Controllers\admin\UserController@all')->name('allUsers');
        Route::get('addUser','App\Http\Controllers\admin\UserController@add')->name('addUser');
        Route::post('saveUser','App\Http\Controllers\admin\UserController@save')->name('saveUser');
        Route::get('deleteUser/{id}','App\Http\Controllers\admin\UserController@delete')->name('deleteUser');
        Route::get('editUser/{id}','App\Http\Controllers\admin\UserController@edit')->name('editUser');
        Route::post('update/{id}','App\Http\Controllers\admin\UserController@update')->name('updateUser');
        Route::get('roles','App\Http\Controllers\admin\UserController@roles')->name('allRoles');
        //course//
        Route::get('allcourses','App\Http\Controllers\admin\CourseController@allCourses')->name('allCourses');
        Route::get('addCourse','App\Http\Controllers\admin\CourseController@create')->name('addCourse');



    });

});
