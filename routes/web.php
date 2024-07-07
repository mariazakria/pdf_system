<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignatureController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/pdf/form', [PDFController::class, 'showForm'])->name('pdf.form');
Route::post('/pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');

//signature 
Route::get('/signature/create', [SignatureController::class, 'create'])->name('signature.create');
Route::post('/signature/store', [SignatureController::class, 'store'])->name('signature.store');
Route::get('/signatures', [SignatureController::class, 'index'])->name('signatures.index');

Route::get('/form', [PDFController::class, 'showForm'])->name('form');
Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');

