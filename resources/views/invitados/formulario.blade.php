@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Formulario Registro de Invitados</h3>

    <form action="{{ route('invitados.store') }}" method="post">
    @csrf

    {{-- Campo Nombre --}}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}">
      @error('nombre')
        <p>{{$message}}</p>
      @enderror
      <br />
    </div>
    {{-- Campo Apellido --}}
    <div class="form-group">
      <label for="lastname">Apellido</label>
      <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}">
      @error('apellido')
        <p>{{$message}}</p>
      @enderror
      <br />
    </div>
    {{-- Campo Telefono --}}
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}">
    @error('telefono')
      <p>{{$message}}</p>
    @enderror
    <br />
  </div>
    {{-- Campo Correo --}}
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="text" class="form-control" name="correo" id="correo" value="{{ old('correo') }}">
    @error('correo')
      <p>{{$message}}</p>
    @enderror
    <br />
  </div>
    {{-- Campo Edad --}}
  <div class="form-group">
    <label for="age">Edad</label>
    <input type="text" class="form-control" name="edad" id="edad" value="{{ old('edad') }}">
    @error('edad')
      <p>{{$message}}</p>
    @enderror
    <br />
  </div>
    {{-- Boton para Confirmar --}}
    <div class="form-group">
      <input type="checkbox" name="check" id="check">
      <label for="check">Esta de acuerdo con las politicas impuestas por la empresa para poder asistir al evento.</label>
      @error('check')
        <p>{{$message}}</p>
      @enderror
      <br />
    </div>

    {{-- Mensaje de exito --}}
  

    {{-- Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if (session('message'))
                <div class="message">{{session('message')}}</div>
            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <input type="submit" value="Enviar Datos" id="btn-submit" class="btn btn-success">
    </form>
    
    <script src="{{asset('js/modal_validate.js')}}"></script>
  </div>
@endsection
