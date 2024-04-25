<?php

use App\Http\Controllers\AdminPdfController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Socialite\GithubController;
use App\Http\Controllers\Socialite\GoogleController;
use App\Http\Controllers\TrainingCardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPdfController;
use App\Livewire\PrincipalBlog;
use App\Livewire\PrincipalCategory;
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Rutas protegidas Controller

    Route::resource('categories', CategoryController::class);
    Route::resource('trainingCards', TrainingCardController::class);
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);


});


// Rutas de Livewire
Route::get('categoriesLiv', PrincipalCategory::class)->name('categoriesLiv.index');
Route::get('trainingCardsLiv', PrincipalTrainingCard::class)->name('trainingCardsLiv.index');
Route::get('postsLiv', PrincipalPost::class)->name('postsLiv.index');
Route::get('blogLiv', PrincipalBlog::class)->name('blogLiv.index');
Route::get('usersLiv', PrincipalUsers::class)->name('usersLiv.index');

// Rutas GitHub
Route::get('/auth/github/redirect',[GithubController::class,'redirect'])->name('github.redirect');
Route::get('/auth/github/callback',[GitHubController::class,'callback'])->name('github.callback');
 
// Rutas Google
Route::get('/auth/google/redirect',[GoogleController::class,'redirect'])->name('google.redirect');
Route::get('/auth/google/callback',[GoogleController::class,'callback'])->name('google.callback');
 
// Rutas Contacto
Route::get('contacto', [ContactoController::class, 'pintarFormulario'])->name('email.pintar');
Route::post('contacto', [ContactoController::class, 'procesarFormulario'])->name('email.procesar');
