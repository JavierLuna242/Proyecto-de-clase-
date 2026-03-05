@extends('product.Layout.app')

@section('title', 'Crear Producto - ProShop')

@section('content')
    <!-- Main Content -->
    <div class="center-page">
        <div class="form-container">
            <div class="form-title">Crear Producto</div>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Nombre y Precio -->
                <div class="form-group-double">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto <span class="required">*</span></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Laptop Gaming Pro" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio <span class="required">*</span></label>
                        <input type="number" id="precio" name="precio" placeholder="Ej: 1999.99" step="0.01"
                            min="0" required>
                    </div>
                </div>

                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcion">Descripción <span class="required">*</span></label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingresa una descripción detallada del producto..." required></textarea>
                    <span class="help-text">Máximo 500 caracteres</span>
                </div>

                <!-- Imagen -->
                <div class="form-group">
                    <label for="imagen">Imagen del Producto</label>
                    <div class="file-input-wrapper">
                        <input type="file" id="imagen" name="imagen" accept="image/*">
                        <label for="imagen" class="file-input-label">
                            📁 Arrastra la imagen aquí o haz clic para seleccionar
                        </label>
                    </div>
                    <span class="help-text">Formatos soportados: JPG, PNG, GIF. Tamaño máximo: 5MB</span>
                </div>

                <!-- Estado -->
                <div class="form-group">
                    <label for="estado">Categoria<span class="required">*</span></label>
                    <select id="estado" name="categoria" required>
                        @foreach ($categoryList as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <!-- Buttons -->
                <div class="button-group">
                    <button type="submit" class="btn-submit">Crear Producto</button>
                    <button type="button" class="btn-cancel"
                        onclick="document.querySelector('form').reset();">Limpiar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
