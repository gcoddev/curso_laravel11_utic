@extends('index')

@section('contenido')
    <form action="{{ route('update', $tarea->id_tarea) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        <label for="titulo">Titulo: </label><br>
        <input type="text" name="titulo" id="titulo" value="{{ $tarea->titulo }}">
        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="3">{{ $tarea->descripcion }}</textarea>
        <br>
        <button type="submit">Editar</button>
    </form>
@endsection
