<?php
require ('inc/essentials.php');
//adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador - Dashboard</title>
    <?php require ('inc/links.php'); ?>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0">Panel Admnistrador</h3>
        <a href="logout.php" class="btn btn-light btn-sk">Log Out</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">PANEL ADMINISTRADOR</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#adminDropdown" aria-content>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Habitaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="settings.php">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="mb-2">
                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f1">Facilty One</label>
                </div>
                <div class="mb-2">
                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f2">Facilty two</label>
                </div>
                <div class="mb-2">
                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f3">Facilty three</label>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size: 18px"> Huespedes</h5>
                    <div class="d-flex">
                        <div class="me-3">
                            <label class="form-label">Adultos</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div>
                            <label class="form-label"> Niños</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
        </nav>
    </div>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                ojiwjdniwncpincpewend hjednpwiejn jidsneuiws menu alemdoia kdmeoaed jeiajeow kdeiao
            </div>
        </div>
    </div>


    <?php require ('inc/scripts.php'); ?>
</body>
</html>