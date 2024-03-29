<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\TagController;
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
//Route::get('/', function() { return view('preview.home'); })->name('home');
//Route::get('/app', function() { return view('preview.interneto-app'); })->name('interneto-app');
//Route::get('/links', function() { return view('preview.interneto-links'); })->name('interneto-links');
//Route::get('/blog', function() { return view('preview.blog'); })->name('blog');
//Route::get('/about', function() { return view('preview.about'); })->name('about');

// Authenticate to interneto manager app
Route::get('/', function () { return redirect(route('bookmarks')); });
    //->middleware(['auth', 'verified'])->name('dashboard');

// If user is not logged redirect to login if not show all bookmarks 
Route::get('/bookmarks', function () {
    if (!auth()->user()) {
        return redirect(route('login'));
    } else {
        return view('user-app.bookmarks', [
            'directories' => auth()->user()->directories,
        ]);
    }
})->name('bookmarks');

// Log out
Route::get('/sidebar', function () { return redirect(route('logout')); })->name('sidebar');

// Directories views
Route::get('/directory/{id}', [DirectoryController::class, 'edit'])->name('edit-directory');

// Tags views
Route::get('/tags', function () { 
    return view( 'user-app.tags', ['tags' => auth()->user()->tags] );
})->name('tags');

// Graph view
Route::get('/graph-view', function () { return view('user-app.graph-view'); })->name('graph-view');

// --- //

// Create link
Route::get('/new-link', [LinkController::class, 'new_form'])->name('new-link');
Route::post('/new-link', [LinkController::class, 'create'])->name('create-link');

// Create directory
Route::get('/new-directory', [DirectoryController::class, 'new_form'])->name('new-directory');
Route::post('/new-directory', [DirectoryController::class, 'create'])->name('create-directory');

// Create tag
Route::get('/new-tag', [TagController::class, 'new_form'])->name('new-tag');
Route::post('/new-tag', [TagController::class, 'create'])->name('create-tag');


// Edit link
Route::get('/bookmark/{id}', [LinkController::class, 'edit'])->name('show-link');
Route::post('/bookmark/{id}', [LinkController::class, 'update'])->name('update-link');

// Edit directory
// Route::get('/directory/{id}', [DirectoryController::class, 'edit'])->name('show-directory');
Route::post('/directory/{id}', [DirectoryController::class, 'update'])->name('update-directory');

// Edit tag
// Route::get('/tag/{id}', [TagController::class, 'edit'])->name('show-tag');
// Route::post('/tag/{id}', [TagController::class, 'update'])->name('update-tag');


// Delete link
Route::get('/bookmark/delete/{id}', [LinkController::class, 'delete'])->name('delete-link');

// Delete directory
Route::get('/directory/delete/{id}', [DirectoryController::class, 'delete'])->name('delete-directory');

// Delete tag
Route::get('/tag/delete/{id}', [TagController::class, 'delete'])->name('delete-tag');


require __DIR__ . '/auth.php';
