@extends('layouts.layout')

@section('title', 'Mostrar Usuario')

@section('content')


<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><b>Nombre:</b> <span>Jose Sanchez</span></li>
      <li class="list-group-item"><b>Cuenta:</b> <span>jsanchez</span></li>
      <li class="list-group-item"><b>Telefono:</b> <span>3003000</span></li>
      <li class="list-group-item"><b>Email:</b> <span>jsanchez@gmail.com</span></li>
    </ul>
  </div>

  <a href="{{route('users.index')}}" class="btn btn-primary">Regresar</a>

  @endsection
