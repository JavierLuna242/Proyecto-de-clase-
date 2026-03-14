@extends('admin.layout.app')

@section('title', 'Editar Categoría - Admin Dashboard')

@section('content')

    <div class="admin-page-header">
        <div>
            <h1 class="admin-page-title">Editar Categoría</h1>
            <p class="admin-page-subtitle">Modificando: {{ $category->name }}</p>
        </div>
        <a href="{{ route('admin.categories.index') }}" class="admin-btn-primary" style="background: #ffffff; color: #0f172a; border: 1px solid #e2e8f0;">
            <i class="fa-solid fa-arrow-left"></i> Volver al listado
        </a>
    </div>

    <div style="max-width: 800px; margin: 0 auto;">
        <div class="admin-panel" style="padding: 30px;">
            
            @if ($errors->any())
                <div style="background-color: #fef2f2; border: 1px solid #fecaca; color: #991b1b; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div style="margin-bottom: 25px;">
                    <label for="name" style="display: block; font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Nombre de Categoría</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required
                           style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 15px; color: #0f172a; transition: all 0.2s; font-family: 'Inter', sans-serif;">
                </div>

                <div style="margin-bottom: 30px;">
                    <label for="description" style="display: block; font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Descripción</label>
                    <textarea id="description" name="description" required rows="5"
                              style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 15px; color: #0f172a; transition: all 0.2s; font-family: 'Inter', sans-serif; resize: vertical;">{{ old('description', $category->description) }}</textarea>
                </div>

                <div style="border-top: 1px solid #e2e8f0; padding-top: 25px; display: flex; justify-content: flex-end; gap: 15px;">
                    <a href="{{ route('admin.categories.index') }}" class="admin-btn-primary" style="background: #f1f5f9; color: #475569;">
                        Cancelar
                    </a>
                    <button type="submit" class="admin-btn-primary" style="background: #38bdf8; color: white;">
                        <i class="fa-solid fa-save"></i> Guardar Cambios
                    </button>
                </div>
            </form>

        </div>
    </div>

@endsection
