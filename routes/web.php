<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories','App\Http\Controllers\CategoryController');


Route::get('foods', [App\Http\Controllers\FoodController::class, 'index'])->name('food.index');
Route::get('foods/create', [App\Http\Controllers\FoodController::class, 'create'])->name('food.create');
Route::post('foods', [App\Http\Controllers\FoodController::class, 'store'])->name('food.store');
Route::get('foods/{food}', [App\Http\Controllers\FoodController::class, 'show'])->name('food.show');
Route::get('foods/{food}/edit', [App\Http\Controllers\FoodController::class, 'edit'])->name('food.edit');
Route::patch('foods/{food}', [App\Http\Controllers\FoodController::class, 'update'])->name('food.update');
Route::delete('foods/{food}', [App\Http\Controllers\FoodController::class, 'destroy'])->name('food.destroy');

Route::resource('offers','App\Http\Controllers\OfferController');
Route::resource('contacts','App\Http\Controllers\ContactController');
Route::resource('abouts','App\Http\Controllers\AboutController');
Route::resource('opinions','App\Http\Controllers\OpinionController');


Route::get('controls', [App\Http\Controllers\ControlPanelController::class, 'index'])->name('controls.index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','App\Http\Controllers\RoleController');
    Route::resource('users','App\Http\Controllers\UserController');
});