<!DOCTYPE html>
<html lang="es">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--NO MODIFICAR-->
    <title>INIFAP C.E. Zacatecas - Sistema de riego</title>		
	<link href="https://framework-gb.cdn.gob.mx/gm/v3/assets/styles/main.css" rel="stylesheet">
    <link href="https://framework-gb.cdn.gob.mx/gm/v3/assets/images/favicon.ico" rel="shortcut icon">

</head>

<body>

<main class="page">

		<nav class="navbar navbar-expand-md navbar-dark bg-light sub-navbar fixed-top">
		<div class="container">
			<button
			type="button"
			class="navbar-toggler"
			data-bs-toggle="collapse"
			data-bs-target="#subNavBarDropdown"
			aria-controls="subNavBarDropdown"
			aria-expanded="false"
			aria-label="Toggle navigation"
			>
			<span class="navbar-toggler-icon"></span>
			</button>
		
			<a class="navbar-brand sub-navbar" href="#"></a>
		
			<div class="collapse navbar-collapse" id="subNavBarDropdown">
			<ul class="navbar-nav">
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/tramites" target="_self" title="Ir a trámites del gobierno">Trámites</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/articulos">Blog</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/multimedia">Multimedia</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/prensa">Prensa</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/agenda">Agenda</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/acciones_y_programas">Acciones y programas</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/inifap/archivo/documentos">Documentos</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://vun.inifap.gob.mx/portalweb/_Transparencia">Transparencia</a></li>
				<li class="nav-item "><a class="nav-link subnav-link" href="https://www.gob.mx/agricultura/es/#344">Contacto</a></li>
			</ul>
			</div>
		    </div>
		</nav>

    <div class="container" style="margin-top: 60px; margin-bottom: 120px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h4>
                            Sistema de Riego
                        </h4>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="https://framework-gb.cdn.gob.mx/gm/v3/assets/js/gobmx.js"></script>

</body>
</html>