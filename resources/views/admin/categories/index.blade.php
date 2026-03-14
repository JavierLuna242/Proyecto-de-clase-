@extends('admin.layout.app')

@section('title', 'Gestión de Categorías - Admin Dashboard')

@section('content')

    <div class="admin-page-header">
        <div>
            <h1 class="admin-page-title">Categorías</h1>
            <p class="admin-page-subtitle">Gestiona las clasificaciones de tu catálogo de productos.</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="admin-btn-primary">
            <i class="fa-solid fa-plus"></i> Nueva Categoría
        </a>
    </div>

    @if(session('success'))
        <div style="background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px;">
            <i class="fa-solid fa-circle-check" style="margin-right: 8px;"></i> {{ session('success') }}
        </div>
    @endif

    <div class="admin-panel">
        <div class="admin-panel-header">
            <h2 class="admin-panel-title">Listado de Categorías</h2>
        </div>
        
        <div style="overflow-x: auto;">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th style="width: 250px;">Nombre</th>
                        <th>Descripción</th>
                        <th style="width: 150px;">Fecha Creación</th>
                        <th style="width: 120px; text-align: right;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td style="color: #64748b; font-weight: 500;">#{{ $category->id }}</td>
                        <td>
                            <strong style="color: #0f172a;">{{ $category->name }}</strong>
                        </td>
                        <td>
                            <span style="color: #475569; font-size: 13px;">{{ Str::limit($category->description, 80) }}</span>
                        </td>
                        <td style="font-size: 13px; color: #64748b;">
                            {{ $category->created_at->format('d/m/Y') }}
                        </td>
                        <td style="text-align: right;">
                            <div class="td-actions" style="justify-content: flex-end;">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn-icon edit" title="Editar">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icon delete" title="Eliminar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 40px; color: #64748b;">
                            <i class="fa-solid fa-folder-open" style="font-size: 32px; color: #cbd5e1; margin-bottom: 15px; display: block;"></i>
                            No hay categorías registradas. Crea tu primera categoría para organizar tus productos.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
