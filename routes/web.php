<?php

use Illuminate\Support\Facades\Route;
use App\Models\Directory;
use App\Http\Controllers\WebController;

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

Route::get('/', function () {
    if (!auth()->user()) {
        return redirect(route('login'));
    }
    return view('front-page', [
        // "directories" => Directory::where('user_id', '=', auth()->user()->id)->get(),
        "directories" => auth()->user()->directories,

    ]);
})->name('front-page');

Route::post('/admin/new-link', [WebController::class, 'create'])->name('create-link');

require __DIR__.'/auth.php';
