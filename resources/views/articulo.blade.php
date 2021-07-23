@extends('plantilla')

@section('contenido')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $item)
    <tr>
        <td> {{$item->id}} </td>
        <td> {{$item->descripcion}} </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection