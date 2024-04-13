<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Socialite\GithubController;
use App\Http\Controllers\Socialite\GoogleController;
use App\Http\Controllers\TrainingCardController;
use App\Livewire\PrincipalCategory;
use App\Livewire\PrincipalPost;
use App\Livewire\PrincipalTrainingCard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
});


// Rutas de Livewire
Route::get('categoriesLiv', PrincipalCategory::class)->name('categoriesLiv.index');
Route::get('trainingCardsLiv', PrincipalTrainingCard::class)->name('trainingCardsLiv.index');
Route::get('postsLiv', PrincipalPost::class)->name('postsLiv.index');

// Rutas GitHub
Route::get('/auth/github/redirect',[GithubController::class,'redirect'])->name('github.redirect');
Route::get('/auth/github/callback',[GitHubController::class,'callback'])->name('github.callback');
 
// Rutas Google
Route::get('/auth/google/redirect',[GoogleController::class,'redirect'])->name('google.redirect');
Route::get('/auth/google/callback',[GoogleController::class,'callback'])->name('google.callback');
 