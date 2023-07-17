<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CollaboratorController;

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

//! MVC -> Model View Controller
//! php artisan make:controller NomeController -> per creare un controller
//! ROTTE PUBLIC
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contacts', [PublicController::class, 'contatti'])->name('contatti');

//! ROTTE STUDENT
Route::get('/chi-siamo/studenti', [StudentController::class, 'index'])->name('studenti');
Route::get('/chi-siamo/studenti/dettaglio/{id}', [StudentController::class, 'show'])->name('dettaglio.studente');
Route::get('/chi-siamo/studenti/materia/{subject}', [StudentController::class, 'filterStudentBySubject'])->name('materia.studente');

//! ROTTE TEACHER
Route::get('chi-siamo/docenti', [TeacherController::class, 'index'])->name('docenti');
Route::get('chi-siamo/docenti/dettaglio/{id}', [TeacherController::class, 'show'])->name('dettaglio.docente');

//! ROTTE COLLABORATOR
Route::get('/chi-siamo/collaboratori', [CollaboratorController::class, 'index'])->name('collaboratori');
Route::get('/chi-siamo/colaboratori/dettaglio/{id}', [CollaboratorController::class, 'show'])->name('dettaglio.collaboratore');