<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    public $collaborators = [
        ['id' => 1, 'name' => 'Mario', 'surname' => 'Rossi', 'age' => 30],
        ['id' => 2, 'name' => 'Luigi', 'surname' => 'Bianchi', 'age' => 41],
        ['id' => 3, 'name' => 'Anna', 'surname' => 'Verdi', 'age' => 29],  
    ];

    public function index(){
        return view('collaboratori', ['collaborators' => $this->collaborators]);
    }

    public function show($id){
        foreach($this->collaborators as $collaborator){
            if($collaborator['id'] == $id){
                return view('dettaglio-collaboratore', ['collaborator' => $collaborator]);
            }
        }
    }
}
