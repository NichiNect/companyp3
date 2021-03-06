<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('frontend');


Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('articles')->group(function() {
        Route::get('', [ArticleController::class, 'index'])->name('admin.article.index');
        Route::get('/create-new-article', [ArticleController::class, 'create'])->name('admin.article.create');
        Route::post('/create-new-article', [ArticleController::class, 'store'])->name('admin.article.store');
        Route::get('/describe-article/{id}', [ArticleController::class, 'show'])->name('admin.article.show');
        Route::get('/edit-article/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
        Route::put('/edit-article/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
        Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy'])->name('admin.article.destroy');
    });
});
