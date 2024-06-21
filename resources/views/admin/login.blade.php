@extends('index')

@include('mensajes')

@section('contenido')
    <form action="{{ route('loginPost') }}" method="POST">
        @csrf
        <label for="usuario">Usuario:</label><br>
        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario"><br>
        @error('usuario')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password" placeholder="Contraseña"><br>
        @error('password')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="Iniciar sesion">
    </form>
@endsection
