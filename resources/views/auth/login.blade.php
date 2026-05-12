@extends('layouts.authGOB')

@section('content')

<form method="POST" action="{{ route('login') }}">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Correo electrónico
        </label>

        <input
            type="email"
            name="email"
            class="form-control"
            required
            autofocus
        >

    </div>

    <div class="mb-3">

        <label class="form-label">
            Contraseña
        </label>

        <input
            type="password"
            name="password"
            class="form-control"
            required
        >

    </div>

    <div class="mb-3 form-check">

        <input
            type="checkbox"
            class="form-check-input"
            name="remember"
        >

        <label class="form-check-label">
            Recordarme
        </label>

    </div>

    <button type="submit" class="btn btn-primary w-100">

        Iniciar sesión

    </button>

</form>

<div class="text-center mt-3">

    <a href="{{ route('register') }}">

        Crear cuenta

    </a>

</div>

@endsection