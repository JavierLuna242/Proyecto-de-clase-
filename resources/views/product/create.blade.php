<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - ProShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">ProShop</div>
        <div>
            <a href="/" class="nav-link">🏠 Inicio</a>
            <a href="/productos" class="nav-link">📦 Productos</a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="form-container">
            <div class="form-title">Crear Producto</div>

            <form method="POST" enctype="multipart/form-data">
                <!-- ID Producto -->
                <div class="form-group">
                    <label for="id_producto">ID Producto <span class="required">*</span></label>
                    <input type="text" id="id_producto" name="id_producto" placeholder="Ej: PRD-001" required>
                    <span class="help-text">Identificador único del producto</span>
                </div>

                <!-- Nombre y Precio -->
                <div class="form-group-double">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto <span class="required">*</span></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Laptop Gaming Pro"
                            required>
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
                    <label for="imagen">Imagen del Producto <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" id="imagen" name="imagen" accept="image/*" required
                            onchange="updateFileName(this)">
                        <label for="imagen" class="file-input-label">
                            📁 Arrastra la imagen aquí o haz clic para seleccionar
                        </label>
                    </div>
                    <span class="help-text">Formatos soportados: JPG, PNG, GIF. Tamaño máximo: 5MB</span>
                </div>

                <!-- Estado -->
                <div class="form-group">
                    <label for="estado">Estado del Producto <span class="required">*</span></label>
                    <select id="estado" name="estado" required>
                        <option value="">-- Selecciona un estado --</option>
                        <option value="disponible">Disponible</option>
                        <option value="agotado">Agotado</option>
                        <option value="discontinuado">Discontinuado</option>
                        <option value="preorden">Pre-orden</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="button-group">
                    <button type="submit" class="btn-submit">Crear Producto</button>
                    <button type="reset" class="btn-cancel">Limpiar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const label = input.nextElementSibling;
            if (input.files && input.files[0]) {
                label.textContent = '✓ ' + input.files[0].name;
                label.classList.add('active');
            }
        }

        // Drag and drop functionality
        const fileInput = document.getElementById('imagen');
        const fileLabel = fileInput.nextElementSibling;

        fileLabel.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileLabel.style.backgroundColor = '#fff5f5';
        });

        fileLabel.addEventListener('dragleave', () => {
            fileLabel.style.backgroundColor = '#f5f5f5';
        });

        fileLabel.addEventListener('drop', (e) => {
            e.preventDefault();
            fileInput.files = e.dataTransfer.files;
            updateFileName(fileInput);
        });
    </script>
</body>

</html>
