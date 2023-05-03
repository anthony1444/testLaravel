@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Crear nueva compañía</h2>
  <form method="POST" action="{{ route('companies.store') }}">
    @csrf

    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="address">Dirección:</label>
      <input type="text" name="address" id="address" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="nit">NIT:</label>
      <input type="text" name="nit" id="nit" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="phone">Teléfono:</label>
      <input type="text" name="phone" id="phone" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <br><br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
</div>
@endsection
