<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('begin_test', [TestController::class, 'beginTest'])->name('begin_test');
Route::get('mcq_test', [TestController::class, 'index'])->name('mcq_test');
Route::post('save_test', [TestController::class, 'create'])->name('test.create'); 
Route::get('results/{result_id}', [TestController::class, 'show'])->name('results.show');
Route::get('results/{result_id}', [TestController::class, 'show'])->name('results.show');