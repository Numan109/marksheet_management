<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//=============================Student========================
Route::get('/add_student',[StudentController::class,'index']);
Route::post('/save-student-info',[StudentController::class,'create']);
Route::get('/view_student_info',[StudentController::class,'show']);


//======================= Cetegory=============
Route::get('add-category',[CategoryController::class,'index']);
Route::post('saveCategory',[CategoryController::class,'create']);