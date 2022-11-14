<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\DirectoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/front-page', function () {
    if (!auth()->user()) {
        return redirect(route('login'));
    }
    else { 
        return view('front-page', [
            //"directories" => Directory::where('user_id', '=', auth()->user()->id()->get()),
            "directories" => auth()->user()->directories,
        ]);
    }
})->name('front-page');


// Route::get('/create-link', [LinkController::class, 'new_form'])->name('new-link-form');
Route::post('/create-link', [LinkController::class, 'create'])->name('create-link');

// Route::get('/admin/new-link', [DirectoryController::class, 'new-form'])->name('create-directory');
Route::post('/admin/new-link', [DirectoryController::class, 'create'])->name('create-directory');


require __DIR__.'/auth.php';
