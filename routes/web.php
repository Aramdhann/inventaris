<?php

use App\Livewire\Admin\Category\CategoryIndex;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('admin',  function() {
    return view('admin.dashboard');
})->middleware('auth');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('kategori', CategoryIndex::class);
});