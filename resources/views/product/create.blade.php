@extends('product.Layout.app')

@section('title', 'Crear Producto - ProShop')

@section('content')
    <!-- Main Content -->
    <div class="center-page">
        <div class="form-container">
            <div class="form-title">Crear Producto</div>

            <form method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();">
                <!-- ID Producto -->
                <div class="form-group">
                    <label for="id_producto">ID Producto <span class="required">*</span></label>
                    <input type="text" id="id_producto" name="id_producto" placeholder="Ej: PRD-001" required readonly
                        aria-readonly="true">
                    <span class="help-text">Identificador único del producto</span>
                </div>

                <!-- Nombre y Precio -->
                <div class="form-group-double">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto <span class="required">*</span></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Laptop Gaming Pro" required
                            readonly aria-readonly="true">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio <span class="required">*</span></label>
                        <input type="number" id="precio" name="precio" placeholder="Ej: 1999.99" step="0.01"
                            min="0" required readonly aria-readonly="true">
                    </div>
                </div>

                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcion">Descripción <span class="required">*</span></label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingresa una descripción detallada del producto..." required
                        readonly aria-readonly="true"></textarea>
                    <span class="help-text">Máximo 500 caracteres</span>
                </div>

                <!-- Imagen -->
                <div class="form-group">
                    <label for="imagen">Imagen del Producto <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" id="imagen" name="imagen" accept="image/*" required disabled
                            aria-disabled="true">
                        <label for="imagen" class="file-input-label">
                            📁 Arrastra la imagen aquí o haz clic para seleccionar
                        </label>
                    </div>
                    <span class="help-text">Formatos soportados: JPG, PNG, GIF. Tamaño máximo: 5MB</span>
                </div>

                <!-- Estado -->
                <div class="form-group">
                    <label for="estado">Estado del Producto <span class="required">*</span></label>
                    <select id="estado" name="estado" required disabled aria-disabled="true">
                        <option value="">-- Selecciona un estado --</option>
                        <option value="disponible">Disponible</option>
                        <option value="agotado">Agotado</option>
                        <option value="discontinuado">Discontinuado</option>
                        <option value="preorden">Pre-orden</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="button-group">
                    <button type="button" class="btn-submit" disabled aria-disabled="true">Crear Producto</button>
                    <button type="button" class="btn-cancel" disabled aria-disabled="true">Limpiar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
