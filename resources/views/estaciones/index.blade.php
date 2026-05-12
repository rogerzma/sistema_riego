@extends('layouts.appGOB')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<style>

    #map {
        height: 85vh;
        width: 100%;
        border-radius: 10px;
        z-index: 1;
    }

    .sidebar {
        background: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        height: 85vh;
        overflow-y: auto;
    }

    .station-card {
        border-left: 5px solid #006341;
        margin-bottom: 10px;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 5px;
        cursor: pointer;
    }

</style>

<div class="container-fluid mt-2">
<h1>Mapa de Distribución de Estaciones</h1>
<h4>Seleccionar la estación más cercana a su parcela de cultivo y dar clic en ella.</h4>
    <div class="row">

                <!-- MAPA -->
        <div class="col-md-9">
            <div
            id="map"
            style="
            height: 85vh;
            width: 100%;
            min-height: 500px;
            border-radius: 10px;"
            ></div>
        </div>

        <!-- PANEL -->
        <div class="col-md-3 mb-3">

            <div class="sidebar">

                <h4 class="mb-4">
                    Estaciones Meteorológicas
                </h4>

                @foreach($estaciones as $estacion)

                    <div class="station-card">

                        <strong>{{ $estacion->nombre }}</strong><br>

                        Municipio:
                        {{ $estacion->municipio }}

                    </div>

                @endforeach

            </div>

        </div>



    </div>

</div>

@endsection

@push('scripts')

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

@push('scripts')

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

document.addEventListener("DOMContentLoaded", function () {

    // Inicializar mapa
    const map = L.map('map').setView([22.7709, -102.5832], 8);

    // Capa base
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

        attribution: '&copy; OpenStreetMap'

    }).addTo(map);

    // Datos Laravel
    const estaciones = @json($estaciones);

    estaciones.forEach(estacion => {

        L.marker([
            estacion.latitud,
            estacion.longitud
        ])
        .addTo(map)
        .bindPopup(`
            <strong>${estacion.nombre}</strong><br>
            Municipio: ${estacion.municipio}
        `);

    });

    // Forzar render
    setTimeout(() => {
        map.invalidateSize();
    }, 200);

});

</script>

@endpush