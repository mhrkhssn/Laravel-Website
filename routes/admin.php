<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SidebarController;
use App\Http\Controllers\Admin\ExcelController;
use App\Http\Controllers\Admin\CustomerController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:web']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/products', ProductController::class);
    Route::resource('/permissions', permissionController::class);
    Route::resource('/categorys', CategoryController::class);
    Route::resource('/blogs', BlogController::class);
    Route::post('/categorys/getdata', [CategoryController::class, 'getdata'])->name('categorys.getdata');
    Route::post('/blogs/getdata', [BlogController::class, 'getdata'])->name('blogs.getdata');
    Route::resource('/sub_categorys', SubcategoryController::class);
    Route::post('/sub_categorys/getdata', [SubcategoryController::class, 'getdata'])->name('sub_categorys.getdata');
    Route::post('/sub_categorys/category', [SubcategoryController::class, 'subcategory'])->name('sub_categorys.subcategory');
    Route::post('/posts/blog', [PostController::class, 'post'])->name('posts.post');
    Route::post('/permissions/getdata', [permissionController::class, 'getdata'])->name('permissions.getdata');
    Route::resource('/roles', RolesController::class);
    Route::post('/roles/getdata', [RolesController::class, 'getdata'])->name('roles.getdata');
    Route::resource('/posts', PostController::class);
    Route::post('/posts/getdata', [PostController::class, 'getdata'])->name('posts.getdata');
    Route::resource('/books', BookController::class);
    Route::post('/books/getdata', [BookController::class, 'getdata'])->name('books.getdata');
//    Route::resource('/galleries', GalleryController::class);
//    Route::post('/galleries/getdata', [GalleryController::class, 'getdata'])->name('galleries.getdata');
    Route::resource('/news', NewsController::class);
    Route::post('/news/getdata', [NewsController::class, 'getdata'])->name('news.getdata');
    Route::resource('/users', UserController::class);
    Route::post('/users/getdata', [UserController::class, 'getdata'])->name('users.getdata');
    Route::get('/user/status/active/{id}', [UserController::class, 'user_active'])->name('user.status.active');
    Route::get('/user/status/deactive/{id}', [UserController::class, 'user_deactive'])->name('user.status.deactive');
//    Route::resource('/pages', PageController::class);
//    Route::post('/pages/getdata', [PageController::class, 'getdata'])->name('pages.getdata');
//    Route::resource('/settings', SettingController::class);
//    Route::post('/settings/getdata', [SettingController::class, 'getdata'])->name('settings.getdata');


    Route::post('/sub_categorys/category1', [ProductController::class, 'subcategory'])->name('sub_categorys.subcategory.product');
    Route::resource('/sidebar', SidebarController::class);
    Route::post('/sidebar/getdata', [SidebarController::class, 'getdata'])->name('sidebar.getdata');
    Route::post('/sidebar/child', [SidebarController::class, 'sidebar'])->name('sidebar.child');


//    Route::get('/file', [CustomerController::class, 'view'])->name('file');
//    Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');
//    Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
//    Route::post('exportExcel', [ExcelController::class, 'exportExcel'])->name('exportExcel');
//    Route::post('export', [CustomerController::class, 'export'])->name('export');
//    Route::post('import', [CustomerController::class, 'import'])->name('import');


});

