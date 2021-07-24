
@extends('plantilla')

@section('header')
    <title>WikiUta</title>
    <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">
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
              <a class="btn btn-sm btn-outline-secondary" href="Login.blade.php">Ingresar</a>
            </div>
          </div>
        </header>
      
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">Profesores</a>
            <a class="p-2 link-secondary" href="Carreras.html">Carreras</a>
            <a class="p-2 link-secondary" href="#">Asistentes sociales</a>
            <a class="p-2 link-secondary" href="#">Servicio de salud</a>
            <a class="p-2 link-secondary" href="#">Recaudacion</a>
          </nav>
        </div>
    </div>

      <main>     
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                  <img src="Img/Img01.jpg" width="100%" height="225">
      
                  <div class="card-body">
                    <p class="card-text">4ª Reunion Informativa-INDUCCIÓN DAE 2021.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="Articulo.html"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">17/06/2021</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="Img/logo.png" width="100%" height="225">
      
                  <div class="card-body">
                    <p class="card-text">Publicación de nuevas becas.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">12/06/2021</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="Img/logo.png" width="100%" height="225">
      
                  <div class="card-body">
                    <p class="card-text">Horario de registraduria.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">10/06/2021</small>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagen Referencial</text></svg>
      
                  <div class="card-body">
                    <p class="card-text">Periodo de eliminación de ramos Semestre 1.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">01/06/2021</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagen Referencial</text></svg>
      
                  <div class="card-body">
                    <p class="card-text">Fecha de postulación a becas y creditos y sus requisitos.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">15/05/2021</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Imagen Referencial</text></svg>
      
                  <div class="card-body">
                    <p class="card-text">¿Cómo pagar el CAE?</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                      </div>
                      <small class="text-muted">10/05/2021</small>
                    </div>
                  </div>
                </div>
              </div>
      </main>
@endsection