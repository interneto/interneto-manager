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

Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/app', function() {
    return view('interneto-app');
})->name('interneto-app');

Route::get('/links', function() {
    return view('interneto-links');
})->name('interneto-links');

Route::get('/blog', function() {
    return view('blog');
})->name('blog');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/front-page', function () {
    if (!auth()->user()) {
        return redirect(route('login'));
    } else {
        return view('front-page', [
            'directories' => auth()->user()->directories,
        ]);
    }
})->name('front-page');


Route::get('/new-link', function () {
    return view('new-link', [
        "directories" => auth()->user()->directories,
    ]);
})->name('new-link');

Route::post('/new-link', [LinkController::class, 'create'])->name('new-link-form');

Route::get('/new-directory', [DirectoryController::class, 'create'])->name('new-directory-form');

Route::post('/new-directory', [DirectoryController::class, 'store'])->name('new-directory');



require __DIR__ . '/auth.php';
