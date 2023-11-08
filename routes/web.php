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

Route::get('/categories', [CategoryController::class, 'showCategory']);

Route::get('/categories/{id}', function ($id) {
    $item = App\Models\Category::where('id', '=', $id)->firstOrFail();

    return view('pages.category', compact('item'));
});
