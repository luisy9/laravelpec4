@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="m-5">
            <h1 class="text-center dark:text-white" style="font-size: 30px"> {{ $eventById['nombre'] }}</h1>
            <ul class="dark:text-white">

                <span>Fecha del evento: {{ $eventById['fecha'] }}</span>
                <p>Ubicacion: {{ $eventById['ubicacion'] }}</p>
                <p>{{ $eventById['description'] }}</p>
                <p>{{ $eventById['autor'] }}</p>
                <img src='../images/{{ $eventById['imagen'] }}' />
            </ul>
        </div>
    </div>
@endsection