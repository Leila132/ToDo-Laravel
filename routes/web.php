<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/projects', [App\Http\Controllers\Project\IndexController::class, 'index'])->name('project.index');
    Route::post('/projects', [App\Http\Controllers\Project\StoreController::class, 'store'])->name('project.store');
    Route::get('/projects/create', [App\Http\Controllers\Project\CreateController::class, 'create'])->name('project.create');
    Route::get('/projects/{project}/all', [App\Http\Controllers\Project\ShowController::class, 'show'])->name('project.show');
    Route::get('/projects/{project}/edit', [App\Http\Controllers\Project\EditController::class, 'edit'])->name('project.edit');
    Route::patch('/projects/{project}', [App\Http\Controllers\Project\UpdateController::class, 'update'])->name('project.update');
    Route::delete('/projects/{project}', [App\Http\Controllers\Project\DeleteController::class, 'destroy'])->name('project.delete');
});
