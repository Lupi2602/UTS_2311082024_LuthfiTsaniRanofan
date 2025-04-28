<?php
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
Route::get('products-deleted', [ProductController::class, 'deleted'])->name('products.deleted');
Route::post('products-restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
