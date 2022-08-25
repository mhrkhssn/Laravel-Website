<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\PostController;
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
Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('tag_search/{slug}', [MainController::class, 'tag_search'])->name('tag_search');
Route::get('blog_search/{slug}', [MainController::class, 'blog_search'])->name('blog_search');
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('service/{slug}', [ServiceController::class, 'service'])->name('service');
Route::get('project/{slug}', [ProjectController::class, 'project'])->name('project');
Route::get('/{slug}', [PostController::class, 'blog'])->name('slug');


Route::get('/clearcache', [PostController::class, 'clearCache'])->name('clearcache');
//Route::get('/clear-cache', function () {
//    $exitCode = Artisan::call('config:clear');
//    $exitCode = Artisan::call('cache:clear');
//    $exitCode = Artisan::call('config:cache');
//
//    return 'DONE'; //Return anything
//});

Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/header', [MainController::class, 'header'])->name('header');

Route::resource('/contact_form', ContactController::class);

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
