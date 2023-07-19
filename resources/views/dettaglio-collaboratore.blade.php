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
            <div class="col-12 col-md-6">
                <img class="w-50" src="https://picsum.photos/200" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3>{{$collaborator['name']}}</h3>
                <h3>{{$collaborator['surname']}}</h3>
                <p>Età: {{$collaborator['age']}}</p>
            </div>
        </div>
    </div>
</x-layout>