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

    return view('pages.index');
});

Route::get('/users', function () {
    $users = User::all();

    return view('pages.users', ['users' => $users]);
});

Route::get('/categories', [CategoryController::class, 'showCategory']);
