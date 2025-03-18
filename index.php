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
            <a class="nav-link active d-flex align-items-center px-3" aria-current="page" href="index1.php">
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

  <!-- Contenido principal -->
  <main class="container-custom main-content">
    <!-- Sección de introducción acerca de -->
    <section class="mb-5">
      <div class="row align-items-center" id="acerca de">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4">Acerca de <span style="color: brown;">Nosotros</span></h2>
          <p class="lead" style="text-align:justify">LA EDUCACIÓN ES EL MEDIO FUNDAMENTAL DE LAS SOCIEDADES PARA
            CONSERVAR, TRANSMITIR Y TRANSFORMAR LA CULTURA Y LA VIDA DE LOS INDIVIDUOS.</p>
          <p style="text-align: justify;">En este sentido se constituye en el soporte para el desarrollo de las
            humanidades, la ciencia y la tecnología, actividades sustantivas para el avance y el progreso de las
            naciones.</p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <center>
            <img src="public/gif/acerca.gif" width="50%" alt="Imagen de búsqueda">
          </center>
        </div>
      </div>
      <!-- Segmento de Libros -->
      <div class="row mt-5">
        <div class="container">
          <h2 class="fw-bold text-center mb-4">Segmento de <span style="color: brown;">Libros</span></h2>

          <div class="row" id="book-section">
            <!-- Libros de Primero -->
            <div class="col-md-3 zoomp" data-grade="1"></div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/numeros/1.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="0%">
                <div class="card-body">
                  <h5 class="card-title text-center">libros de primer grado</h5>
                  <p class="card-text" style="text-align: justify;"> </p>
                  <center>
                    <a href="g_libros.php" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libros
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3 zoomp" data-grade="1">
              <div class="card">
                <img src="public/image/G.Libros/Guia 1.png" class="card-img-top" alt="Proyectos de Aula" height="50%">
                <div class="card-body">
                  <h5 class="card-title text-center">libros de segundo grado</h5>
                  <p class="card-text" style="text-align: justify;"> </p>
                  <center>
                    <a href="g_libros.php" class="btn btn-primary">
                      <i class="bi bi-book"></i> Ver libros
                    </a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!--GALERIA-->
      <section id="galeria">
        <div class="container">
          <h3 style="text-align: center;">Gale<span style="color: rgba(245, 16, 16, 0.868);">ría</span></h3> <br><br>
          <!--1era fila de imagenes-->
          <div class="row">
            <div class="col-md-4 zoomp">
              <img src="public/image/gale/galeria1.jpg" height="240px" width="90%"
                alt="Parte de exterior de la escuela primaria Jorge L Tamayo" data-bs-toggle="modal" data-bs-target="#image1"> <br><br>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="image1" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h5 class="modal-title" id="imageModalLabel">Parte exterior de la escuela Primaria Jorge L Tamayo</h5>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="public/image/gale/galeria1.jpg" width="100%" alt="Parte de exterior de la escuela primaria Jorge L Tamayo">
                    <p class="mt-3">En esta imagen se muestra la escuela Primaria Jorge L Tamayo lo cual luce hermosa por fuera.</p>
                  </div>
                </div>
              </div>
            </div>

            <!--2da imagen-->

            <div class="col-md-8 zoomp">
              <img src="public/image/gale/galeria2.jpg" height="350px" width="100%"
                alt="Cuadros Representativos de la Escuela Primaria" data-bs-toggle="modal" data-bs-target="#image2"> <br><br>
            </div>
          </div> <br><br>

          <!-- Modal -->
          <div class="modal fade" id="image2" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <center>
                    <h5 class="modal-title" id="imageModalLabel">Escuela Primaria</h5>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body text-center">
                  <img src="public/image/gale/galeria2.jpg" width="100%" alt="Cuadros Representativos de la Escuela Primaria">
                  <p class="mt-3">Esta es una escuela primaria muy sostificada y enorme lo cual se ve hermosa y su placa de
                    50 años de aniversario muy bonito por cierto.</p>
                </div>
              </div>
            </div>
          </div>





          <!--2era fila de imagenes-->
          <div class="row">
            <div class="col-md-4 zoomp">
              <img src="public/image/gale/galeria3.jpg" height="240px" width="90%"
                alt="Cuadros Representativos de la Escuela Primaria" data-bs-toggle="modal" data-bs-target="#image3"> <br><br>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="image3" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h5 class="modal-title" id="imageModalLabel">Cuadros Representativos de la Escuela Primaria</h5>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="public/image/gale/galeria3.jpg" width="100%" alt="Cuadros Representativos de la Escuela Primaria">
                    <p class="mt-3">Esto es un mural de los cuadros de la primaria Jorge L Tamayo.</p>
                  </div>
                </div>
              </div>
            </div>




            <div class="col-md-4 zoomp">
              <img src="public/image/gale/galeria4.jpg" height="240px" width="90%"
                alt="Entrada de bienvenida" data-bs-toggle="modal" data-bs-target="#image4"> <br><br>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="image4" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h5 class="modal-title" id="imageModalLabel">Deporte Escolar</h5>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="public/image/gale/galeria4.jpg" width="100%" alt="Entrada de bienvenida">
                    <p class="mt-3">Esta es una imagen de la entrada de la escuela.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4 zoomp">
              <img src="public/image/gale/galeria5.jpg" height="240px" width="90%"
                alt="Jardin de la Escuela" data-bs-toggle="modal" data-bs-target="#image5"> <br><br>
            </div>
          </div><br><br>

          <!-- Modal -->
          <div class="modal fade" id="image5" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <center>
                    <h5 class="modal-title" id="imageModalLabel">Jardin de la Ecuela</h5>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body text-center">
                  <img src="public/image/gale/galeria5.jpg" width="100%" alt="Jardin de la Escuela">
                  <p class="mt-3">Esta es una imagen de lo hermoso que se ve el jardin de la escuela.</p>
                </div>
              </div>
            </div>
          </div>




          <!--3era fila de imagenes-->
          <div class="row">
            <div class="col-md-8 zoomp">
              <img src="public/image/gale/galeria6.jpg" height="240px" width="90%"
                alt="Grupos de Alumnos" data-bs-toggle="modal" data-bs-target="#image6"> <br><br>

              <!-- Modal -->
              <div class="modal fade" id="image6" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center>
                        <h5 class="modal-title" id="imageModalLabel">Grupos de Alumnos</h5>
                      </center>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="public/image/gale/galeria6.jpg" width="100%" alt="Grupos de Alumnos">
                      <p class="mt-3">Esta es una imagen de un Grupos de Alumnos participando en eventos.</p>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            <div class="col-md-4 zoomp">
              <img src="public/image/gale/galeria7.jpg" height="240px" width="90%"
                alt="Niños Jugando Deporte-Futbol" data-bs-toggle="modal" data-bs-target="#image7"> <br><br>

              <!-- Modal -->
              <div class="modal fade" id="image7" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center>
                        <h5 class="modal-title" id="imageModalLabel">Niños Jugando Deporte-Futbol</h5>
                      </center>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="public/image/gale/galeria7.jpg" width="100%" alt="Niños Jugando Deporte-Futbol">
                      <p class="mt-3">Esta es una imagen niños participando en un encuentro de futbol varonil.
                      </p>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div> <br><br>
        </div>
      </section> <br><br><!-- agregamos salto de linea -->
      <!-- Testimonios -->
      <section class="mb-5" id="Testimonios">
        <div class="containe">
          <h2 class="fw-bold text-center mb-4">Comentarios de <span style="color: brown;">los usuarios</span></h2>
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/adult-trieng-acheve-work-personal-life.jpg" class="card-img-top"
                          alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/father-son-playing-together-fathers-day.jpg" class="card-img-top"
                          alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/medium-shot-happy-father-child.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-caleboquendo-3030090.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-emma-bauso-1183828-2253879.jpg" class="card-img-top"
                          alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-gustavo-fring-4148842.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-ingo-1694649.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-olly-3820203.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 zoomp">
                      <div class="card">
                        <img src="public/image/padres/pexels-panditwiguna-1128317.jpg" class="card-img-top" alt="..."
                          style="object-fit: cover; width: 100%; height: 200px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Familia Alberto</h5>
                          <p class="card-text" style="text-align: justify;">Some quick example text to build on the card
                            title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- UBICACION -->
      <section id="UBICACION">
        <div class="container">
          <h3 style="text-align: center;">Encuentranos<span style="color: rgba(245, 16, 16, 0.868);">Aquí</span></h3>
          <br><br>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3792.678626374932!2d-96.11512787666189!3d18.086426382295215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c3e6fd8d4207a5%3A0x129303eceb8473b8!2sPrimeria%20Ingeniero%20Jorge%20L%20Tamayo!5e0!3m2!1ses-419!2smx!4v1740752701687!5m2!1ses-419!2smx"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
        </div>
      </section> <br><br>

      <!-- CONTACTANOS -->
      <section class="contactos" id="contactanos">
        <div class="container">
          <h3 style="text-align: center;">Contá<span style="color: rgba(245, 16, 16, 0.868);">ctanos</span></h3> <br><br>
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <center><b>Escribenos</b></center>
                </div>
                <div class="card-body">
                  <form action="enviar_correo.php" method="POST">
                    <div class="form-group">
                      <label for="nombre"><b>Nombre:</b></label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe aquí tu nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="correo"><b>Correo Electrónico:</b></label>
                      <input type="email" class="form-control" id="correo" name="correo" placeholder="Escribe aquí tu correo" required>
                    </div>
                    <div class="form-group">
                      <label for="mensaje"><b>Mensaje:</b></label>
                      <textarea name="mensaje" cols="30" rows="3" class="form-control" id="mensaje" required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                      <button class="btn btn-outline-primary" type="submit">Enviar</button>
                      <button class="btn btn-outline-danger" type="reset">Cancelar</button>
                    </div>
                  </form>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </section>



      <!-- Pie de página -->
      <footer class="bg-gradient text-light py-4 mt-5 ">
        <div class="container ">
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
              <div class="d-flex align-items-center fs-4">
                <a href="tel:+529541410063" class="text-light">
                  <i class="bi bi-whatsapp"></i>
                </a>
                <span class="text-light ms-2">+529541410063</span>
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
        <a href="https://www.facebook.com/profile.php?id=100084810804196" target="_blank" class="facebook">
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