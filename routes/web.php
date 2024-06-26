<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Socialite\GithubController;
use App\Http\Controllers\Socialite\GoogleController;
use App\Http\Controllers\TrainingCardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\GestionDeAcceso;
use App\Livewire\PrincipalBlog;
use App\Livewire\PrincipalCategory;
use App\Livewire\PrincipalEntrenamientoUser;
use App\Livewire\PrincipalPdf;
use App\Livewire\PrincipalPost;
use App\Livewire\PrincipalTrainingCard;
use App\Livewire\PrincipalUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//& Ruta principal

Route::get('/', function () {
    // Verifica si el usuario está autenticado como ADMIN
    if (auth()->check() && auth()->user()->roles === 'ADMIN') {
        // Si es ADMIN, redirige a 'dashboard'
        return redirect()->route('dashboard');
    } else {
        // Si no es ADMIN, muestra 'welcome'
        return view('welcome');
    }
})->name('welcome');

//& Grupo de rutas que requieren autenticación

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dentro de este grupo, todas las rutas requieren autenticación

    Route::get('/dashboard', function () {
        // Verifico si el usuario está autenticado como ADMIN
        if (auth()->user()->roles === 'ADMIN') {
            // Si es ADMIN, muestra'dashboard'
            return view('dashboard');
        } else {
            // Si no es ADMIN, redirige a'welcome'
            return redirect()->route('welcome');
        }
    })->name('dashboard');
});



//& RUTAS PARA ADMINISTRADOR
Route::middleware([GestionDeAcceso::class])->group(function () {

    //?Rutas protegidas Controller
    Route::resource('categories', CategoryController::class);
    Route::resource('trainingCards', TrainingCardController::class);
    Route::resource('posts', PostController::class);
    Route::resource('pdfs', PdfController::class);
    Route::resource('users', UserController::class);

    //? Rutas de Livewire
    // Ruta para gestión de categorías
    Route::get('categoriesLiv', PrincipalCategory::class)->name('categoriesLiv.index');
    // Ruta para gestión de training Cards
    Route::get('trainingCardsLiv', PrincipalTrainingCard::class)->name('trainingCardsLiv.index');
    // Ruta para gestión de posts del Blog
    Route::get('postsLiv', PrincipalPost::class)->name('postsLiv.index');

    Route::get('usersLiv', PrincipalUsers::class)->name('usersLiv.index');
    //Ruta para la gestión de pdfs
    Route::get('pdfsLiv', PrincipalPdf::class)->name('pdfsLiv.index');
});

//& Rutas públicas


Route::get('/formulario', function () {
    return view('contactoForm.formulario');
})->name('formulario');


//& USUARIOS RUTAS

//Ruta para la vista del usuario y su entrenamiento
Route::get('entrenamientoUser', PrincipalEntrenamientoUser::class)->name('entrenamientoUser.index');
//Muestra el detalle del post al pulsar "Leer más" en principal-blog
Route::get('posts/show/{post}', [PostController::class, 'show'])->name('detallePost');

// Ruta para la vista del Blog
Route::get('blogLiv', PrincipalBlog::class)->name('blogLiv.index');

//? Rutas de Redes Sociales
// Rutas GitHub
Route::get('/auth/github/redirect', [GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [GitHubController::class, 'callback'])->name('github.callback');

// Rutas Google
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/oauth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

//? Rutas Contacto
Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto.mostrar');
Route::post('/enviar-correo', [ContactoController::class, 'enviarCorreo'])->name('correo.enviar');


//& Rutas Pago Stripe
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('checkout.session');
Route::get('/success', [PaymentController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [PaymentController::class, 'cancel'])->name('checkout.cancel');
