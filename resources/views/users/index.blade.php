@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')

    <br>
    <a href="{{ route('users.create') }}" class="btn btn-secondary btn-lg"> Agregar Usuario</a>
    {{-- <button type="button" class="btn btn-secondary btn-lg">Agregar Usuario</button> --}}
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jose Sanchez</td>
                <td>jsanchez</td>
                <td>3003000</td>
                <td>jsanchez@gmail.com</td>
                <td>
                    <a href="{{ route('users.show', $id = 0) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('users.edit', $id = 0) }}" class="btn btn-success">Modificar</a>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>John Doe</td>
                <td>jdoe</td>
                <td>3003001</td>
                <td>johndoe@gmail.com</td>
                <td>
                    <a href="{{ route('users.show', $id = 0) }}" class="btn btn-info">Ver</a>
                    <button type="button" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Luis Perez</td>
                <td>lperez</td>
                <td>3003002</td>
                <td>luisperez@gmail.com</td>
                <td>
                    <a href="{{ route('users.show', $id = 0) }}" class="btn btn-info">Ver</a>
                    <button type="button" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
        </tbody>
    </table>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

@endsection
