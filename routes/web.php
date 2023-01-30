<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\ProjectCategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\ProjectGalleryController;
use App\Http\Controllers\Backend\HeroSectionController;

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
    Route::get('/product', [ProductsController::class, 'index'])->name('product');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

/*--------------Backend Route---------------------*/

Route::group(['prefix'=>'backend','as'=>'backend.', 'middleware'=>['auth', 'verified']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('subCategories', SubCategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('project-categories', ProjectCategoryController::class);
    Route::resource('project-galleries', ProjectGalleryController::class);
    Route::resource('hero-sections', HeroSectionController::class);
    Route::get('/settings/{tab?}', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
});

require __DIR__.'/auth.php';
