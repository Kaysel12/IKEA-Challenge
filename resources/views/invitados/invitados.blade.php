@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="">
            {{-- Boton --}}
            <div>
                <h3>Registro de Invitados</h3>
                <form method="get" action="" class="d-flex">
                    @csrf
                    <input name="busqueda" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        value="">
                    <button class="btn btn-outline-success" type="submit">Search</button>

            </div>
            <h4>Filtros</h4>
            <div class="d-inline-flex">
                <div class="d-flex">
                    <h5 class="">Edad</h5>
                    <select  id="" name="edad">
                        <option selected disabled value=""></option>
                        <option value="DESC" name>Mayor</option>
                        <option value="ASC">Menor</option>
                    </select>
                </div>
                <div class="d-flex">
                    <h5 class="">Nombre</h5>
                    <select  id="" name="nombre">
                        <option selected disabled value=""></option>
                        <option  value="ASC">A-Z</option>
                        <option value="DESC">Z-A</option>
                    </select>
                </div>
            </div>
            </form>
        </section>

        <table class="table table-light">

            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>

            <tbody class="">
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->nombre }}</td>
                        <td>{{ $dato->apellido }}</td>
                        <td>{{ $dato->telefono }}</td>
                        <td>{{ $dato->correo }}</td>
                        <td>{{ $dato->edad }}</td>
                        <td>{{ $dato->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <p><b>Contador:</b> {{ $count }}</p>
        {!! $datos->links() !!}
    </div>
@endsection
