<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Meta tags requeridos -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sitio web personal de Jorge L. Tamayo">

  <!-- Open Graph / redes sociales -->
  <meta property="og:title" content="Jorge L. Tamayo">
  <meta property="og:description" content="Sitio web personal de Jorge L. Tamayo">
  <meta property="og:image" content="public/image/logo/jorge1.png">
  <meta property="og:url" content="https://jorgelamayo.com">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/image/logo/jorge1.png">

  <!-- Título -->
  <title>Jorge L. Tamayo</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- CSS personalizado -->
  <link rel="stylesheet" href="public/css/styles.css">

</head>

<body>
  <!-- Navegación principal -->
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
      <!-- Logo y nombre -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="public/image/logo/jorge1.png" alt="Logo de Jorge L. Tamayo" width="60" height="60" class="me-3">
        <span class="fw-bold">Jorge L. Tamayo</span>
      </a>

      <!-- Botón hamburguesa para móviles -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú principal -->
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
            <a class="nav-link dropdown-toggle d-flex align-items-center px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
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
        </ul>

        <!-- Formulario de búsqueda -->
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
          <h2 class="fw-bold mb-4"> Arte - <span style="color: brown;">Educación Primaria</span></h2>
          <p class="lead" style="text-align:justify"></p>
          <p style="text-align: justify;">

            Nosotros buscamos desarrollar la creatividad, la expresión y la apreciación
            artística de los niños en alguna área que ellos prefieran para que esta enseñanza
            permita que los niños exploren sus habilidades artísticas, mejoren su coordinación
            motriz y desarrollen sensibilidad cultural.</p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <center>
            <img src="public/gif/acerca.gif" width="50%" alt="Imagen de búsqueda">
          </center>
        </div>
      </div>
      <div class="row mt-5">
        <div class="container text-center">
          <h2 class="fw-bold text-center mb-4"><span style="color: brown;">Material</span></h2>

          <div class="row" id="book-section">
            <!-- Libros de Primero -->
            <div class="col-md-4 zoomp" data-grade="1">

              <h4 class="text-center fw-bold">Música</h4>
              <div class="card">


                <img src="public/image/taller/musica.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                <div class="card-body">
                  <h5 class="card-title text-center"></h5>
                  <p class="card-text" style="text-align: justify;"> </p>
                  <center>
                    <a href="musica.php" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver más
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <!-- Libros de segundo -->
            <div class="col-md-4 zoomp" data-grade="1">
              <h4 class="text-center fw-bold">Danza</h4>
              <div class="card">
                <img src="public/image/taller/danza.jpg" class="card-img-top" alt="Proyectos de Aula" style="max-height: 416px; width: auto;">
                <div class="card-body">
                  <h5 class="card-title text-center"></h5>
                  <p class="card-text" style="text-align: justify;"> </p>
                  <center>
                    <a href="danza.php" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver más
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <!-- Libros de Tercero-->
            <div class="col-md-4 zoomp" data-grade="1">
              <h4 class="text-center fw-bold">Dibujo</h4>
              <div class="card">
                <img src="public/image/taller/dibujo.jpg" class="card-img-top" alt="Múltiples Lenguajes" style="max-height: 416px; width: auto;">
                <div class="card-body">
                  <h5 class="card-title text-center"></h5>
                  <p class="card-text" style="text-align: justify;"> </p>
                  <center>
                    <a href="dibujo.php" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver más
                    </a>
                  </center>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>










      <!-- Juego Educativo -->
      <div class="row mt-5">
        <div class="col-md-12">
          <h2><i class="bi bi-controller me-2"></i>Juego Educativo</h2>
          <p>Aprende sobre inclusión educativa de una manera divertida con nuestro juego interactivo.</p>
          <iframe src="URL_DEL_JUEGO" width="100%" height="500px"></iframe>
        </div>
      </div>
    </section>

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