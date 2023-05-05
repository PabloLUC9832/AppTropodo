<?php

use App\Http\Controllers\ArtropodoController;
use App\Http\Controllers\ProfileController;
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
    #return view('artropodo.create');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ArtropodoController::class)->group(function (){

    Route::name('artropodo.')->group(function (){

        Route::get('/artropodo',  'index')->name('index');

        Route::get('/artropodo/create',  'create')->name('create');
        Route::post('/artropodo',  'store')->name('store');

        Route::get('/artropodo/edit/{id}','edit')->name('edit');
        Route::post('/artropodo/update/{id}','update')->name('update');

        Route::delete('/artropodo/destroy/{id}',  'destroy')->name('destroy');


    });

});

require __DIR__.'/auth.php';

