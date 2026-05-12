@extends('layouts.appGOB')

@section('content')
    <div class="container">
        <ol class="breadcrumb top-buffer">
            <li><a href="http://www.gob.mx"><i class="icon icon-home"></i></a></li>
            <li><a href="http://www.gob.mx/inifap">Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias</a></li>
            <li><a href="http://zacatecas.inifap.gob.mx/">Inifap C.E. Zacatecas</a></li>
            <li><a href="{{ route('inicio') }}">Inicio sistema riego</a></li>
            <li class="active">Registro</li>
        </ol>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Registro</h2></div>
                    <div class="card-body">
                        <!-- Eliminado mensaje de registro duplicado -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                                <div class="col-md-6">
                                    <x-text-input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="invalid-feedback d-block mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico</label>
                                <div class="col-md-6">
                                    <x-text-input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="invalid-feedback d-block mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                                <div class="col-md-6">
                                    <x-text-input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="invalid-feedback d-block mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirmar contraseña</label>
                                <div class="col-md-6">
                                    <x-text-input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback d-block mt-2" />
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        ¿Ya tienes cuenta? Inicia sesión
                                    </a>
                                    <button type="submit" class="btn btn-primary ms-2">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
