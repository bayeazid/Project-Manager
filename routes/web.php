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
use App\Http\Controllers\admin_pages\AdminResourcesController;

//User controllar directory
use App\Http\Controllers\user_pages\UserHomeController;
use App\Http\Controllers\user_pages\UserProjectsController;
use App\Http\Controllers\user_pages\UserNotificationController;
use App\Http\Controllers\user_pages\UserTasksController;
use App\Http\Controllers\user_pages\UserAssetsController;




Route::get('/', [login::class, 'login'])->name('log');
Route::get('/login/post', [login::class, 'loginPost'])->name('login');
Route::get('/logout', [login::class, 'logout'])->name('logout');


Route::group([ 'middleware' => ['auth']], function () {
    Route::group([ 'middleware' => ['role']], function () {
        // Route::get('/admin', [AdminController::class, 'admin']);
        Route::get('/user', [UserController::class, 'user']);



        //Admin page routs
        Route::get('/home', [AdminHomeController::class, 'admin_home'])->name('admin_home');

        //projects
        Route::get('/admin/projects', [AdminProjectsController::class, 'admin_projects'])->name('admin_projects');

        Route::post('/admin/projects', [AdminProjectsController::class, 'add_projects'])->name('add_project');
        Route::get('/admin/projects/{id}', [AdminProjectsController::class, 'projects_details'])->name('projects_details');
        Route::get('/admin/delete_projects/{id}', [AdminProjectsController::class, 'delete_project'])->name('delete_project');
        Route::get('/admin/edit_projects/{id}',[AdminProjectsController::class,'edit_project'])->name('edit_project');
        Route::put('/admin/update_project/{id}',[AdminProjectsController::class,'update_project'])->name('update_project');

        Route::get('/admin/new_projects', [AdminProjectsController::class, 'new_projects'])->name('new_projects');


        Route::post('/add_category', [AdminProjectsController::class, 'addcategory'])->name('addcategory');
        Route::get('/delete_category/{id}', [AdminProjectsController::class, 'delete_category'])->name('delete_category');

        //tasks
        Route::get('/admin/tasks', [AdminTasksController::class, 'admin_tasks'])->name('admin_tasks');

        Route::post('/admin/add_type', [AdminTasksController::class, 'add_type'])->name('add_type');
        Route::get('/admin/delete_type/{id}', [AdminTasksController::class, 'delete_type'])->name('delete_type');

        Route::post('/admin/add_tasks', [AdminTasksController::class, 'add_tasks'])->name('add_tasks');
        Route::get('/admin/delete_tasks/{id}', [AdminTasksController::class, 'delete_task'])->name('delete_tasks');
        Route::get('/admin/edit_task/{id}',[AdminTasksController::class,'edit_task'])->name('edit_tasks');
        Route::put('/admin/update_task/{id}',[AdminTasksController::class,'update_task'])->name('update_tasks');


        Route::get('/admin/new_tasks', [AdminTasksController::class, 'new_tasks'])->name('new_tasks');

        Route::post('/admin/add_tasks_name', [AdminTasksController::class, 'add_tasks_name'])->name('admin_tasks_name');
        Route::get('/admin/delete_tasks_name/{id}', [AdminTasksController::class, 'delete_tasks_name'])->name('delete_tasks_name');


        Route::get('/admin/notification', [AdminNotificationController::class, 'admin_notification'])->name('admin_notification');


        //users
        Route::post('/admin/add_designation', [AdminUsersController::class, 'add_designation'])->name('add_designation');
        Route::get('/admin/delete_designation/{id}', [AdminUsersController::class, 'delete_designation'])->name('delete_designation');

        Route::get('/admin/users', [AdminUsersController::class, 'admin_users'])->name('admin_users');

        Route::post('/admin/add_users', [AdminUsersController::class, 'add_users'])->name('add_user');
        Route::get('/admin/delete_user/{id}', [AdminUsersController::class, 'delete_users'])->name('delete_user');
        Route::get('/admin/edit_user/{id}',[AdminUsersController::class,'edit_user'])->name ('edit_user');
        Route::put('/admin/update_user/{id}',[AdminUsersController::class,'update_user'])->name ('update_user');


        Route::get('/admin/new_users', [AdminUsersController::class, 'new_users'])->name('new_users');

        Route::get('/admin/assets', [AdminAssetsController::class, 'admin_assets'])->name('admin_assets');
        Route::get('/admin/resources', [AdminResourcesController::class, 'admin_resources'])->name('admin_resources');
        Route::get('/admin/resources/{id}', [AdminResourcesController::class, 'admin_resources_id'])->name('admin_resources_id');
    });


    Route::group([ 'middleware' => ['user']], function () {
        //User page routs
//        Route::get('/user/home', [UserHomeController::class, 'user_home'])->name('user_home');
        Route::get('/user/projects', [UserProjectsController::class, 'user_projects'])->name('user_projects');
        Route::get('/user/tasks', [UserTasksController::class, 'user_tasks'])->name('user_tasks');
        Route::get('/user/accepted/tasks/{id}', [UserTasksController::class, 'tasks_accepted'])->name('user_tasks_accepted');
        Route::get('/user/accepted/tasks', [UserTasksController::class, 'accepted_tasks'])->name('user_accepted_task');
        Route::get('/user/completed/tasks/{id}', [UserTasksController::class, 'completed_tasks'])->name('user_completed_task');
        Route::get('/user/completed/task', [UserTasksController::class, 'completed_task'])->name('user_completed_tasks');
        Route::get('/user/notification', [UserNotificationController::class, 'user_notification'])->name('user_notification');
        Route::get('/user/assets', [UserAssetsController::class, 'user_assets'])->name('user_assets');
    });

});
