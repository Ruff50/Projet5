<?php


use App\Http\Controllers\CommentaireController;

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\CentreInteretController;
use App\Http\Controllers\Membrecontroller;
use App\Http\Controllers\Userscontroller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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
Route::get('/', function () {
    return view('index');})->name('home');
});



//cherche tous les commentaires 
Route::get('/commentaire',[CommentaireControllerer::class, 'getComm'])->name('Commentaire');

//cherche les commentaires par post id
Route::get('/commentaire/{id}',[CommentaireController::class, 'getCommByPost'])->name('CommentaireByPost');

//Ajoute le champs form pour ajouter un commentaire
Route::get('/commentaire/create',[CommentaireController::class, 'createComm'])->name('CommentaireCreate');
Route::post('/commentaire/create',[CommentaireController::class, 'storeComm'])->name('CommentaireStore');

//Modifier un commentaire
Route::get('/commentaire/{id}/edit',[CommentaireController::class, 'editComm'])->name('CommentaireEdit');
Route::post('/commentaire/{id}/edit',[CommentaireController::class, 'updateComm'])->name('CommentaireUpdate');

//Effacer un commentaire
Route::get('/commentaire/{id}/delete',[CommentaireController::class, 'deleteComm'])->name('CommentaireDelete');
Route::post('/commentaire/{id}/delete',[CommentaireController::class, 'destroyComm'])->name('CommentaireDestroy');
    
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



// Les centres d'intérets

Route::get('/centreinteret',[CentreInteretController::class, 'index'])->name('centreinteret');

Route::post('/centreinteret',[CentreInteretController::class, 'store'])->name('centreinteret.store');

Route::get('/centreinteret/{id}',[CentreInteretController::class, 'show'])->name('centreinteret.show');

Route::get('/centreinteret/{id}/edit',[CentreInteretController::class, 'edit'])->whereNumber('id')->name('centreinteret.edit');

Route::post('/centreinteret/{id}/edit',[CentreInteretController::class, 'update'])->name('centreinteret.update');




Route::resource('Users',Userscontroller::class);
