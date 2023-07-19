## Come inviare una mail
1. Creare una rotta get con una funzione che ci ritorna una vista
2. Creare la vista con un form di contattato
    2.1 method -> metodo della rotta (POST)
    2.2 action -> nome della rota a cui inviare i dati
    2.3 ogni input deve avere un attributo name (chiave dell'array)
    2.4 @csrf -> altrimenti error 419
    2.5 button type="submit" 
3. Creare una rotta di tipo POST con la funzione nel controller
    3.1 accetta un parametro dell'oggetto di classe Request 
    3.2 manipolare i dati recuperandoli dalla request
        ESEMPIO: $name = $request->name;
4. Creare un classe Mailable (php artisan make:mail ContactMail)
    4.1 Envelope -> oggetto e mittente 
    4.2 Content -> la vista che manda all'HTML della mail
    4.3 Creare la vista della mail (contact-mail.blade.php)
5. Inviare la mail nel controller:
    ESEMPIO Mail::to($email)->send(new ContactMail());
6. Collegare il progetto a MailTrap 
7. Reindirizzare l'utente verso l'homepage con un messaggio di sessione
    Esempio: return redirect(route('homepage'))->with('emailSent', 'Messaggio');
8. Inserire il messaggio nella vista homepage 

## Mail dinamica
9. Inserire in ContactMail gli attributi pubblici
10. Gestire gli attributi nella funzione _construct()
11. Passare gli attributi reali che vogliamo passare al'interno del controller

## Se il servizio mail è down
12. Mettere il try and catch al'interno della funzione
    12.1 nel try mettere la riga per l'invio mail
    12.2 nel catch ritornare una vista con un messaggio di sessione