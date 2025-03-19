<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sitio web personal de Jorge L. Tamayo">

  <meta property="og:title" content="Jorge L. Tamayo">
  <meta property="og:description" content="Sitio web personal de Jorge L. Tamayo">
  <meta property="og:image" content="public/image/logo/jorge1.png">
  <meta property="og:url" content="https://jorgelamayo.com">
  <link rel="icon" type="image/x-icon" href="public/image/logo/jorge1.png">
  <title>Jorge L. Tamayo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="public/css/styles.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="public/image/logo/jorge1.png" alt="Logo de Jorge L. Tamayo" width="60" height="60" class="me-3">
        <span class="fw-bold">Jorge L. Tamayo</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active d-flex align-items-center px-3" aria-current="page" href="index.php">
              <i class="bi bi-house-door me-1"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center px-3" href="Inclusión_Educativa.php">
              <i class="bi bi-briefcase me-1"></i> Inclusión Educativa
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center px-3" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-book me-1"></i> Talleres
            </a>
            <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="ingles.php">Inglés</a></li>
              <li><a class="dropdown-item" href="computacion.php">Computación</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="artistica.php">Artística</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center px-3" href="eventos.php">
              <i class="bi bi-folder me-1"></i> Eventos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center px-3" href="Material_didactico.php">
              <i class="bi bi-book me-1"></i> Material
            </a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="¿Qué deseas buscar?" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">
              <i class="bi bi-search"></i> Buscar
            </button>
          </div>
        </form>
      </div>
    </div>
  </nav>


  <!-- Contenido principal -->
  <main class="container py-5">
    <!-- Sección de introducción acerca de -->
    <section class="mb-5">
      <div class="row align-items-center" id="acerca de">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4"> Música - <span style="color: brown;">Educación Primaria</span></h2>
          <p class="lead" style="text-align:justify"></p>
          <p style="text-align: justify;">

            El área de Música en la educación primaria está diseñada para desarrollar en los niños
            la apreciación musical, la creatividad, la expresión artística y habilidades cognitivas
            y motrices. A través de actividades lúdicas e interactivas, los estudiantes exploran el
            mundo del sonido, el ritmo y la melodía.</p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <center>
            <img src="public/gif/acerca.gif" width="50%" alt="Imagen de búsqueda">
          </center>
        </div>
      </div>

      <div class="divider">
        <h2> <span style="color: brown;">Videos</span></h2>
      </div>


      <div class="container mt-5">
        <h2 class="fw-bold text-center mb-4"><span style="color: brown;"></span></h2>

        <div class="row justify-content-center">
          <!-- Video 1 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/V9IdJMFVGf8" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 2 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/OVUH2WlXIVw" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 3 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/0GrfoQ3eTXI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 4 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/ocLzXED7nBY" allowfullscreen></iframe>
            </div>
          </div>
          <!-- Video 5 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Fqqe0N--Q9Q" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 6 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/DWVfgbmjJlo" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 7 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Ieuxuvo3wF0" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 8 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/aWAEaBDSjOs" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 9 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/4qqQnsGb_Bo" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 10 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Vx9YihLfR2Q" allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </div>


      <!--Icono de regresar y siguiente-->

      <div class="d-flex justify-content-between mt-3">
        <!-- Botón de regresar -->
        <a href="tarte.php" class="btn btn-outline-primary">
          <i class="bi bi-arrow-left-circle"></i> Regresar
        </a>

        <!-- Botón de avanzar -->
        <a href="danza.php" class="btn btn-outline-success">
          Siguiente <i class="bi bi-arrow-right-circle"></i>
        </a>
      </div>







      <!-- Pie de página -->
      <footer class="bg-gradient text-light py-4 mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <center><img src="public/image/logo/jorge1.png" width="200" height="200" class="me-2"></center>
            </div>
            <div class="col-md-3">
              <h5><b>Jorge L. Tamayo</b></h5>
              <p>Portfolio profesional y sitio personal</p>
              <p>
                <a href="mailto:contacto@jorgelamayo.com" class="text-light text-decoration-none">
                  <i class="bi bi-envelope-fill me-2"></i>contacto@jorgelamayo.com
                </a>
              </p>
              <h5>Sígueme</h5>
              <div class="d-flex gap-3 fs-4">
                <a href="https://www.facebook.com/profile.php?id=100084810804196" class="text-light"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/chan_fle23/" class="text-light"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-light"><i class="bi bi-github"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <h5>Enlaces Rápidos</h5>
              <ul class="list-unstyled">
                <li><a href="index.php" class="text-light text-decoration-none">Inicio</a></li>
                <li><a href="portfolio.html" class="text-light text-decoration-none">Portafolio</a></li>
                <li><a href="proyectos.html" class="text-light text-decoration-none">Proyectos</a></li>
                <li><a href="contacto.html" class="text-light text-decoration-none">Contacto</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="list-unstyled">
                <li><a href="#acerca de" class="text-light text-decoration-none">acerca de</a></li>
                <li><a href="#galeria" class="text-light text-decoration-none">Galeria</a></li>
                <li><a href="#testimonios" class="text-light text-decoration-none">Testimonios</a></li>
                <li><a href="#UBICACION" class="text-light text-decoration-none">Ubicacion</a></li>
                <li><a href="#CONTACTANOS" class="text-light text-decoration-none">Contactanos</a></li>
                <li><a href="#Material" class="text-light text-decoration-none">Material de guia</a></li>
              </ul>
            </div>
          </div>
          <hr class="my-3">
          <div class="text-center">
            <p class="mb-0">&copy; 2025 Jorge L. Tamayo. Todos los derechos reservados.</p>
          </div>
        </div>
      </footer>

      <!-- Scripts necesarios -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="public/js/main.js"></script>
</body>

</html>