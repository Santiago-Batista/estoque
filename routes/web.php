<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

Route::middleware(['auth'])->group(function () {
    Route::resource('produtos', ProdutoController::class);
});
Route::get('/estoque-baixo', [ProdutoController::class, 'baixo']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('dashboard', [
        'total' => Produto::count(),
        'baixo' => Produto::where('quantidade', '<', 5)->count()
    ]);
})->middleware('auth');