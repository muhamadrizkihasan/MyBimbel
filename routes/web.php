<?php

use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/edulevels', [EdulevelController::class, 'data']);
Route::get('/edulevels/add', [EdulevelController::class, 'add'])->name('add');
Route::post('/edulevels', [EdulevelController::class, 'addProcess'])->name('addProcess');
Route::get('/edulevels/edit/{id}', [EdulevelController::class, 'edit'])->name('edit');
Route::patch('/edulevels/{id}', [EdulevelController::class, 'editProcess'])->name('editProcess');
Route::delete('/edulevels/{id}', [EdulevelController::class, 'deleteEdulevel'])->name('deleteEdulevel');

Route::get('/programs/trash', [ProgramController::class, 'trash'])->name('trash');
Route::get('/programs/delete/{id?}', [ProgramController::class, 'delete'])->name('delete');
Route::get('/programs/restore/{id?}', [ProgramController::class, 'restore'])->name('restore');
Route::resource('/programs', ProgramController::class);