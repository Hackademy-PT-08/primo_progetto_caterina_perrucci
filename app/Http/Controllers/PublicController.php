<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contatti(){
        return view('contatti');
    }

    public function contactSubmit(Request $request){ //! dependency injection e type hinting
        $name = $request->input('name');
        $email = $request->email;
        $user_message = $request->user_message;

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message)); //! object composition
        } catch(Exception $error){
            return redirect()->back()->with('emailError', 'Richiesta fallita. Ci scusiamo per il disagio. Riprova più tardi.');
        }
        return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la tua mail. Ti contatteremo il prima possibile');
    }
}
