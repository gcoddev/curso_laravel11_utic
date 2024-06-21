<h2>Header</h2>
<a href="{{ route('home') }}">Inicio</a>
<a href="{{ route('acercade') }}">Acerca de</a>
<a href="{{ route('tareas') }}">Tareas</a>
@if (Auth::check())
    <form action="{{ route('logout') }}" method="POST" style="display: inline">
        @csrf
        <button type="submit">Cerrar sesion</button>
    </form>
@else
    <a href="{{ route('login') }}">Iniciar sesion</a>
@endif
