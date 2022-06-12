<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Membrecontroller;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Userscontroller;
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
Route::middleware(['auth'])->group(function () {
    Route::resource('Users',Userscontroller::class);
Route::get('/', function () {
    return view('index');})->name('home');
});
/*Route::middleware(['auth'])->group(function () {*/
Route::get('profile/{id}', [Membrecontroller::class, 'edit'])
->whereNumber('id')->name('profile');

Route::post('profile/{id}', [Membrecontroller::class, 'update'])
->name('update.action');
/*});*/
Route::get('register', [Authcontroller::class, 'register'])->name('register');

Route::post('register', [Authcontroller::class, 'register_action'])->name('register.action');

Route::get('login', [Authcontroller::class, 'login'])->name('login');

Route::post('login', [Authcontroller::class, 'login_action'])->name('login.action');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');

Route::get('/roles_user/{id}/edit',[RolesController::class, 'edit'])->whereNumber('id')->name('roles_user.edit');

Route::post('/roles_user/{id}/edit',[RolesController::class, 'update'])->name('roles_user.update');

