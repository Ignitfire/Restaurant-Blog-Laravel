<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home.index');

use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\CommentController;

Route::get('/restaurants', [RestaurantsController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/{url}',[RestaurantsController::class, 'show'])->name('restaurants.show');
Route::post('/restaurants/{url}', [CommentController::class, 'store']);


use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

use App\Http\Controllers\ImageController;
    Route::get('/restaurants/{url}/image-upload', [ImageController::class, 'index'])->name('image.index');
    Route::post('/restaurants/{url}/image-upload', [ImageController::class, 'store'])->name('image.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/admin/dashboard', function () {return view('adminDashboard');})->name('adminDashboard');
});



use App\Http\Controllers\AdminRestaurantsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminCommentController;
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {return view('adminDashboard');})->name('adminDashboard');

    Route::get('/admin/restaurants', [AdminRestaurantsController::class, 'index'])->name('adminRestaurants.index');
    Route::get('/admin/restaurants/new',[AdminRestaurantsController::class, 'create'])->name('adminRestaurants.create');
    Route::post('/admin/restaurants/new',[AdminRestaurantsController::class, 'store']);
    Route::get('/admin/restaurants/{restaurant}/edit',[AdminRestaurantsController::class, 'edit'])->name('adminRestaurants.edit');
    Route::post('/admin/restaurants/{restaurant}/edit',[AdminRestaurantsController::class, 'update'])->name('adminRestaurants.update');
    Route::get('/admin/restaurants/{restaurant}/destroy',[AdminRestaurantsController::class, 'destroy'])->name('adminRestaurants.destroy');

    Route::get('/admin/users', [ AdminUsersController::class, 'index'])->name('adminUsers.index');
    Route::get('/admin/users/destroy', [ AdminUsersController::class, 'destroy'])->name('adminUsers.destroy');
    Route::get('/admin/user/edit',[AdminUsersController::class, 'edit'])->name('adminUsers.edit');
    Route::post('/admin/users', [ AdminUsersController::class, 'destroy'])->name('adminUsers.destroy');


    Route::get('/admin/comments', [ AdminCommentController::class, 'index'])->name('adminComments.index');
    Route::get('/admin/comments/destroy', [ AdminCommentController::class, 'destroy'])->name('adminComments.destroy');

});
