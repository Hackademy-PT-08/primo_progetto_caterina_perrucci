# SCALETTA 
1. laravel new nomeprogetto

2. npm i bootstrap 
    php artisan serve 
    npm run dev

3. creare cartella components in resources / views
    creare il file layout.blade.php e inserire struttura HTML
    inserire {{ $slot }} nel body

4. in resources / css / app.css 
    @import 'bootstrap'; ed eventuali altri import ai fogli di stile
    in resources / js / app.js  
    import 'bootstrap'; ed eventuali altri import ai fogli di script

5. nell'head del layout inserire: 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

6. in welcome.blade.php e poi in tutte le viste che creerete inserire il tag:
    <x-layout>
    (qui andrà il codice della pagina)
    </layout>

7. creare anche i componenti per la navbar e il footer ad esempio e inseriteli in layout

8. poi procedere come sempre: 
    rotte
    controller
    viste