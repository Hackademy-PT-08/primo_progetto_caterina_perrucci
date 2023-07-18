<x-layout>
<div class="container-fluid p-5 bg-info">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">I Collaboratoriii</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($collaborators as $collaborator)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$collaborator['name']}} {{$collaborator['surname']}}</h5>
                            <p class="card-text">Età: {{$collaborator['age']}}</p>
                            <a href="{{route('dettaglio.collaboratore', ['id' => $collaborator['id']])}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
    