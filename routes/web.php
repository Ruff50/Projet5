<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PostController::class, 'accueil'])->name('welcome');
Route::get('/post', [PostController::class, 'getall'])->name('post');
Route::post('/post', [PostController::class, 'create'])->name('post');
Route::delete('/delete/{id}', [PostController::class, 'delete'])->whereNumber('id')->name('delete');
Route::post('/update/{id}', [PostController::class, 'update'])->name('update');
Route::get('/crud', [PostController::class, 'crud'])->name('crud');
Route::post('/crud', [PostController::class, 'creates'])->name('creates');
