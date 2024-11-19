<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('items/store', [ItemController::class, 'store'])->name('items.store');
Route::get('items/edit/{item}', [ItemController::class, 'edit'])->name('items.edit');
Route::put('items/update/{item}', [ItemController::class, 'update'])->name('items.update');
Route::get('items/show/{item}', [ItemController::class, 'show'])->name('items.show');
Route::delete('items/destroy/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
