<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Blogcontroller ;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Engineercontroller;
use  App\Http\Controllers\Toolcontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Blogcontroller::class,
'home']);
//LOGIN AND REGISTER
    Route::view('login','login');
    Route::view('register','register');
    Route::post('login',[LoginController::class,'login'])->name('login');
    Route::post('register',[RegisterController::class,'register']);
    Route::get('logout',[LoginController::class,'logout']);
    //Middleware
    Route::middleware('auth')->group(function(){
    route::prefix('blog')->controller(Blogcontroller::class)->group(function(){
    
    Route::post('form','add')->name('blog.form');
    Route::get('show','show')->name('blog.show');
    Route::get('delete/{id}','delete')->name('blog.delete');
    Route::get('edit/{id}','edit')->name('blog.edit');
    Route::put('update/{id}', 'update')->name('blog.update');
   
   route::get('search','search')->name('blog.search');

});
    





Route::prefix('project')->controller(ProjectController::class)->group(function () {
    Route::post('add', 'store')->name('project.store'); // POST for adding a project
    Route::get('show', 'projectshow')->name('project.show'); // GET for showing projects
    Route::get('delete/{id}', 'destroy')->name('project.delete'); // DELETE a project
    Route::get('edit/{id}', 'edit')->name('project.edit'); // Edit project form
    Route::put('update/{id}', 'update')->name('project.update'); // Update project
    
 });


Route::controller(Toolcontroller::class)->group(function(){
   Route::get('create',  'create')->name('tool.create'); // Create form
    Route::post('Tool','Tooladd');
    Route::get('index', 'index')->name('tools.index');
    Route::get('edit{id}/edit',  'edit')->name('tools.edit');
   Route::put('update{id}',  'update')->name('tools.update');
   Route::delete('delete{id}',  'destroy')->name('tools.delete');
});




Route::controller(Engineercontroller::class)->group(function(){
    Route::get('enginer',  'index')->name('enginners.index');
    Route::get('create',  'create')->name('enginners.create');
   Route::post('store',  'store')->name('enginners.store');
   Route::get('engineer/{id}/edit', 'edit')->name('engineers.edit');
    Route::put('engineer/{id}', 'update')->name('engineers.update');
    Route::delete('engineer/{id}', 'destroy')->name('engineers.destroy');
   Route::get('element','element')->name('enginner.element');

});


Route::controller(servicecontroller::class)->group(function(){
    Route::get('service','service');
    Route::post('servicestore','servicestore')->name('servicestore');
    Route::get('showservice','showservice')->name('showservice');
    Route::delete('delete/{id}', 'delete')->name('deleteservice');
    Route::get('{id}/edit', 'edit')->name('editservice');
    Route::put('{id}', 'update')->name('updateservice');
   
}); 

});
//VIEWS OF ALL FILES
    Route::view('enginner' ,'enginner');
    Route::view('service','service');
    Route::view('blog','blog');
    Route::view('project', 'project');
    Route::view('Tool' ,'tool');
    //DEATIL ROUTE
    // Route::perfix('blog')->group(function(){
    //     Route::get('detail/{id}', [Blogcontroller::class, 'detail'])->name('blog.detail');
    // });
  route::prefix('project')->controller(ProjectController::class)->group(function(){
    Route::get('{id}', 'detail')->name('project.detail');

  });
  route::prefix('blog')->controller(Blogcontroller::class)->group(function(){
    route::get('{id}','detail')->name('blog.detail');
  });

    Route::get('detail{id}',[servicecontroller::class,'detail'])->name('detailservice');
    // Route::get('detail/{id}', [ProjectController::class,'detail'])->name('project.detail'); // View project details

    Route::get('sp',[ProjectController::class,'sp'])->name('sp');
    Route::get('singlepage',[ProjectController::class,'singlepage'])->name('singlepage');
    Route::get('element',[ProjectController::class,'element'])->name('element');
    Route::get('card',[Engineercontroller::class,'element'])->name('card');
    Route::get('serviceshow',[servicecontroller::class,'all'])->name('serviceshow');
    Route::get('singleservice',[servicecontroller::class,'single'])->name('singleservice');
    Route::get('elementservice',[servicecontroller::class,'elementservice'])->name('elementservice');
    Route::get('all',[Blogcontroller::class,'all'])->name('all');
    Route::get('homeblog',[Blogcontroller::class,'homeblog'])->name('homeblog');
    Route::get('singleblog',[Blogcontroller::class,'singlepage'])->name('singleblog');
//FOREGET AND RESET ROUTE
    Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');

    Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');


    //about controller
    route::get('about',[AboutController::class,'about']);