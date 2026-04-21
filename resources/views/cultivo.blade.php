@extends("layouts.appGOB")
@section("title", "cultivo")
@section("view-name", "cultivo")

@section("content")
        <div class="container">
            <ol class="breadcrumb top-buffer">
                <li><a href="http://www.gob.mx"><i class="icon icon-home"></i></a></li>
                <li><a href="http://www.gob.mx/inifap">Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias</a></li>
                <li><a href="index.php">Inifap C.E. Zacatecas</a></li>
                <li class="active">Sistema de riego</li>
            </ol>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Cultivo</h2>
                    <hr class="red">
                </div>
                <div class="col-sm-3">
                    <!--SECCIÓN MODIFICABLE | MENU CONTEXTUAL -->
                    <div class="row">
                        <div class="list-group">
                            <a class="list-group-item" style="text-decoration: none;" href="baseinifap.html"><img src="/images/templatemo_list.png" style="margin-right:10px;">Menu 1</a>
                            <a class="list-group-item" style="text-decoration: none;" href="baseinifap.html"><img src="/images/templatemo_list.png" style="margin-right:10px;">Menu 2</a>
                            <a class="list-group-item" style="text-decoration: none;" href="baseinifap.html"><img src="/images/templatemo_list.png" style="margin-right:10px;">Menu 3</a>
                        </div>   
                    </div>
                    <br>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Datos generales del cultivo</h3>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            <p><h4>Estación</h4></p>
                                <select class="form-control" id="estacion">
                                <option value="">---</option>
                                <option value="1">Estación 1</option>
                                <option value="2">Estación 2</option>
                                </select>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p><h4>Nombre de la parcela</h4></p>
                        <input class="form-control" type="text" name="nombre" id="nombre_parcela">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p><h4>Coordenadas</h4></p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h5>Latitud</h5>
                            <input class="form-control" type="text" name="latitud" id="latitud">
                        </div>
                        <div class="col-md-4">
                            <h5>Longitud</h5>
                            <input class="form-control" type="text" name="longitud" id="longitud">
                        </div>   
                    </div>   
                <div class="row">
                    <div class="col-md-4">
                        <p>
                        <p><br>
                            <button type="button" class="btn btn-primary" id="validateReportButton">Ver mapa</button>
                        </p>
                        </p>
                    </div>
                </div>      
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Datos de suelo y manejo de abatimiento</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p><h4>Tipo de suelo</h4></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                        <p>
                            <p><h5>Textura</h5></p>
                                <select class="form-control" id="textura">
                                    <option value="">---</option>
                                    <option value="1">Textura 1</option>
                                    <option value="2">Textura 2</option>
                                </select>
                        </p>
                </div>
                <div class="col-md-3">
                    <h5>CC</h5>
                    <input class="form-control" type="text" name="cc" id="cc"
                        placeholder="Seleccione textura"
                        readonly
                        style="background-color: #e9ecef; color: #495057; cursor: not-allowed;">
                </div>
                <div class="col-md-3">
                    <h5>PMP</h5>
                    <input class="form-control" type="text" name="pmp" id="pmp"
                        placeholder="Seleccione textura"
                        readonly
                        style="background-color: #e9ecef; color: #495057; cursor: not-allowed;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p><h4>Profundidad radicular (cm)</h4></p>
                    <input class="form-control" type="text" name="profundidad_radicular" id="profundidad_radicular">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><h4>Criterio de calendarización de riego</h4></p>
                </div>
            </div>
            <div class="row">
                <!-- Por abatimiento -->
                <div class="col-sm-6">
                    <p>
                        <label for="radio_abatimiento"><h5 style="display:inline;">Por abatimiento (%)</h5></label>
                        <input type="radio" name="criterio" id="radio_abatimiento" value="abatimiento">
                    </p>
                    <div class="input-group">
                        <input class="form-control" type="text" name="abatimiento" id="abatimiento"
                            placeholder="Ingrese el porcentaje"
                            disabled
                            style="background-color: #e9ecef; color: #495057; cursor: not-allowed;">
                    </div>
                </div>
                <!-- Por días -->
                <div class="col-sm-6">
                    <p>
                        <label for="radio_dias"><h5 style="display:inline;">Por días</h5></label>
                        <input type="radio" name="criterio" id="radio_dias" value="dias">
                    </p>
                    <div id="dias_group" style="display: flex; gap: 14px; align-items: center; flex-wrap: wrap; margin-top: 4px;">
                        @foreach([['L','Lunes'],['M','Martes'],['W','Miércoles'],['J','Jueves'],['V','Viernes'],['S','Sábado'],['D','Domingo']] as [$inicial, $nombre])
                        <label title="{{ $nombre }}" style="display: flex; align-items: center; gap: 4px; margin-bottom: 0; cursor: not-allowed; opacity: 0.5;">
                            <input type="checkbox" class="dia-check" name="dias[]" value="{{ $inicial }}" disabled>
                            <span>{{ $inicial }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row"></div>
@endsection

@push('scripts')
    <script src="{{ asset('js/cultivo.js') }}"></script>
@endpush