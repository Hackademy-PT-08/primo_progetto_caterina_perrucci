<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers = [
        ['id' => 1, 'name' => 'Katia', 'surname' => 'Perrucci', 'age' => 30],
        ['id' => 2, 'name' => 'Davide', 'surname' => 'Cariola', 'age' => 32],
        ['id' => 3, 'name' => 'Andrea', 'surname' => 'Mininni', 'age' => 28],
        ['id' => 4, 'name' => 'Marco', 'surname' => 'Chierchia', 'age' => 35],
    ];

    public function index(){
    
        return view('docenti', ['docenti' => $this->teachers]);
    }

    public function show($id){
    
        foreach($this->teachers as $teacher){
            if($id == $teacher['id']){
                return view('dettaglio-docente', ['insegnante' => $teacher]);
            }
        }
    }
}
