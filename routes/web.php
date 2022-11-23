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

// Preview of webpage
Route::get('/', function() { return view('preview.home'); })->name('home');
Route::get('/app', function() { return view('preview.interneto-app'); })->name('interneto-app');
Route::get('/links', function() { return view('preview.interneto-links'); })->name('interneto-links');
Route::get('/blog', function() { return view('preview.blog'); })->name('blog');
Route::get('/about', function() { return view('preview.about'); })->name('about');

// Authenticate to interneto manager app
Route::get('/dashboard', function () { return redirect(route('all-bookmarks')); })->middleware(['auth', 'verified'])->name('dashboard');

// Login (with register) or enter
Route::get('/all-bookmarks', function () {
    if (!auth()->user()) {
        return redirect(route('login'));
    } else {
        return view('user-app.all-bookmarks', [
            'directories' => auth()->user()->directories,
        ]);
    }
})->name('all-bookmarks');

// Log out
Route::get('/sidebar', function () { return redirect(route('logout')); })->name('sidebar');

// Create link
Route::get('/new-link', function () {
    return view('user-app.forms.new-link', [
        "directories" => auth()->user()->directories,
    ]);
})->name('new-link');
Route::post('/new-link', [LinkController::class, 'create'])->name('new-link-form');

// Create directory
Route::get('/new-directory', [DirectoryController::class, 'create'])->name('new-directory');
Route::post('/new-directory', [DirectoryController::class, 'store'])->name('new-directory-form');


require __DIR__ . '/auth.php';
