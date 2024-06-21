{{-- @if (session('mensaje')) --}}

@session('mensaje')
    <div style="background-color: green; color: white;">
        {{ session('mensaje') }}
    </div>
@endsession

@session('error')
    <div style="background-color: red; color: white;">
        {{ session('error') }}
    </div>
@endsession
