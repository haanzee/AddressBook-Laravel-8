<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AddressBookController;

Route::get('/', [AddressBookController::class, 'index'])->name('index');
Route::get('/addForm', [AddressBookController::class, 'addForm'])->name('addForm');
Route::post('/addForm', [AddressBookController::class, 'create'])->name('create');

Route::get('/edit', [AddressBookController::class, 'edit'])->name('edit');
Route::get('/editForm/{id}', [AddressBookController::class, 'editform'])->name('editform');
Route::put('/editForm/{id}', [AddressBookController::class, 'update'])->name('update');

Route::get('/delete', [AddressBookController::class, 'delete'])->name('delete');
Route::get('/delete/{id}', [AddressBookController::class, 'destroy'])->name('destroy');

Route::get('/display', [AddressBookController::class, 'display'])->name('dislay');
Route::get('/contact', [AddressBookController::class, 'contactus'])->name('contact');

Route::get('/welcome', function() {
        return view('welcome');
});
