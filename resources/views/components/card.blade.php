<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-user"></i> {{$name}} {{$surname}}</h5>
        <p class="card-text">Età: {{$age}}</p>
        {{--@if (Route::currentRouteName() == 'studenti')
        <a href="{{ route('dettaglio.studente', ['id' => $id]) }}" class="btn btn-primary">Dettaglio studente</a>
        @else
        <a href="{{ route('dettaglio.docente', ['docente' => $id]) }}" class="btn btn-primary">Dettaglio docente</a>
        @endif--}}
        <a href="{{ route($route, ['id' => $id]) }}" class="btn btn-primary">Dettaglio studente</a>
    </div>
</div>