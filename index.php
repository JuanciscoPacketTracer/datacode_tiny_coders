<?php
session_start();
require_once 'src/includes/header.php';
?>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #9C2C53;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="src/img/logo.png" alt="DATACODE" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Talleres</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Opción 1</a></li>
                        <li><a class="dropdown-item" href="#">Opción 2</a></li>
                        <li><a class="dropdown-item" href="#">Opción 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Torneos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Opción 1</a></li>
                        <li><a class="dropdown-item" href="#">Opción 2</a></li>
                        <li><a class="dropdown-item" href="#">Opción 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Hackathon</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Opción 1</a></li>
                        <li><a class="dropdown-item" href="#">Opción 2</a></li>
                        <li><a class="dropdown-item" href="#">Opción 3</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Login como dropdown, dentro del navbar -->
            <div class="dropdown login-dropdown">
    <button class="btn login-icon-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle"></i>
    </button>

    <div class="dropdown-menu dropdown-menu-end login-panel-pop p-3">

        <?php if (isset($_SESSION['usuario_id'])): ?>
            <!-- USUARIO LOGUEADO -->
            <div class="text-center mb-3">
                <i class="bi bi-person-circle" style="font-size: 3rem; color:#9C2C53;"></i>
                <h6 class="mb-0 mt-1"><?= htmlspecialchars($_SESSION['nombre']) ?></h6>
            </div>
            <a href="perfil.php" class="dropdown-item"><i class="bi bi-person me-2"></i>Ver perfil</a>
            <a href="cambiar-foto.php" class="dropdown-item"><i class="bi bi-camera me-2"></i>Cambiar foto de perfil</a>
            <hr>
            <button id="btnLogout" class="btn btn-outline-danger btn-sm w-100">
                <i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión
            </button>

        <?php else: ?>
            <!-- SIN SESIÓN -->
            <h6 class="mb-3"><i class="bi bi-person-circle me-2"></i>Iniciar sesión</h6>
            <form id="formLogin">
                <div class="mb-2">
                    <label class="form-label small mb-1">Matrícula</label>
                    <input type="text" name="matricula" maxlength="8" class="form-control form-control-sm" required>
                </div>
                <div class="mb-2">
                    <label class="form-label small mb-1">Contraseña</label>
                    <input type="password" name="password" maxlength="8" class="form-control form-control-sm" required>
                </div>
                <div id="loginError" class="text-danger small mb-2" style="display:none;"></div>
                <button type="submit" class="btn btn-login btn-sm w-100">Iniciar Sesión</button>
            </form>
        <?php endif; ?>

    </div>
</div>
        </div>
    </div>
</nav>

<!-- Carrusel de imágenes -->
<div id="carruselPrincipal" class="carousel slide" data-bs-ride="carousel">   

    <!-- Indicadores (puntitos abajo) -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carruselPrincipal" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carruselPrincipal" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carruselPrincipal" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="src/img/slide1.jpg" class="d-block w-100 carousel-img" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="src/img/slide2.jpg" class="d-block w-100 carousel-img" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="src/img/slide3.jpg" class="d-block w-100 carousel-img" alt="Slide 3">
        </div>
    </div>

    <!-- Flecha izquierda -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carruselPrincipal" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <!-- Flecha derecha -->
    <button class="carousel-control-next" type="button" data-bs-target="#carruselPrincipal" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Título grande debajo del carrusel -->
<div class="text-center py-5">
    <h1 class="titulo-principal">DATACODE 2.0</h1>
    <p class="text-muted fs-5">Actividades</p>
</div>

<?php
require_once 'src/includes/footer.php';
?>