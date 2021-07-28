@extends('plantilla')

@section('header')
    <title>WikiUta/Profesor</title>
    <link rel="stylesheet" href="css/BgCarreras.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
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
            <a class="p-2 link-secondary" href="Carreras.html">Recaudacion</a>
            <a class="p-2 link-secondary" href="#">Asistentes sociales</a>
            <a class="p-2 link-secondary" href="#">Servicio de salud</a>
            <a class="p-2 link-secondary" href="#">Recaudacion</a>
          </nav>
        </div>
    </div>
    <div class="container marketing">
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-1">
              <h1 class="featurette-heading">Datos del empleado</h1>
              
                
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label>Fono</label>
                <input type="text" class="form-control" name="fono">
                <label>Correo electronico</label>
                <input type="text" class="form-control" name="correo_elect" placeholder="Ingrese correo válido">
                <label>Cargo</label>
                <input type="text" class="form-control" name="cargo">
                <label>Imagen</label>
                <input type="text" class="form-control" name="area" placeholder="Ingrese URL válida">
                <div class="mt-3">
                  <button class="btn btn-primary">Editar</button>
                  <button class="btn btn-danger">Salir</button>
                </div>
          </div>

          <div class="col-md-5 order-md-1">
            <img src="Reloj.jpg" width="400" height="400">
          </div>

        </div>

        <div>
            <hr class="featurette-divider">
        </div>
@endsection