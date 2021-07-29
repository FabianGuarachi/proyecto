@extends('plantilla')

@section('header')
    <title>WikiUTA</title>
    <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">
@endsection



@section('contenido')

<div class="container">
        <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="btn btn-sm btn-outline-secondary" href="/Registrarse">Registrarse</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="\articulos"> Wiki UTA</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
              </a>
              <a class="btn btn-sm btn-outline-secondary" href="/Login">Ingresar</a>
            </div>
          </div>
        </header>
      
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            @foreach($areas as $area)
            <a class="p-2 link-secondary" href="{{$area->area_id}}">{{$area->nombre_area}}</a>
            @endforeach
          </nav>
        </div>
</div>


      <main>     
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              @foreach($empleados as $empleado)
              <div class="col">
                <div class="card shadow-sm">
                  <img src="{{$empleado->imagen}}" width="100%" height="225">
      
                  <div class="card-body">
                    <p class="card-text">{{$empleado->nombre}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="/empleados/{{$empleado->empleado_id}}/{{$empleado->area_id}}">Ver</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              </div>
              </div>
              </div>
            

      </main>
@endsection