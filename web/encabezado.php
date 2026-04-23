<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Catálogo de Videojuegos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #0f0f1a;
            color: #e0e0e0;
        }

        .navbar {
            background: linear-gradient(90deg, #1a1a2e, #16213e);
            border-bottom: 2px solid #e94560;
            box-shadow: 0 2px 15px rgba(233, 69, 96, 0.4);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #e94560 !important;
            letter-spacing: 1px;
        }

        .navbar-brand i {
            color: #e94560;
        }

        .nav-link {
            color: #c0c0d0 !important;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: #e94560 !important;
        }

        .nav-link i {
            margin-right: 5px;
        }

        main {
            padding-top: 30px;
            padding-bottom: 80px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="listar.php">
                <i class="bi bi-controller"></i> GameVault
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="listar.php">
                            <i class="bi bi-list-ul"></i> Videojuegos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.php">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid px-4">