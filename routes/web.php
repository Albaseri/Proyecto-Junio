<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Socialite\GithubController;
use App\Http\Controllers\Socialite\GoogleController;
use App\Http\Controllers\TrainingCardController;
use App\Http\Controllers\UserController;
use App\Livewire\PrincipalBlog;
use App\Livewire\PrincipalCategory;
use App\Livewire\PrincipalEntrenamientoUser;
use App\Livewire\PrincipalPdf;
use App\Livewire\PrincipalPost;
use App\Livewire\PrincipalTrainingCard;
use App\Livewire\PrincipalUsers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    //?Rutas protegidas Controller
    Route::resource('categories', CategoryController::class);
    Route::resource('trainingCards', TrainingCardController::class);
    Route::resource('posts', PostController::class);
    Route::resource('pdfs', PdfController::class);
    Route::resource('users', UserController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//? Rutas de Livewire
// Ruta para gestión de categorías
Route::get('categoriesLiv', PrincipalCategory::class)->name('categoriesLiv.index');
// Ruta para gestión de training Cards
Route::get('trainingCardsLiv', PrincipalTrainingCard::class)->name('trainingCardsLiv.index');
// Ruta para gestión de posts del Blog
Route::get('postsLiv', PrincipalPost::class)->name('postsLiv.index');
// Ruta para la vista del Blog
Route::get('blogLiv', PrincipalBlog::class)->name('blogLiv.index');
Route::get('usersLiv', PrincipalUsers::class)->name('usersLiv.index');
//Ruta para la vista del usuario y su entrenamiento
Route::get('entrenamientoUser', PrincipalEntrenamientoUser::class)->name('entrenamientoUser.index');
//Ruta para la gestión de pdfs
Route::get('pdfsLiv', PrincipalPdf::class)->name('pdfsLiv.index');


//? Rutas de Redes Sociales
// Rutas GitHub
Route::get('/auth/github/redirect', [GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [GitHubController::class, 'callback'])->name('github.callback');

// Rutas Google
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/oauth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

//? Rutas Contacto
Route::get('contacto', [ContactoController::class, 'pintarFormulario'])->name('email.pintar');
Route::post('contacto', [ContactoController::class, 'procesarFormulario'])->name('email.procesar');
