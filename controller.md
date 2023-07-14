1. creo il controller
    php artisan make:controller TeacherController
    (Lettera iniziale maiuscola, in inglese, al singolare, seguita dalla parola Controller in camel-case)
2. creo la funzione nel controller
    public function nomeFunzione(){
        ....
    }
3. faccio la rotta
    passo un array con il nome del Controller e il nome del metodo che richiama quella rotta 
    [TeacherController::class, 'index']
    importare la use del controller (estensione PHP Namespace Resolver)

FILTRO PER MATERIA
1. Creo una rotta parametrica 
2. creo la funzione nel Controller
    - accetta un parametro
    - ho creato una variabile con un array vuoto
    - ciclato tutti gli studenti
    - ho controllato che la materia fosse uguale a quella dello studente
    - e ogni con studente con una determinata materia, l'ho inserito nell'array vuoto
    - ritorna una vista con tutti gli studenti con la stessa materia
3. ho creato la vista e per ogni studente mi visualizza una card (quindi facendo un foreach)
4. ho fatto sì che la materia diventi un link nella pagina di dettaglio e che quindi mi riporti alla vista della materia