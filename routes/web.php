<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});



// admin
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'adminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/update', [AdminProfileController::class, 'adminProfileUpdate'])->name('admin.profile.update');
Route::get('/admin/change/password', [AdminProfileController::class, 'adminChangePassword'])->name('admin.change.password');
Route::post('/admin/password/update', [AdminProfileController::class, 'adminPasswordUpdate'])->name('admin.password.update');

Route::prefix('brand')->group(function(){

    Route::get('/view',[BrandController::class, 'viewBrand'])->name('all.brand');
    Route::post('/store',[BrandController::class, 'brandStore'])->name('brand.store');
    Route::get('/edit/{id}',[BrandController::class, 'brandEdit'])->name('brand.edit');
    Route::post('/update',[BrandController::class, 'brandUpdate'])->name('brand.update');
    Route::get('/delete/{id}',[BrandController::class, 'brandDelete'])->name('brand.delete');

});

Route::prefix('category')->group(function(){

    Route::get('/view',[CategoryController::class, 'viewCategory'])->name('all.category');
    Route::post('/store',[CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/edit/{id}',[CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/update/{id}',[CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/delete/{id}',[CategoryController::class, 'categoryDelete'])->name('category.delete');

    Route::get('/sub/view',[SubCategoryController::class, 'viewSubCategory'])->name('all.subcategory');
    Route::post('/sub/store',[SubCategoryController::class, 'subCategoryStore'])->name('subcategory.store');
    Route::get('/sub/edit/{id}',[SubCategoryController::class, 'subCategoryEdit'])->name('subcategory.edit');
    Route::post('/sub/update/{id}',[SubCategoryController::class, 'subCategoryUpdate'])->name('subcategory.update');
    Route::get('/sub/delete/{id}',[SubCategoryController::class, 'subCategoryDelete'])->name('subcategory.delete');

    Route::get('/sub/sub/view',[SubCategoryController::class, 'subSubCategory'])->name('all.subsubcategory');
    Route::get('/subcategory/ajax/{category_id}',[SubCategoryController::class, 'getSubCategoryAjax']);
    Route::get('/subsubcategory/ajax/{subcategory_id}',[SubCategoryController::class, 'getSubSubCategoryAjax']);
    Route::post('/sub/sub/store',[SubCategoryController::class, 'subSubCategoryStore'])->name('subsubcategory.store');
    Route::get('/sub/sub/edit/{id}',[SubCategoryController::class, 'subSubCategoryEdit'])->name('subsubcategory.edit');
    Route::post('/sub/sub/update/{id}',[SubCategoryController::class, 'subSubCategoryUpdate'])->name('subsubcategory.update');
    Route::get('/sub/sub/delete/{id}',[SubCategoryController::class, 'subSubCategoryDelete'])->name('subsubcategory.delete');

});

Route::prefix('products')->group(function(){
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
});


//route for FE
Route::get('/', [IndexController::class, 'index']);


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard', compact('user'));
})->name('dashboard');


Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
Route::get('/user/profile/edit', [IndexController::class, 'userProfileEdit'])->name('user.profile.edit');
Route::post('/user/profile/update', [IndexController::class, 'userProfileUpdate'])->name('user.profile.update');
Route::get('/user/change/password', [IndexController::class, 'changePassword'])->name('user.change.password');
Route::post('/user/update/password', [IndexController::class, 'updatePassword'])->name('user.password.update');
