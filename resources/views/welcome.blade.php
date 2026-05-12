@extends("layouts.appGOB")
@section("title", "Inicio")
@section("view-name", "Inicio")

@section("content")

<div class="container">
    <ol class="breadcrumb top-buffer">
        <li>Sistema de riego</li>
        <li class="active">Inicio</li>
    </ol>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sistema de riego</h1>
            <hr class="red">
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <h3>Bienvenido al sistema de riego del INIFAP C.E. Zacatecas.</h3>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-9">
            <p>En este sistema podrás registrar tus parcelas, cultivos y estaciones de riego, así como consultar los datos históricos de riego y clima para cada parcela.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <img src="/images/imagen_riego.png" alt="Sistema de riego" class="img-fluid"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Ir al sistema de riego</a> <br>
        </div>
    </div>
</div>

    
    
@endsection