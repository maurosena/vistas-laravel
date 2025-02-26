@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')

<div class="container mt-5">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
          <label for="cuenta">Cuenta</label>
          <input type="text" class="form-control" id="cuenta" placeholder="Cuenta">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  @endsection
