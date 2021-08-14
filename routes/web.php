<?php

use App\Http\Controllers\backend\SupervisorController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\ResourcesController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\ProjectsController;

use App\Http\Controllers\pages\NotificationController;
use App\Http\Controllers\pages\TasksController;
use App\Http\Controllers\pages\UsersController;

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

Route::get('/supervisor/home',[HomeController::class,'home'])->name('home');
Route::get('/supervisor/resourses',[ResourcesController::class,'resource'])->name('resource');
Route::get('/supervisor/projects',[ProjectsController::class,'projects'])->name('projects');
Route::get('/supervisor/tasks',[TasksController::class,'tasks'])->name('tasks');

Route::get('/supervisor/notification',[NotificationController::class,'notification'])->name('notification');
Route::get('/supervisor/users',[UsersController::class,'users'])->name('users');
