@extends('index')

@include('mensajes')

@section('contenido')
    {{-- {{ Auth::user() }} --}}
    @if (Auth::check())
        <h4>Tareas de {{ Auth::user()->nombres }}</h4>
        <a href="{{ route('create') }}">Nueva tarea</a>
        <ul>
            {{-- @dd($tareas) --}}
            @foreach ($tareas as $tarea)
                {{-- @if ($tarea->estado == '1')
                <li>{{ $tarea->titulo }}</li>
            @else
                <li style="color:red">{{ $tarea->titulo }}</li>
            @endif --}}

                <li style="color: {{ $tarea->estado == '1' ? 'blue' : 'red' }}">
                    {{-- Registro con id --}}
                    <a href="{{ route('show', $tarea->id_tarea) }}">{{ $tarea->titulo }}</a>

                    {{-- Editar --}}
                    <a href="{{ route('edit', $tarea->id_tarea) }}">Editar</a>

                    {{-- Eliminar --}}
                    <form action="{{ route('destroy', $tarea->id_tarea) }}" method="POST" class="form-eliminar">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <script>
            document.querySelectorAll('.form-eliminar').forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!confirm('Esta seguro de eliminar la tarea?')) {
                        event.preventDefault();
                    }
                })
            })
        </script>
    @else
        <h3>Se necesita permisos</h3>
    @endif
@endsection
