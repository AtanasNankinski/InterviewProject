<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

//Route to main page
Route::get('/', [MainController::class, 'home']);
//Route to test post
Route::post('/user', [MainController::class, 'user']);
//Route for the post method for adding employee information
Route::post('information/addEmployee', [MainController::class, 'addEmployee']);
//Route for the post method for redacting employee information
Route::post('information/redactEmp', [MainController::class, 'redactEmp']);
//Route for the post method for deleting employee information
Route::post('information/deleteEmp', [MainController::class, 'deleteEmp']);

//Group of routes controlled by middleware to restrict routes if user is logged in
Route::group(['middleware' => 'isLoggedIn'], function(){
	//Route to the login page
	Route::get('/login', [MainController::class, 'login']);
});

//Group of routes controlled by middleware to restrict routes if user is not logged in
Route::group(['middleware' => 'isLoggedOut'], function(){
	//Route to information page
	Route::get('/information', [MainController::class, 'information']);
	//Route to logged out controller
	Route::get('/logout', [MainController::class, 'logout']);
	//Route to addinfo page
	Route::get('information/addinfo', [MainController::class, 'addinfo']);
});