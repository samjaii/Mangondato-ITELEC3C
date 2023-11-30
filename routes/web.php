<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;

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
    $users = User::all();
    return view('pages.users', ['users' => $users]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('pages.users', ['users' => $users]);
    })->name('dashboard');
});

Route::get('/categories', [CategoryController::class, 'show']);

Route::get('/categories/{id}', function ($id) {
    $item = App\Models\Category::where('id', '=', $id)->firstOrFail();
    return view('pages.category', compact('item'));
});

Route::get('/categories/edit/{id}', function ($id) {
    $item = App\Models\Category::where('id', '=', $id)->firstOrFail();
    return view('form.edit', compact('item'));
});

Route::get('/create', [CategoryController::class, 'create']);

/* Edits record */
Route::put('/edit-category/{id}', [CategoryController::class,  'edit']);

/* Creates new record */
Route::post('/submit', [CategoryController::class, 'submit']);

/* Delete record */
Route::delete('/delete-category/{id}', [CategoryController::class, 'destroy']);
