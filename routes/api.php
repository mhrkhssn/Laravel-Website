<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\SubscriberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/submit/contact', [App\Http\Controllers\API\IndexController::class, 'contact']);
Route::post('/index', [App\Http\Controllers\API\IndexController::class, 'index']);
Route::post('/about', [App\Http\Controllers\API\AboutController::class, 'index']);
Route::post('/post', [App\Http\Controllers\API\IndexController::class, 'post']);
Route::post('/recent/post', [App\Http\Controllers\API\IndexController::class, 'recent']);
Route::post('/subcribe/email', [App\Http\Controllers\API\SubscriberController::class, 'store']);
Route::post('/categorys', [App\Http\Controllers\API\IndexController::class, 'categorys']);
Route::post('/sub_categorys', [App\Http\Controllers\API\IndexController::class, 'sub_categorys']);
Route::post('/post/all', [App\Http\Controllers\API\IndexController::class, 'post_all']);
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('/posts', PostController::class);


    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
