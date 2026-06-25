<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/cursos', function () { return view('cursos'); })->name('cursos');
Route::get('/eventos', function () { return view('eventos'); })->name('eventos');
Route::get('/formulario', function () { return view('formulario'); })->middleware(['auth', 'verified'])->name('formulario');
Route::post('/notas', [NotaController::class, 'store'])->middleware(['auth'])->name('notas.store');
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return "<div style='text-align:center; margin-top:50px;'><h1>Erro 404</h1><p>Página não encontrada na ETEC ZL.</p><a href='/'>Voltar para Home</a></div>";
});

require __DIR__.'/auth.php';