@extends('layouts.layout')

@section('title', 'Modificar Usuario')

@section('content')

<div class="container mt-5">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" value="Jose Sanchez">
        </div>
        <div class="form-group col-md-6">
          <label for="cuenta">Cuenta</label>
          <input type="text" class="form-control" id="cuenta" value= "jsanchez">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" id="telefono" value="3003000">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="jsanchez@gmail.com">
        </div>
      </div>

      <tr>
        <div class="text-center">
        <a href="" class="button" style="display:inline-block; padding: 5px 5px; color:white; background-color:green ">Guardar</a>
        <a href="{{route('users.index')}}" class="button" style="display:inline-block; padding: 5px 5px; color:white; background-color:yellow ">Regresar</a>
        </div>
    </tr>   
    </form>
  </div>

  @endsection
