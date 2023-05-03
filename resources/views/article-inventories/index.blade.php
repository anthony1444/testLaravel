@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Articles Inventories</div>
                    <a href="{{ route('inventories.create') }}" class="btn btn-success mb-3">Agregar Nuevo Articulo</a>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Inventory</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articleInventories as $articleInventory)
                                        <tr>
                                            <td>{{ $articleInventory->article->name }}</td>
                                            <td>{{ $articleInventory->inventory->name }}</td>
                                            <td>{{ $articleInventory->quantity }}</td>
                                            <td>
                                                <a href="{{ route('inventories.edit', $articleInventory->id) }}" class="btn btn-primary">Edit</a>

                                                <form action="{{ route('inventories.destroy', $articleInventory->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
