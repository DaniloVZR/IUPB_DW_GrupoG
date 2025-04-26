<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .header-section {
            background-color: #6741d9;
            padding: 2rem 0;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .text-subtitles {
            font-size: 1.5rem;
            font-weight: bold;
            color: #6741d9;
            border-bottom: 2px solid #6741d9;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .card {
            cursor: pointer;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        .table-container {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .table thead {
            background-color: #6741d9;
            color: white;
        }

        .table th {
            border-bottom: none;
            font-weight: 500;
        }

        .table td {
            vertical-align: middle;
        }

        .btn-primary {
            background-color: #6741d9;
            border-color: #6741d9;
        }

        .btn-primary:hover {
            background-color: #5a38c0;
            border-color: #5a38c0;
        }

        .btn-light {
            background-color: #f8f9fa;
            border-color: #6741d9;
            color: #6741d9;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            border-color: #5a38c0;
            color: #5a38c0;
        }

        .empty-state {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="header-section text-center">
            <h1>Tipos de Proyecto</h1>
            <p class="mb-0">Administración de los tipos de proyectos disponibles</p>
        </div>

        <div class="table-container">
            <h2 class="text-subtitles">Listado de Tipos</h2>
            
            @if($tipos->isEmpty())
                <div class="empty-state">
                    <i class="bi bi-folder-x" style="font-size: 2rem;"></i>
                    <p class="mt-3">No hay tipos de proyecto registrados aún.</p>
                    <a href="#" class="btn btn-primary mt-2">
                        Crear Primer Tipo
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo de Proyecto</th>
                                <th>Fecha de Creación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->COD_tipo_proyecto }}</td>
                                <td>{{ $tipo->tipo_proyecto }}</td>
                                <td>{{ $tipo->created_at ? $tipo->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-light">
                                            <i class="bi bi-pencil"></i> Editar
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="d-flex justify-content-end mt-3">
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Agregar Nuevo Tipo
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>