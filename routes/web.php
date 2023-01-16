<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ServiceDetailsController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ProjectDetailsController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogDetailsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\RoleController;
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

/*--------------Frontend Route---------------------*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'frontend','as'=>'frontend.'], function(){
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::get('/service/details', [ServiceDetailsController::class, 'index'])->name('service-details');
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project/details', [ProjectDetailsController::class, 'index'])->name('project-details');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/details', [BlogDetailsController::class, 'index'])->name('blog-details');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

/*--------------Backend Route---------------------*/

Route::group(['prefix'=>'backend','as'=>'backend.', 'middleware'=>['auth', 'verified']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('employees', EmployeeController::class);
    Route::resource('roles', RoleController::class);
    
});

require __DIR__.'/auth.php';
