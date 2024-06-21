@extends('index')

@section('contenido')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        <label for="titulo">Titulo: </label><br>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="descripcion">Descripcion: </label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="3"></textarea>
        <br>
        <button type="submit">Crear</button>
    </form>
@endsection
