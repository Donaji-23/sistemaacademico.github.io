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
            <a class="nav-link d-flex align-items-center px-3" href="">
              <i class="bi bi-folder me-1"></i> Eventos
            </a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center px-3" href="Material_didactico.php">
              <i class="bi bi-book me-1"></i> Material
            </a>
          </li>
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

  <!-- Carrusel de imágenes -->
  <section class="hero-section mb-5 main-content">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <!-- Slides del carrusel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/image/carrucel/jorge 1.jpg" class="d-block w-100" alt="Imagen de portada principal"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption">
            <h5 class="fw-bold">Bienvenido a la escuela Jorge L. Tamayo</h5>
            <p class="lead">Conoce mis proyectos y habilidades profesionales</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/image/carrucel/jorge 2.jpg" class="d-block w-100" alt="Imagen de portada principal"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption">
            <h5 class="fw-bold">Ofertas Educativas</h5>
            <p class="lead">Habilidades profesionales</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/image/carrucel/jorge 3.jpg" class="d-block w-100" alt="Imagen de portada principal"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption">
            <h5 class="fw-bold">Ambiente profesional</h5>
            <p class="lead">Conoce mis proyectos</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/image/carrucel/jorge 4.jpg" class="d-block w-100" alt="Imagen de portada principal"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption">
            <h5 class="fw-bold">Somos tu Mejor Opción</h5>
            <p class="lead">Únete a Nuestra gran Familia</p>
          </div>
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>


  <main class="container-custom main-content">
    <section class="mb-5">

      <!-- Segmento de Libros -->
      <div class="row mt-5">
        <div class="container">
          <h2 class="fw-bold text-center mb-4">Material <span style="color: brown;">Didactico</span></h2>
          <div class="filter-buttons text-center mb-4">
            <button class="active" data-filter="1">Primero</button>
            <button data-filter="2">Segundo</button>
            <button data-filter="3">Tercero</button>
            <button data-filter="4">Cuarto</button>
            <button data-filter="5">Quinto</button>
            <button data-filter="6">Sexto</button>
          </div>
          <div class="row" id="book-section">
            <!-- Libros de Primero -->
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/1.png" class="card-img-top" alt="Múltiples Lenguajes">
                <div class="card-body">
                  <h5 class="card-title text-center">Múltiples Lenguajes</h5>
                  <p class="card-text" style="text-align: justify;">Cada página está llena de textos, cuentos, infografías y
                    actividades que despiertan la imaginación y el amor por el aprendizaje, invitando a los niños a explorar
                    y comprender la riqueza cultural de su entorno y más allá.</p>
                  <center>
                    <a href="public/pdf/primero/Múltiples Lenguajes 1.pdf" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/2.png" class="card-img-top" alt="Proyectos de Aula">
                <div class="card-body">
                  <h5 class="card-title text-center">Proyectos de Aula</h5>
                  <p class="card-text" style="text-align: justify;">Cada proyecto es un viaje que desafía a los niños y
                    niñas a abrazar el aprendizaje de una manera divertida y significativa, promoviendo su participación
                    como ciudadanos activos y conscientes.</p>
                  <center>
                    <a href="public/pdf/primero/Proyectos de Aula.pdf" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/3.png" class="card-img-top" alt="Proyectos Comunitarios">
                <div class="card-body">
                  <h5 class="card-title text-center">Proyectos Comunitarios</h5>
                  <p class="card-text" style="text-align: justify;">Cada proyecto desafía a los estudiantes a involucrarse
                    activamente en su aprendizaje y en su comunidad, promoviendo la ciudadanía activa y la conciencia
                    social.</p>
                  <center>
                    <a href="public/pdf/primero/Proyectos Comunitarios.pdf" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/4.png" class="card-img-top" alt="Proyectos Escolares">
                <div class="card-body">
                  <h5 class="card-title text-center">Proyectos Escolares</h5>
                  <p class="card-text" style="text-align: justify;">Cada proyecto está diseñado para fomentar la
                    participación activa, tanto a nivel personal como colectivo, enriqueciendo la experiencia educativa y
                    social de los alumnos.</p>
                  <center>
                    <a href="public/pdf/primero/Proyectos Escolares.pdf" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/5.png" class="card-img-top" alt="Nuestros Saberes">
                <div class="card-body">
                  <h5 class="card-title text-center">Nuestros Saberes</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de primero 5.</p>
                  <center>
                    <a href="https://libros.conaliteg.gob.mx/2024/P1SDA.htm" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/6.png" class="card-img-top" alt="Libro de Primero 6">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Primero 6</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de primero 6.</p>
                  <center>
                    <a href="javascript:void(0)" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/7.png" class="card-img-top" alt="Libro de Primero 7">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Primero 7</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de primero 7.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/libros/primero/8.png" class="card-img-top" alt="Libro de Primero 8">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Primero 8</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de primero 8.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>

            <!-- Libros de Segundo -->
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 1">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 1</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 1.</p>
                  <center>
                    <a href="https://libros.conaliteg.gob.mx/2024/P3MLA.htm" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 2">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 2</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 2.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 3">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 3</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 3.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 4">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 4</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 4.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 5">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 5</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 5.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="2">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Segundo 6">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Segundo 6</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de segundo 6.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>

            <!-- Libros de Tercero -->
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 1">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 1</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 1.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 2">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 2</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 2.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 3">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 3</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 3.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 4">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 4</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 4.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 5">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 5</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 5.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="3">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Tercero 6">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Tercero 6</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de tercero 6.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>

            <!-- Libros de Cuarto -->
            <div class="col-md-3 zoomp" data-grade="4">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Cuarto 1">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Cuarto 1</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de cuarto 1.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="4">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Cuarto 2">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Cuarto 2</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de cuarto 2.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>

            <!-- Libros de Quinto -->
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 1">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 1</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 1.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 2">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 2</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 2.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 3">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 3</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 3.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 4">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 4</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 4.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 5">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 5</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 5.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 6">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 6</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 6.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="5">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Quinto 7">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Quinto 7</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de quinto 7.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>

            <!-- Libros de Sexto -->
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 1">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 1</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 1.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 2">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 2</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 2.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 3">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 3</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 3.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 4">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 4</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 4.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 5">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 5</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 5.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 6">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 6</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 6.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="6">
              <div class="card">
                <img src="public/image/Librosp.jpg" class="card-img-top" alt="Libro de Sexto 7">
                <div class="card-body">
                  <h5 class="card-title text-center">Libro de Sexto 7</h5>
                  <p class="card-text" style="text-align: justify;">Descripción del libro de sexto 7.</p>
                  <center>
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libro
                    </a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SISTEMAS DE GUIAS DE ESTUDIO DESCARGA -->
      <section id="Material">
        <div class="container">
          <h3 style="text-align: center;">Material <span style="color: rgba(245, 16, 16, 0.868);">de Apoyo</span></h3> <br><br>
          <div class="row bg-primary">
            <h4 style="text-align: center;"><span style="color: rgb(255, 255, 255);">Guías de Estudio</span></h4>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Primer Grado</span></h6><br>
            <img src="public/image/G.Libros/Guia 1.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
            <a href="public/download/Guia 1.pdf" download="">
              <div style="text-align: center;">
                <button class="btn btn-success" type="button">Descargar</button>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Segundo Grado</span></h6><br>
            <img src="public/image/G.Libros/Guia 2.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
            <a href="public/download/Guia 2.pdf" download="">
              <center>
                <button class="btn btn-success" type="button">Descargar</button>
              </center>
            </a>
          </div>
          <div class="col-md-4">
            <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Tercer Grado</span></h6><br>
            <img src="public/image/G.Libros/Guia 3.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
            <a href="public/download/Guia 3.pdf" download="">
              <center>
                <button class="btn btn-success" type="button">Descargar</button>
              </center>
            </a>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Cuarto Grado</span></h6><br>
              <img src="public/image/G.Libros/Guia 4.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
              <a href="public/download/Guia 4.pdf" download="">
                <center>
                  <button class="btn btn-success" type="button">Descargar</button>
                </center>
              </a>
            </div>
            <div class="col-md-4">
              <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Quinto Grado</span></h6><br>
              <img src="public/image/G.Libros/Guia 5.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
              <a href="public/download/Guia 5.pdf" download="">
                <center>
                  <button class="btn btn-success" type="button">Descargar</button>
                </center>
              </a>
            </div>
            <div class="col-md-4">
              <h6 style="text-align: center;"><span style="color: rgb(32, 20, 99);">Guías de Estudio Sexto Grado</span></h6><br>
              <img src="public/image/G.Libros/Guia 6.png" class="ima-fluid rounded-circle" width="80%" height="350px" alt="Guía de Estudio Primer Grado">
              <a href="public/download/Guia 6.pdf" download="">
                <center>
                  <button class="btn btn-success" type="button">Descargar</button>
                </center>
              </a>
            </div>
          </div>
        </div>
      </section> <br><br>
      <header>
        <center>
          <h1>compemetos</h1>
        </center>


      </header>

      <section class="gallery">
        <a href="https://profemonica.com/matematicas/" target="_blank">
          <img src="https://profemonica.com/wp-content/uploads/2024/05/PLANTILLAS-MATEMATICAS-1920-x-800-px.jpg" alt="Imagen 1">
        </a>
        <a href="https://profemonica.com/lengua-castellana/" target="_blank">
          <img src="https://profemonica.com/wp-content/uploads/2024/05/ESPANOL-1920-x-800-px.jpg" alt="Imagen 2">
        </a>
        <a href="https://profemonica.com/ciencias-sociales/" target="_blank">
          <img src="https://profemonica.com/wp-content/uploads/2024/05/PLANTILLAS-MATEMATICAS-1920-x-800-px-1.jpg" alt="Imagen 3">
        </a>
        <!-- Añade más imágenes según sea necesario -->
      </section>
      <section class="gallery">
        <a href="https://profemonica.com/ciencias-naturales/" target="_blank">
          <img src="https://profemonica.com/wp-content/uploads/2024/05/PLANTILLAS-MATEMATICAS-1920-x-800-px-2.jpg" alt="Imagen 1">
        </a>
        <a></a>
        <a href="https://profemonica.com/etica-y-valores/" target="_blank">
          <img src="https://profemonica.com/wp-content/uploads/2024/05/PLANTILLAS-MATEMATICAS-1920-x-800-px-4.jpg" alt="Imagen 3">
        </a>

        <!-- Añade más imágenes según sea necesario -->
      </section>


      <!-- Pie de página -->
      <footer class="bg-gradient text-light py-4 mt-5 ">
        <div class="container-fluid ">
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
                <a href="https://www.facebook.com/profile.php?id=100084810804196" class="text-light"><i
                    class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/chan_fle23/" class="text-light"><i class="bi bi-instagram"></i></a>
                <a href="javascript:void(0)" class="text-light"><i class="bi bi-linkedin"></i></a>
                <a href="javascript:void(0)" class="text-light"><i class="bi bi-github"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <h5>Enlaces Rápidos</h5>
              <ul class="list-unstyled">
                <li><a href="index1.php" class="text-light text-decoration-none">Inicio</a></li>
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

      <!-- Iconos flotantes -->
      <div class="floating-icons">
        <a href="https://wa.me/9541410063" target="_blank" class="whatsapp">
          <i class="bi bi-whatsapp"></i>
        </a>
        <a href="https://t.me/coffy23" target="_blank" class="telegram">
          <i class="bi bi-telegram"></i>
        </a>
        <a href="https://www.facebook.com/TU_PAGINA_DE_FACEBOOK" target="_blank" class="facebook">
          <i class="bi bi-facebook"></i>
        </a>
      </div>

      <!-- Scripts necesarios -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

      <!-- JavaScript personalizado -->
      <script src="public/js/main.js"></script>

      <!-- JavaScript para filtrar libros por grado -->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const filterButtons = document.querySelectorAll('.filter-buttons button');
          const bookCards = document.querySelectorAll('#book-section .col-md-3');

          // Inicializar el filtro al cargar la página
          const initialFilter = '1';
          filterBooks(initialFilter);

          filterButtons.forEach(button => {
            button.addEventListener('click', function() {
              const filter = this.getAttribute('data-filter');

              filterButtons.forEach(btn => btn.classList.remove('active'));
              this.classList.add('active');

              filterBooks(filter);
            });
          });

          function filterBooks(filter) {
            bookCards.forEach(card => {
              if (filter === 'all' || card.getAttribute('data-grade') === filter) {
                card.style.display = 'block';
              } else {
                card.style.display = 'none';
              }
            });
          }
        });
      </script>

      <!-- Inicialización de componentes de Bootstrap -->
      <script>
        // Activar tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // Activar popovers
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
      </script>
</body>

</html>