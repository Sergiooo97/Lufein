<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\productosController::class, 'welcome'])->name('welcome');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => ['role:admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
        Route::get('clientes', [App\Http\Controllers\adminController::class, 'clientes'])->name('clientes');
    });
});

Route::get('perfil', [App\Http\Controllers\adminController::class, 'show'])->name('user.perfil');
Route::patch('perfil/update/', [App\Http\Controllers\userController::class, 'update'])->name('user.update');
Route::patch('perfil/update/img/', [App\Http\Controllers\userController::class, 'updateImg'])->name('user.update.img');
Route::post('cart/store', [App\Http\Controllers\userController::class, 'cartStore'])->name('user.cart');
Route::group(['prefix' => 'productos'], function () {
    Route::post('store', [App\Http\Controllers\productosController::class, 'store'])->name('productos.store');
    Route::get('index', [App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
    Route::get('edit/{id}', [App\Http\Controllers\productosController::class, 'edit'])->name('productos.edit');
    Route::patch('update/{id}', [App\Http\Controllers\productosController::class, 'update'])->name('productos.update');
    Route::delete('delete/{id}', [App\Http\Controllers\productosController::class, 'destroy'])->name('productos.delete');
    Route::get('catalogo/{cat}', [App\Http\Controllers\productosController::class, 'catalogo'])->name('productos.catalogo');
    Route::get('show/{id}', [App\Http\Controllers\productosController::class, 'show'])->name('productos.show');
    Route::get('cart/', [App\Http\Controllers\productosController::class, 'cart'])->name('productos.cart');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mi-cuenta', [App\Http\Controllers\userController::class, 'index'])->name('user.cuenta');
Route::post('/regist', [App\Http\Controllers\Auth\RegisterController::class, 'registerClient'])->name('register.cliente');
