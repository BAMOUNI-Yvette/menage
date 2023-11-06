<?php

use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [WelcomeController::class, 'home']);
Route::get('/profils', [WelcomeController::class, 'profils']);
Route::get('/services', [WelcomeController::class, 'services']);
Route::get('/inscription', [WelcomeController::class, 'inscription']);
Route::get('/compte', [WelcomeController::class, 'compte']);
Route::get('/commentaire', [WelcomeController::class, 'commentaire']);
// Route::get('/contact', [WelcomeController::class, 'contact']);
Route::get('/afficherProfils', [WelcomeController::class, 'afficherProfils']);
Route::get('/retour', [WelcomeController::class, 'retour']);
Route::get('/suivant', [WelcomeController::class, 'suivant']);
Route::post('/connexion/client', [WelcomeController::class, 'connexionclient']);
Route::post('/fomulaire', [WelcomeController::class, 'formulaire']);
Route::post('/client', [WelcomeController::class, 'client']);
Route::post('/femme', [WelcomeController::class, 'femme']);
Route::post('/traitement_commentaire', [WelcomeController::class, 'traitement_commentaire']);
// Route::post('/commentaire',[WelcomeController::class, 'commentaire']);
Route::get('/fichier', [WelcomeController::class, 'fichier']);
