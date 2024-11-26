<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;
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
// Blog Routes
Route::prefix('blogs')->controller(Blogcontroller::class)->group(function () {
    Route::get('blog',  'index')->name('blogs.index'); // List all blogs
    Route::get('create',  'create')->name('blogs.create'); // Show create form
    Route::post('store',  'store')->name('blogs.store'); // Store new blog
    Route::get('blog/detail/{id}', 'detail')->name('blog/detail/'); // View project details
    Route::get('{id}/edit',  'edit')->name('blogs.edit'); // Show edit form
    Route::put('{id}',  'update')->name('blogs.update'); // Update blog
    Route::delete('{id}',  'destroy')->name('blogs.destroy'); // Delete 
    Route::get('show', 'blogshow')->name('.show'); // GET for showing projects

});



// // Project Routes
//  Route::prefix('project')->controller(ProjectController::class)->group(function () {
// //     Route::post('add', 'store')->name('project.store'); // POST for adding a project
// //     Route::get('show', 'projectshow')->name('project.show'); // GET for showing projects
// //     Route::get('delete/{id}', 'destroy')->name('project.delete'); // DELETE a project
// //     Route::get('edit/{id}', 'edit')->name('project.edit'); // Edit project form
// //     Route::put('update/{id}', 'update')->name('project.update'); // Update project
// //     Route::get('detail/{id}', 'detail')->name('project.detail'); // View project details
// //     route::get('projecthome','savepage')->name('project.projecthome');
//     route::get('sp','sp')->name('sp');
//      route::get('singlepage','singlepage')->name('singlepage');
//      route::get('element','element')->name('element');
//  });




Route::view('blog', 'blog');
// Route::view('project', 'Project');


// route::view('Tool' ,'tool');
// route::controller(Toolcontroller::class)->group(function(){
//     Route::get('create',  'create')->name('tools.create'); // Create form

//     route::post('Tool','Tooladd');
//     Route::get('home', 'index')->name('tools.index');
    
   
//     Route::get('{id}',  'show')->name('tools.show');
    
  

//     Route::get('edit{id}/edit',  'edit')->name('tools.edit');
//     Route::put('update{id}',  'update')->name('tools.update');
//     Route::delete('delete{id}',  'destroy')->name('tools.delete');



// });


// route::view('engineer' ,'enginer');
// route::controller(Engineercontroller::class)->group(function(){
//     Route::get('enginer',  'index')->name('enginners.index');
//     Route::get('create',  'create')->name('enginners.create');
//     Route::post('store',  'store')->name('enginners.store');
    
//     Route::get('{id}/edit',  'edit')->name('enginners.edit');
//     Route::put('{id}',  'update')->name('enginners.update');
//     Route::delete('{id}',  'destroy')->name('enginners.destroy');
//     route::get('enginner','element')->name('enginner.element');

// });
// route::view('service','services');
// route::controller(servicecontroller::class)->group(function(){
//    route::get('showservices','servicesshow');
//    route::post('service','serviceadd');
//    Route::get('detail/{id}',  'detail')->name('blog.detail');
//    route::get('pageshow','servicepage');
//    Route::get('delete/{id}','delete');
//    Route::get('edit/{id}','edit');
//    Route::put('update/{id}', 'update')->name('blog.update');
// route::get('homeservice','savepage');
// route::get('singleservice','singlepage');

// });


route::view('raf','raf');