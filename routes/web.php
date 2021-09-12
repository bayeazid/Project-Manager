<?php

use Illuminate\Support\Facades\Route;

//Backend controllar directory
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;

//Frontend controllar directory
use App\Http\Controllers\frontend\login;

//Admin controllar directory
use App\Http\Controllers\admin_pages\AdminHomeController;
use App\Http\Controllers\admin_pages\AdminProjectsController;
use App\Http\Controllers\admin_pages\AdminNotificationController;
use App\Http\Controllers\admin_pages\AdminTasksController;
use App\Http\Controllers\admin_pages\AdminUsersController;
use App\Http\Controllers\admin_pages\AdminAssetsController;

//User controllar directory
use App\Http\Controllers\user_pages\UserHomeController;
use App\Http\Controllers\user_pages\UserProjectsController;
use App\Http\Controllers\user_pages\UserNotificationController;
use App\Http\Controllers\user_pages\UserTasksController;
use App\Http\Controllers\user_pages\UserAssetsController;

//Backend routs
Route::get('/admin',[AdminController::class,'admin']);
Route::get('/user',[UserController::class,'user']);

//Frontend routs
Route::get('/',[login::class,'login']); 

//Admin page routs
Route::get('/admin/home',[AdminHomeController::class,'admin_home'])->name('admin_home');
Route::post('/admin/projects',[AdminProjectsController::class,'add_projects'])->name('add_project');
Route::get('/admin/projects',[AdminProjectsController::class,'admin_projects'])->name('admin_projects');

Route::post('/add_category',[AdminProjectsController::class,'addcategory'])->name('addcategory');
Route::post('/delete_category',[AdminProjectsController::class,'deletecategory'])->name('deletecategory');


Route::post('/admin/add_tasks',[AdminTasksController::class,'add_tasks'])->name('add_tasks');
Route::get('/admin/tasks',[AdminTasksController::class,'admin_tasks'])->name('admin_tasks');
Route::get('/admin/notification',[AdminNotificationController::class,'admin_notification'])->name('admin_notification');
Route::get('/admin/users',[AdminUsersController::class,'admin_users'])->name('admin_users');
Route::get('/admin/assets',[AdminAssetsController::class,'admin_assets'])->name('admin_assets');
Route::post('/admin/add_users',[AdminUsersController::class,'add_users'])->name ('add_user');


//User page routs
Route::get('/user/home',[UserHomeController::class,'user_home'])->name('user_home');
Route::get('/user/projects',[UserProjectsController::class,'user_projects'])->name('user_projects');
Route::get('/user/tasks',[UserTasksController::class,'user_tasks'])->name('user_tasks');
Route::get('/user/notification',[UserNotificationController::class,'user_notification'])->name('user_notification');
Route::get('/user/assets',[UserAssetsController::class,'user_assets'])->name('user_assets');

