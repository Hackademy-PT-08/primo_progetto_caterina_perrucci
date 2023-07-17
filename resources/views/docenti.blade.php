<x-layout>


    <div class="container-fluid p-5 bg-info">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">I docenti</h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            @foreach($docenti as $docente)
                <div class="col-12 col-md-3">
                    <x-card
                    id="{{$docente['id']}}"
                    name="{{$docente['name']}}"
                    surname="{{$docente['surname']}}"
                    age="{{$docente['age']}}"
                    route="dettaglio.docente"
                    />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
    

