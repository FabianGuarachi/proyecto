@extends('plantilla')

@section('header')
    <title>WikiUta/Articulo</title>
    <link rel="stylesheet" href="{{ asset('css/EstiloArticulo.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
@endsection

@section('contenido')
<div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="btn btn-sm btn-outline-secondary" href="Registrarse.html">Registrarse</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="#">Wiki Uta</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="Login.html">Ingresar</a>
            </div>
          </div>
        </header>
      
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">Profesores</a>
            <a class="p-2 link-secondary" href="#">Carreras</a>
            <a class="p-2 link-secondary" href="#">Departamentos</a>
            <a class="p-2 link-secondary" href="#">Registraduria</a>
            <a class="p-2 link-secondary" href="#">Asistentes sociales</a>
            <a class="p-2 link-secondary" href="#">Becas</a>
            <a class="p-2 link-secondary" href="#">Convenios</a>
            <a class="p-2 link-secondary" href="#">Biblioteca</a>
            <a class="p-2 link-secondary" href="#">Servicio de salud</a>
            <a class="p-2 link-secondary" href="#">Recaudacion</a>
            <a class="p-2 link-secondary" href="#">Casino Uta</a>
          </nav>
        </div>
    </div>
    <div class="container marketing">
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
              <h1 class="featurette-heading">4ª Reunion Informativa-INDUCCIÓN DAE 2021.</h1><!--<span class="text-muted">See for yourself.</span></h2>--> 
            <p class="lead">Finalizando las jornadas informativas, te invitamos a participar en la última reunión INDUCCION DAE 2021 de la Dirección de Asuntos Estudiantiles de la Universidad de Tarapacá (DAE)- Sede Arica que tiene como objetivo informar sobre los principales servicios de las diferentes unidades de la DAE y otras oficinas importantes, que aportan a resolver diferentes problemáticas tanto académicas como administrativas.
                Exponen:
                ·       Registraduría  
                ·       Finanzas
                ·       Servicio Médico Estudiantil
                ·       Oficina de Asistencia Social Estudiantil
                ·       DAE Deportes
                .     Vinculación con Estudiantes
                ·       Oficina de Proyectos y Credenciales (TNE y TUI)
                ¿Cuando?
                Conéctate el 17 de Junio a las 16:00 hrs en Facebook Live por nuestra Fan Page de Facebook:
                https://www.facebook.com/daeutarapaca
                -- 
                -- 
                Liliana Díaz Quispe
                Administrativa
                Federación de Estudiantes</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="Img/Img01.jpg">
          </div>
        </div>
            <hr class="featurette-divider">
        </div>
@endsection