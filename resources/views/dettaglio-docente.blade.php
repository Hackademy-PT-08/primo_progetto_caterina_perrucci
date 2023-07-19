<x-layout>
    <div class="container-fluid p-5 bg-info">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Pagina di dettaglio</h1>
            </div>
        </div>
    </div>
    <div class="container min-vh-100 my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$insegnante['name']}} {{$insegnante['surname']}}</h5>
                        <p class="card-text">Età: {{$insegnante['age']}}</p>
                        <a href="{{ route('docenti') }}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>