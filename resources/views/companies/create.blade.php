<form method="POST" action="{{ route('companies.store') }}">
    @csrf

    <div class="form-group">
        <label for="name">name:</label>
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
        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
