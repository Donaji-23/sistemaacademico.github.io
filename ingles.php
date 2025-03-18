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
  <section class="container my-5">
    <h1 class="text-center mb-4">Inclusión Educativa</h1>
    <p class="lead text-center">
      La inclusión educativa es fundamental para garantizar que todos los estudiantes tengan las mismas oportunidades de aprendizaje y desarrollo.
    </p>

    <div class="row mt-5">
      <div class="col-md-6">
        </div>
      <div class="col-md-6">
        </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-6">
       </div>
      <div class="col-md-6">
      </div>
    </div>

    


    <section class="gallery">
      <h2 class="text-center mb-4">Juegos educativos</h2>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="https://www.mundoprimaria.com/juegos-educativos/juegos-de-ingles/1er-ciclo-spelling" target="_blank">
            <img src="https://www.mundoprimaria.com/wp-content/uploads/2020/06/01-primero.png" alt="Imagen 1" class="img-thumbnail" style="width: 150px; height: auto;">
        </a>
        <a href="https://www.mundoprimaria.com/juegos-educativos/juegos-de-ingles/2do-ciclo-spelling" target="_blank">
            <img src="https://www.mundoprimaria.com/wp-content/uploads/2020/06/02-segundo.png" alt="Imagen 2" class="img-thumbnail" style="width: 150px; height: auto;">
        </a>
        <a href="https://www.mundoprimaria.com/juegos-educativos/juegos-de-ingles/3er-ciclo-spelling" target="_blank">
            <img src="https://www.mundoprimaria.com/wp-content/uploads/2020/06/03-tercero.png" alt="Imagen 3" class="img-thumbnail" style="width: 150px; height: auto;">
        </a>
        <!-- Añade más imágenes según sea necesario -->
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
