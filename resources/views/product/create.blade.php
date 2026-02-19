<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - ProShop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #2c3e50;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            color: #fff;
            font-size: 32px;
            font-weight: 800;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .form-container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            overflow: hidden;
        }

        .form-title {
            font-size: 32px;
            font-weight: 800;
            color: white;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: -40px -40px 30px -40px;
            padding: 24px 40px;
            border-radius: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="file"],
        textarea,
        select {
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #fafbfc;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
            background-color: white;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
        }

        .form-group-double {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group-double .form-group {
            margin-bottom: 0;
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: block;
            padding: 16px 15px;
            background: linear-gradient(135deg, #f8f9ff 0%, #f0f0f8 100%);
            border: 2px dashed #667eea;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
            color: #667eea;
        }

        .file-input-label:hover {
            background: linear-gradient(135deg, #f0f0f8 0%, #e8e8f5 100%);
            border-color: #764ba2;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
        }

        .file-input-label.active {
            background: linear-gradient(135deg, #eef9f5 0%, #e8f5f0 100%);
            border-color: #27ae60;
            color: #27ae60;
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.15);
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        button {
            flex: 1;
            padding: 14px 20px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-cancel {
            background-color: #ecf0f1;
            color: #2c3e50;
            border: 2px solid #e0e0e0;
        }

        .btn-cancel:hover {
            background-color: #e0e0e0;
            border-color: #bdc3c7;
            transform: translateY(-2px);
        }

        .required {
            color: #ff6b6b;
            font-weight: 600;
        }

        .help-text {
            font-size: 12px;
            color: #95a5a6;
            margin-top: 6px;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 25px;
            }

            .form-title {
                margin: -25px -25px 25px -25px;
                padding: 15px 25px;
                font-size: 24px;
            }

            .form-group-double {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .button-group {
                flex-direction: column;
            }

            .form-group {
                margin-bottom: 20px;
            }
        }
    </style>
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
