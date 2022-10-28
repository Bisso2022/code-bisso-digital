<?php

use App\Http\Controllers;
use App\Http\Controllers\ParamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('accueil');
Route::get('/apropos', [PostController::class, 'apropos'])->name('about');
Route::get('services',[PostController::class,'services'])->name('services');
Route::get('/demande-devis', [PostController::class, 'blogs'])->name('blogs');
Route::get('/contacts', [PostController::class, 'contacts'])->name('contacts');
Route::get('/politique-de-condifentialite',[PostController::class,'politique'])->name('politique');
//formulauire de contacrt
Route::post('/enregistrement-contact',[PostController::class,'save_contact'])->name('save_contact');
Route::post('/enregistrement-devis',[PostController::class,'save_devis'])->name('save_devis');
Route::get('/mail',[PostController::class,'email']);




Route::group(["middleware" => ["admin"]], function(){
    Route::get('/dashoard',[ParamController::class,'dashboard'])->name('dashboard');
    Route::get('/liste-message',[ParamController::class,'message'])->name('message');
    Route::get('/liste-devis',[ParamController::class,'devis'])->name('devis');
    Route::get('/liste-commande',[ParamController::class,'commande'])->name('commande');
    Route::get('/liste-user',[ParamController::class,'membres'])->name('membres');
    Route::get('details-message/{id}',[ParamController::class,'voir_message'])->name('voir_message');
    Route::get('/contenu-message/{id}',[ParamController::class,'dossier_message'])->name('dossier_message')->where('id', '[0-9]+');
    Route::get('/supprimer-devis/{id}',[ParamController::class,'suppimer_devis'])->name('suppimer_devis')->where('id', '[0-9]+');
    Route::get('/contenu-devis/{id}',[ParamController::class,'dossier_devis'])->name('dossier_devis');
    Route::get('/devis-pdf/{id}',[ParamController::class,'devis_pdf'])->name('devis_pdf')->where('id', '[0-9]+');;
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
