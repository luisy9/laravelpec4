@php
    $url = 'images/';
@endphp
@extends('layouts.app')

@section('content')

    <head>
        <style>
            button {
                border: 1px solid white;
                border-radius: 5px;
                padding: 10px;
            }

            button:hover {
                background: white;
                color: black
            }
        </style>
    </head>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="m-5">
            <h1 class="text-center dark:text-white" style="font-size: 30px">Eventos Culturales</h1>
            <ul class="dark:text-white">
                @foreach ($arrayEvents as $index => $evento)
                    <div class="">
                        <h2>Evento: </a>{{ $index + 1 }}</h2>
                        <li>{{ $evento->nombre }} <a href="/eventos/{{ $evento->id }}"><button> Ver
                                    pagina</button></a></li>
                        <li>{{ $evento->fecha }}</li>
                        @if (file_exists($url . $evento->imagen))
                            <li><img src="{{ asset('images/' . $evento->imagen) }}" alt={{ $evento->nombre }} /></li>
                        @else
                            <li><img src="{{ asset($evento->imagen) }}" alt={{ $evento->nombre }} /></li>
                        @endif
                    </div>
                @endforeach
            </ul>
        </div>
    @endsection
