@extends('layouts.authGOB')

@section('content')

<form method="POST" action="{{ route('register') }}">

    @csrf

    <div class="mb-3">

        <label class="form-label">
            Nombre
        </label>

        <input
            type="text"
            name="name"
            class="form-control"
            required
        >

    </div>

    <div class="mb-3">

        <label class="form-label">
            Correo electrónico
        </label>

        <input
            type="email"
            name="email"
            class="form-control"
            required
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

    <div class="mb-3">

        <label class="form-label">
            Confirmar contraseña
        </label>

        <input
            type="password"
            name="password_confirmation"
            class="form-control"
            required
        >

    </div>

    <button type="submit" class="btn btn-success w-100">

        Registrarse

    </button>

</form>

<div class="text-center mt-3">

    <a href="{{ route('login') }}">

        Ya tengo cuenta

    </a>

</div>

@endsection