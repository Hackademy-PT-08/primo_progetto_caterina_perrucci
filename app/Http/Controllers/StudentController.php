<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $students = [
        ['id' => 1, 'name' => 'Claudio', 'surname' => 'Paradisi', 'age' => 29, 'subject' => 'CSS'],
        ['id' => 2, 'name' => 'Giuseppe', 'surname' => 'Valente', 'age' => 38, 'subject' => 'JavaScript'],
        ['id' => 3, 'name' => 'Federico', 'surname' => 'Vitiello', 'age' => 27, 'subject' => 'HTML'],
        ['id' => 4, 'name' => 'Jody', 'surname' => 'Ossino', 'age' => 22, 'subject' => 'Laravel'],
        ['id' => 5, 'name' => 'Lorenzo', 'surname' => 'Cennamo', 'age' => 24, 'subject' => 'Laravel'],
        ['id' => 6, 'name' => 'Simona', 'surname' => 'Rata', 'age' => 18, 'subject' => 'JavaScript'],
    ];

    public function index(){

        return view('studenti', ['students' => $this->students]);
    }

    public function show($id){
    
        foreach($this->students as $student){
            if($id == $student['id']){
                return view('dettaglio-studente', ['student' => $student]);
            }
        }
    }

    public function filterStudentBySubject($subject){
        //! creo una variabile a cui assegno un array vuoto
        $studentBySubject = [];
        //! ciclo tutti gli studenti
        foreach($this->students as $student){
            //! se la materia è uguale alla materia dello studente
            if($subject == $student['subject']){
                //! inserire ogni studente con quella materia nell'array vuoto
                $studentBySubject[] = $student;
            }
        }
        //! dopo ritorna la vista con gli studenti che hanno quella materia
        return view('materia', ['students' => $studentBySubject]);
    }
}
