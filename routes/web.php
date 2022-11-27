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

// Views blog articles
Route::get('/blog/articles/categorize-links', function() { 
    return view('preview.articles.categorize-links'); 
})->name('cat-links');

Route::get('/blog/articles/information-to-knwoledge', function() { 
    return view('preview.articles.information-to-knwoledge'); 
})->name('info-to-know');

Route::get('/blog/articles/comparing-bookmark-maangers', function() { 
    return view('preview.articles.comparing-bookmark-managers'); 
})->name('comparing-bookmark-managers');


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
// Route::get('/new-link', [LinkController::class, 'new_form'])->name('new-link');
Route::get('/new-link', function () { return view('user-app.forms.new-link', [
        "directories" => auth()->user()->directories,
    ]);
})->name('new-link');

Route::post('/new-link', [LinkController::class, 'create'])->name('create-link');

// Edit link
// Route::get('/bookmark/{id}', [LinkController::class, 'edit'])->name('edit-link');
// Route::post('/bookmark/{id}', [LinkController::class, 'update'])->name('update-link');

// Create directory
Route::get('/new-directory', [DirectoryController::class, 'new_form'])->name('new-directory');
Route::post('/new-directory', [DirectoryController::class, 'create'])->name('create-directory');

/*
// Edit directory
Route::get('/directory/{id}', [DirectoryController::class, 'edit'])->name('edit-directory');
Route::post('/directory/{id}', [DirectoryController::class, 'update'])->name('update-directory');

// Create tag
Route::get('/new-tag', [TagController::class, 'new_form'])->name('new-tag');
Route::post('/new-tag', [TagController::class, 'create'])->name('create-tag');

// Edit tag
Route::get('/tag/{id}', [DirectoryController::class, 'edit'])->name('tag-directory');
Route::post('/tag/{id}', [DirectoryController::class, 'update'])->name('update-tag');
*/

require __DIR__ . '/auth.php';
