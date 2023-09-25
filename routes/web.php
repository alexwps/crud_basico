<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfessoresController;

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

Route::get('/alunos', [AlunosController::class, 'index']);
Route::get('alunos/novo', [AlunosController::class, 'create']);
Route::post('/alunos/novo', [AlunosController::class, 'store']);
Route::get('/alunos/editar/{id}', [AlunosController::class, 'edit']);
Route::post('/alunos/editar/', [AlunosController::class, 'update']);
Route::get('/alunos/delete/{id}', [AlunosController::class, 'destroy']);
Route::post('/alunos', 'AlunosController@store');

Route::get('/professor', [ProfessoresControllerontroller::class,'index']);
Route::get('/professor/novo', [ProfessoresController::class, 'create']);
Route::post('/professor/novo', [ProfessoresController::class, 'store']);
Route::get('/professor/editar/{id}', [ProfessoresController::class, 'edit']);
Route::post('/professor/editar/', [ProfessoresController::class, 'update']);
Route::get('/professor/delete/{id}', [ProfessoresController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
