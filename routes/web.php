<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
/*

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categorie/{slug}', function ($slug) {
    return view('categories', compact('slug'));
})->name('categorie');

Route::get('/produit/{id}', function ($id) {
    return view('produit', ['id' => $id]);
})->name('produit');

Route::get('cgv', function () {
    return view('cgv');
})->name('cgv');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
*/
Route::get('/', [ShopController::class, 'home'])->name('home');
Route::get('/cgv', [ShopController::class, 'cgv'])->name('cgv');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');

Route::get('/categories/{slug}', [ProductController::class, 'categories'])->name('categorie');
Route::get('/produit/{id}', [ProductController::class, 'produit'])->name('produit');