<x-layout>
    <x-header>
        Materia
    </x-header>
    
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            @foreach($students as $student)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$student['name']}} {{$student['surname']}}</h5>
                            <p class="card-text">Età: {{$student['age']}}</p>
                            <a href="{{ route('dettaglio.studente', ['id' => $student['id']]) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
    
    
