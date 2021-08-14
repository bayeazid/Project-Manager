<?php

use App\Http\Controllers\backend\SupervisorController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProjectController;

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

Route::get('/supervisor',[SupervisorController::class,'supervisor']);
Route::get('/user',[UserController::class,'user']);
Route::get('/',[login::class,'login']); 
Route::get('/supervisor/projects',[projets_controller::class,'projects']);

Route::get('/supervisor/task',[projets_controller::class,'task']);
Route::get('/supervisor/users',[projets_controller::class,'users']);
Route::get('/supervisor/notification',[projets_controller::class,'notification']);



Route::get('/supervisor/resourses',[ProjectController::class,'resource'])->name('super.resource');