<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FileController;

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


Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');

Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/create/student', [StudentController::class, 'create'])->name('student.create');
Route::post('/create/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/edit/student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/edit/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('student.destroy');


Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/registration', [UserController::class, 'create'])->name('user.create');
Route::post('/registration', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');


Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/create', [ArticleController::class, 'store'])->name('article.store');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/articles/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::get('/files', [FileController::class, 'index'])->name('file.index');
Route::post('/files', [FileController::class, 'store'])->name('files.store');
