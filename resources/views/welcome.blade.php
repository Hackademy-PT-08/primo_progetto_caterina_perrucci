<x-layout>
    <x-slot name="title">
        Hackademy
    </x-slot>
    <x-header>
        Benvenuti a tutti 
    </x-header>
    @if (session('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
    @endif
    <div class="container min-vh-100 my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <img class="img-fluid" src="/media/venezia.jpg" alt="">
            </div>
        </div>
    </div>
</x-layout>    