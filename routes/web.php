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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo/studenti', function(){
    $students = [
        ['id' => 1, 'name' => 'Claudio', 'surname' => 'Paradisi', 'age' => 29],
        ['id' => 2, 'name' => 'Giuseppe', 'surname' => 'Valente', 'age' => 38],
        ['id' => 3, 'name' => 'Federico', 'surname' => 'Vitiello', 'age' => 27],
        ['id' => 4, 'name' => 'Jody', 'surname' => 'Ossino', 'age' => 22],
    ];
    return view('studenti', ['students' => $students]);
})->name('studenti');

Route::get('/chi-siamo/studenti/dettaglio/{id}', function($id){
    $students = [
        ['id' => 1, 'name' => 'Claudio', 'surname' => 'Paradisi', 'age' => 29, 'subject' => 'CSS'],
        ['id' => 2, 'name' => 'Giuseppe', 'surname' => 'Valente', 'age' => 38, 'subject' => 'JavaScript'],
        ['id' => 3, 'name' => 'Federico', 'surname' => 'Vitiello', 'age' => 27, 'subject' => 'HTML'],
        ['id' => 4, 'name' => 'Jody', 'surname' => 'Ossino', 'age' => 22, 'subject' => 'Laravel'],
    ];

    foreach($students as $student){
        if($id == $student['id']){
            return view('dettaglio-studente', ['student' => $student]);
        }
    }
})->name('dettaglio.studente');

Route::get('chi-siamo/docenti', function(){
    $teachers = [
        ['id' => 1, 'name' => 'Katia', 'surname' => 'Perrucci', 'age' => 30],
        ['id' => 2, 'name' => 'Davide', 'surname' => 'Cariola', 'age' => 32],
        ['id' => 3, 'name' => 'Andrea', 'surname' => 'Mininni', 'age' => 28],
        ['id' => 4, 'name' => 'Marco', 'surname' => 'Chierchia', 'age' => 35],
    ];

    return view('docenti', ['docenti' => $teachers]);
})->name('docenti');

Route::get('chi-siamo/docenti/dettaglio/{docente}', function($id){
    $teachers = [
        ['id' => 1, 'name' => 'Katia', 'surname' => 'Perrucci', 'age' => 30],
        ['id' => 2, 'name' => 'Davide', 'surname' => 'Cariola', 'age' => 32],
        ['id' => 3, 'name' => 'Andrea', 'surname' => 'Mininni', 'age' => 28],
        ['id' => 4, 'name' => 'Marco', 'surname' => 'Chierchia', 'age' => 35],
    ];

    foreach($teachers as $teacher){
        if($id == $teacher['id']){
            return view('dettaglio-docente', ['insegnante' => $teacher]);
        }
    }
})->name('dettaglio.docente');









Route::get('/contacts', function(){
    return view('contatti');
})->name('contatti');