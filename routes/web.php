<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController; 
use App\Http\Controllers\Apprenant\ApprenantController; 


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/apprenant', [AdminController::class , 'Apprenant']);
Route::get('/', [AdminController::class , 'Index']);
Route::match(['get', 'post'], '/connexion', [AdminController::class , 'Connexion']);

Route::group(['middleware'=>['admin']], function () {
    Route::get('/dashboard', [AdminController::class , 'Dasbord']);
    Route::get('deconnexion', [AdminController::class , 'deconnexion']);
    Route::get('admin/admin/{type?}', [AdminController::class,   'admins']);
    //apprenant
    // Route::get('inactive/delete-apprenant/{id}', [AdminController::class , 'deleteApprenants']);

    Route::get('/apprenants-actifs', [AdminController::class,   'apprenantsActifs']);
    Route::get('/apprenants-inactifs', [AdminController::class,   'apprenantsInactifs']);
    Route::match(['get', 'post'], 'admin/update', [AdminController::class , 'updateadmindetail']);
    Route::match(['get', 'post'], 'admin/adapprenant/{id?}', [AdminController::class , 'Adapprenant']);
    Route::post('admin/update-admin-status', [AdminController::class , 'updateAdminStatus']);
    Route::get('adminactive/delete-apprenantsActif/{id}', [AdminController::class , 'deleteApprenants']);
    Route::get('delete-plagehoraire/{id}', [AdminController::class , 'deleteProgrammes']);
    Route::get('admin/programme', [AdminController::class,   'Programme']);
    //demande

    Route::get('admin/demande', [AdminController::class,   'Demande']);
    Route::get('admin/demandeapprouver', [AdminController::class,   'demandeapprouver']);
    Route::post('admin/update-Demande-status', [AdminController::class , 'updateDemandeStatus']);

    

});

Route::namespace('App\Http\Controllers\Apprenant')->group(function(){
    Route::match(['get', 'post'], '/inscription', [ApprenantController::class, 'Inscription']);
    Route::post('admin/update-apprenant-status', [AdminController::class , 'updateAprprenantStatus']);
    Route::get('apprenant/demande', [ApprenantController::class,   'Demande']);
    Route::match(['get', 'post'], 'apprenant/ajouter', [ApprenantController::class , 'Addemande']);
    Route::get('apprenant/delete-demande/{id}', [ApprenantController::class , 'deletedemandes']);





});





