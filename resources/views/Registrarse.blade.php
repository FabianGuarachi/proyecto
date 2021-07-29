@extends('plantilla')

@section('header')
    <title>WikiUta/Registrarse</title>
    <link rel="stylesheet" href="{{ asset('css/EstiloLogin.css') }}">
@endsection

@section('contenido')
    <div class="text-center">
        <main class="form-signin">
            <form>
                <img class="mb-4" src="img/LogoUta" alt="" width="80" height="120">
                <h1 class="h3 mb-3 fw-normal">WikiUTA</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="name">
                    <label for="floatingInput">Nombre de usuario</label>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@alumnos.uta.cl">
                    <label for="floatingInput">Correo Institucional</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
                <p class="mt-5 mb-3 text-muted">WikiUTA-2021</p>
            </form>
        </main>
    </div>
@endsection