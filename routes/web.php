<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;


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



Route::get('/', 'HomeController@index');
Route::get('/Welcome', 'HomeController@index');
Route::get('/home', 'ClienthomeController@index');
Auth::routes(['verify'=> true]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});

Auth::routes();
Route::get('/ajouterObjet', 'ObjetController@create');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/ajouterObjet', 'ObjetController@store')->name('objetAdd');;
Route::get('/myProduct', 'ObjetController@index')->name('mesObjets');
//Route::get('/home', 'ObjetController@index')->name('home');

////////annonces
Route::get('/home/voir_objet/{id}','annonceController@afficher_objet');
Route::get('/home/creeAnnonce/{id}','annonceController@ajouterAnnonce');
Route::get('/home/creeANNONCE','ObjetController@storeAnnonce' );
Route::get('/home/MesAnnonces/{id}','annonceController@AfficherAnnonce');
Route::get('/home/MesAnnoncesAch/{id}','annonceController@AfficherAnnonceArchive');
Route::get('/home/voir_annonce/{id}','annonceController@AfficherAnnonceInfoAnn');



//Route::view('/ajouter_annonce',[App\Http\Controllers\AjouterController::class, 'store_annonces']);
Route::get('/home/ArchiveAnn/{id}/{id2}','annonceController@ArchiveAnnonceMeth');
Route::get('/home/details_annonce/{id}','annonceController@DetailsAnnonce');
Route::get('/home/PartVoirAnnonce/{id}','annonceController@DetailsAnnoncePart');
Route::get('/home/ActiveAnnonceMeth/{id}/{id2}','annonceController@ActiveAnnonceMeth');
