<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin',[AdminController::class,'login'])->name('dashboard');
    Route::get('/category/add',[CategoryController::class,'addform'])->name('addform');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
});
Route::get('/logout',[AdminController::class,'logout'])->name('logging.out');
Route::get('/shop',function(){
    return view('frontend.shop');
})->name('shop');

