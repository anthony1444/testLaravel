@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Empresas</h1>
        <hr>

        <p>Bienvenido, {{ Auth::user()->idrol }}</p>




        <a href="{{ route('companies.create') }}" class="btn btn-success mb-3">Agregar Empresa</a>

        @if(count($companies) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>Dirección</th>
                        <th>NIT</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->nit }}</td>
                            <td>{{ $company->phone }}</td>
                            @if(Auth::user()->idrol == 1)
                                <td>
                                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary mr-2">Editar</a>
                                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta company?')">Eliminar</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <a href="">asdf</a>
                                </td>
                             @endif

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">No hay companies registradas.</div>
        @endif
    </div>
@endsection
