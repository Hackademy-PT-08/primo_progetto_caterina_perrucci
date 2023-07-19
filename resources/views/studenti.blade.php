<x-layout>
    <x-slot name="title">
        Studenti
    </x-slot>
    <x-header>
        Gli studenti 
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach($students as $student)
                <div class="col-12 col-md-3 my-3">
                    <x-card
                    id="{{$student['id']}}"
                    name="{{$student['name']}}"
                    surname="{{$student['surname']}}"
                    age="{{$student['age']}}"
                    route="dettaglio.studente"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
    

