@extends('index')

@section('contenido')
    <div style="border:1px solid black;border-radius:10px;padding:10px;">
        <h5>{{ $tarea->titulo }}</h5>
        <p>{{ $tarea->descripcion }}</p>
        <span style="background-color: cyan">{{ $tarea->estado }}</span>
        <p>Tarea creada por {{ Auth::user()->nombres }}</p>
    </div>
@endsection
