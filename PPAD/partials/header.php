<?php
$base_url = "/";

require(".{$base_url}database/conection.php");


?>

<!doctype html>
<html lang="es">

<head>
    <title>PPAM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Secciones</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Empleados</a>
                                <a class="dropdown-item" href="#">Puestos</a>
                                <a class="dropdown-item" href="#">Inventarios</a>
                                <a class="dropdown-item" href="#">Materiales</a>
                                <a class="dropdown-item" href="#">Proyecto</a>
                                <a class="dropdown-item" href="#">Tareas</a>
                                <a class="dropdown-item" href="#">Usuarios</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Reportes</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Reporte de Empleados</a>
                                <a class="dropdown-item" href="#">Reporte de Puestos</a>
                                <a class="dropdown-item" href="#">Reporte de Inventarios</a>
                                <a class="dropdown-item" href="#">Reporte de Materiales</a>
                                <a class="dropdown-item" href="#">Reporte de Proyecto</a>
                                <a class="dropdown-item" href="#">Reporte de Tareas</a>
                                <a class="dropdown-item" href="#">Reporte de Usuarios</a>
                                <a class="dropdown-item" href="#">Reporte de Puesto por empleado</a>
                                <a class="dropdown-item" href="#">Reporte de Inventario por empleado</a>
                                <a class="dropdown-item" href="#">Reporte de Inventario por material</a>
                                <a class="dropdown-item" href="#">Reporte de Tarea por projecto</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main class="bg-primary text-white">