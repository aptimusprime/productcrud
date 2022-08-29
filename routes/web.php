<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

 Route::resource('/product', ProductController::class);

// Route::get('product', [ProductController::class, 'index']);
// Route::get('add-product', [ProductController::class, 'create']);
// Route::post('add-product', [ProductController::class, 'store']);
// Route::get('edit-product/{id}', [ProductController::class, 'edit']);
// Route::put('update-product/{id}', [ProductController::class, 'update']);
// Route::delete('delete-product/{id}', [ProductController::class, 'destroy']);

