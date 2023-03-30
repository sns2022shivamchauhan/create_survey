<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles/store',[RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/{roles}/edit', [RolesController::class, 'edit'])->name('roles.edit'); 
    Route::post('/roles/{roles}', [RolesController::class, 'update'])->name('roles.update'); 
    Route::get('/roles/{roles}/delete', [RolesController::class, 'destroy'])->name('roles.delete'); 
    Route::get('/person', [PersonController::class, 'index'])->name('person.index');
    Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
    Route::get('/person/store', [PersonController::class, 'store'])->name('person.store');
    Route::get('/person/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
    Route::get('/person/{person}/delete', [PersonController::class, 'delete'])->name('person.delete');
});

require __DIR__.'/auth.php';
