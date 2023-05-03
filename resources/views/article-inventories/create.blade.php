@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear un Articulo') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inventories.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="article_id" class="col-md-4 col-form-label text-md-right">{{ __('Articulos') }}</label>

                            <div class="col-md-6">
                                <select id="article_id" name="article_id" class="form-control @error('article_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>{{ __('Selecciona un Articulo') }}</option>
                                    @foreach ($articles as $article)
                                        <option value="{{ $article->id }}" {{ old('article_id') == $article->id ? 'selected' : '' }}>{{ $article->name }}</option>
                                    @endforeach
                                </select>

                                @error('article_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="inventory_id" class="col-md-4 col-form-label text-md-right">{{ __('Inventarios') }}</label>

                            <div class="col-md-6">
                                <select id="inventory_id" name="inventory_id" class="form-control @error('inventory_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>{{ __('Selecciona un Inventario') }}</option>
                                    @foreach ($inventories as $inventory)
                                        <option value="{{ $inventory->id }}" {{ old('inventory_id') == $inventory->id ? 'selected' : '' }}>{{ $inventory->name }}</option>
                                    @endforeach
                                </select>

                                @error('article_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="company_id" class="col-md-4 col-form-label text-md-right">{{ __('Compañias') }}</label>

                            <div class="col-md-6">
                                <select id="company_id" name="company_id" class="form-control @error('company_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>{{ __('Selecciona una Compañia') }}</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                    @endforeach
                                </select>

                                @error('company_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">

                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Cantidad:</label>
                            <div class="col-md-6">
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                        </div>
                        <br><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
