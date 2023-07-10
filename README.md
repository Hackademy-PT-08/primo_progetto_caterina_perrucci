1. creare la rotta in routes/web.php
    per visualizzare una pagina la rotta deve essere di tipo get
    all'interno delle parentesi inserire l'uri come stringa e una funzione anonima che restituisce una vista
2. creare una vista in resources/views con estensione .blade.php
    struttura html 
3. negli href inserire l'uri della rotta per creare i collegamenti

Per creare cartelle css e js, andare in public e inserire i collegamenti nelle viste

Per visualizzare su browser: php artisan serve 