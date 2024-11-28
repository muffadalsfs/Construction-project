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
Route::view('login','login');
Route::view('register','register');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::post('register',[RegisterController::class,'register']);
Route::get('logout',[LoginController::class,'logout']);
Route::middleware('auth')->group(function(){
Route::controller(Blogcontroller::class)->group(function(){
    
    Route::post('form','add');
    Route::get('show','show');
    Route::get('delete/{id}','delete');
    Route::get('edit/{id}','edit');
    Route::put('update/{id}', 'update')->name('blog.update');
  

});






Route::prefix('project')->controller(ProjectController::class)->group(function () {
    Route::post('add', 'store')->name('project.store'); // POST for adding a project
    Route::get('show', 'projectshow')->name('project.show'); // GET for showing projects
    Route::get('delete/{id}', 'destroy')->name('project.delete'); // DELETE a project
    Route::get('edit/{id}', 'edit')->name('project.edit'); // Edit project form
    Route::put('update/{id}', 'update')->name('project.update'); // Update project


 });


route::controller(Toolcontroller::class)->group(function(){
   Route::get('create',  'create')->name('tool.create'); // Create form
    route::post('Tool','Tooladd');
    Route::get('index', 'index')->name('tools.index');
    Route::get('edit{id}/edit',  'edit')->name('tools.edit');
   Route::put('update{id}',  'update')->name('tools.update');
   Route::delete('delete{id}',  'destroy')->name('tools.delete');
});




route::controller(Engineercontroller::class)->group(function(){
    Route::get('enginer',  'index')->name('enginners.index');
    Route::get('create',  'create')->name('enginners.create');
   Route::post('store',  'store')->name('enginners.store');
   Route::get('engineer/{id}/edit', 'edit')->name('engineers.edit');
    Route::put('engineer/{id}', 'update')->name('engineers.update');
    Route::delete('engineer/{id}', 'destroy')->name('engineers.destroy');
   route::get('element','element')->name('enginner.element');

});


route::controller(servicecontroller::class)->group(function(){
    route::get('service','service');
    route::post('servicestore','servicestore')->name('servicestore');
    route::get('showservice','showservice')->name('showservice');
    Route::delete('delete/{id}', 'delete')->name('deleteservice');
    Route::get('{id}/edit', 'edit')->name('editservice');
    Route::put('{id}', 'update')->name('updateservice');
   
}); 

});
route::get('detail{id}',[servicecontroller::class,'detail'])->name('detailservice');
route::view('enginner' ,'enginner');
route::view('service','service');
route::view('blog','blog');
Route::view('project', 'project');
route::view('Tool' ,'tool');
Route::get('detail/{id}', [Blogcontroller::class, 'de'])->name('blog.detail');

Route::get('detail/{id}', [ProjectController::class,'detail'])->name('project.detail'); // View project details

route::get('sp',[ProjectController::class,'sp'])->name('sp');
route::get('singlepage',[ProjectController::class,'singlepage'])->name('singlepage');
route::get('element',[ProjectController::class,'element'])->name('element');
route::get('card',[Engineercontroller::class,'element'])->name('card');
route::get('serviceshow',[servicecontroller::class,'all'])->name('serviceshow');
route::get('singleservice',[servicecontroller::class,'single'])->name('singleservice');
route::get('all',[Blogcontroller::class,'all'])->name('all');
route::get('homeblog',[Blogcontroller::class,'homeblog'])->name('homeblog');
route::get('singleblog',[Blogcontroller::class,'singlepage'])->name('singleblog');
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');