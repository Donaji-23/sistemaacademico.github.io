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
          <h2 class="fw-bold mb-4">Computo - <span style="color: brown;">Educación Primaria</span></h2>
          <p class="lead" style="text-align:justify"></p>
          <p style="text-align: justify;">

            La computación en la educación primaria ayuda a los niños a desarrollar habilidades
            digitales esenciales para el mundo actual. A lo largo de los años, los estudiantes
            aprenden desde lo más básico hasta conceptos más avanzados.</p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <center>
            <img src="public/gif/acerca.gif" width="50%" alt="Imagen de búsqueda">
          </center>
        </div>
      </div>











      <!--GALERIA-->
      <section id="galeria">
        <div class="container">
          <h3 style="text-align: center;">Gale<span style="color: rgba(245, 16, 16, 0.868);">ría</span></h3> <br><br>
          <!--1era fila de imagenes-->
          <div class="row">
            <div class="col-md-4 zoomp">
              <img src="public/image/taller/computo1.jpg" height="240px" width="90%"
                alt="Niño sonriendo" data-bs-toggle="modal" data-bs-target="#image1"> <br><br>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="image1" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h5 class="modal-title" id="imageModalLabel">Niño Estudiando</h5>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="public/image/gale/galeria1.jpg" width="100%" alt="Niño sonriendo">
                    <p class="mt-3">Este es un niño estudiando en su escritorio muy concentrado y pendiente de lo que hace.</p>
                  </div>
                </div>
              </div>
            </div>

            <!--2da imagen-->

            <div class="col-md-8 zoomp">
              <img src="public/image/taller/computo2.jpg" height="240px" width="90%"
                alt="Escuela Primaria" data-bs-toggle="modal" data-bs-target="#image2"> <br><br>
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
                  <img src="public/image/gale/galeria2.jpg" width="100%" alt="Escuela Primaria">
                  <p class="mt-3">Esta es una escuela primaria muy sostificada y enorme lo cual se ve hermosa.</p>
                </div>
              </div>
            </div>
          </div>





          <!--2era fila de imagenes-->
          <div class="row">
            <div class="col-md-4 zoomp">
              <img src="public/image/taller/computo3.jpg" height="240px" width="90%"
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
                    <img src="public/image/taller/computo4.jpg" width="100%" alt="Cuadros Representativos de la Escuela Primaria">
                    <p class="mt-3">Esto es un mural de los cuadros de la primaria Jorge L Tamayo.</p>
                  </div>
                </div>
              </div>
            </div>




            <div class="col-md-4 zoomp">
              <img src="public/image/taller/computo4.jpg" height="240px" width="90%"
                alt="Deporte escolar" data-bs-toggle="modal" data-bs-target="#image4"> <br><br>
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
                    <img src="public/image/taller/computo5.jpg" width="100%" alt="Deporte Escolar">
                    <p class="mt-3">Esta es una imagen de niños jugando su deporte en educacion fisica.</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4 zoomp">
              <img src="public/image/taller/computo5.jpg" height="240px" width="90%"
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
                  <img src="public/image/imagen 7.jpg" width="100%" alt="Jardin de la Escuela">
                  <p class="mt-3">Esta es una imagen de lo hermoso que se ve el jardin de la escuela.</p>
                </div>
              </div>
            </div>
          </div>




          <!--3era fila de imagenes-->
          <div class="row">
            <div class="col-md-8 zoomp">
              <img src="public/image/taller/computo6.jpg" height="240px" width="90%"
                alt="Jardin de la Escuela" data-bs-toggle="modal" data-bs-target="#image5"> <br><br>

              <!-- Modal -->
              <div class="modal fade" id="image6" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center>
                        <h5 class="modal-title" id="imageModalLabel">Jardin de la Ecuela</h5>
                      </center>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="public/image/taller/computo6.jpg" width="100%" alt="Jardin de la Escuela">
                      <p class="mt-3">Esta es una imagen de lo hermoso que se ve el jardin de la escuela.</p>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            <div class="col-md-4 zoomp">
              <img src="public/image/taller/ingles7.jpg" height="240px" width="90%"
                alt="Niña en la biblioteca leyendo" data-bs-toggle="modal" data-bs-target="#image7"> <br><br>

              <!-- Modal -->
              <div class="modal fade" id="image7" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <center>
                        <h5 class="modal-title" id="imageModalLabel">Niña en la biblioteca leyendo</h5>
                      </center>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="public/image/imagen 2.jpg" width="100%" alt="Niña en la biblioteca leyendo">
                      <p class="mt-3">Esta es una imagen de una niña en una biblioteca leyendo un libro, la lectura es muy importante y primordial
                        para los alumnos y asi poder tener una logica extraordinaria.
                      </p>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div> <br><br>
        </div>

        <div class="divider">
          <h2> <span style="color: brown;">Introducción</span></h2>
        </div>


        <div class="container mt-5">
          <h2 class="fw-bold text-center mb-4"><span style="color: brown;"></span></h2>

          <div class="row justify-content-center">
            <!-- Video 1 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/ROCaMAbn_P0" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 2 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/2VO8-e5sBT4" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 3 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/X-QwVd6vZKg" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 4 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/5qyBMEsZ-0s" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 5 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/JJ1pzhjHrM4" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 6 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/eQa0NmaXKPU" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 7 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/W1F-IMOLaSA" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 8 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/hF_jfWJwD8E" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 9 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/JAcp-yyI8fc" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 10 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/WWgoZHVmnBA" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 11 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/EDJVVcNMhpk" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 12 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/ZQ8UDdpKL30" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 13 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/bw4jaUDUHP8" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 14 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Q3uIwj0bHWs" allowfullscreen></iframe>
              </div>
            </div>

          </div>
        </div>

        <!--Secccion de videos de word-->


        <div class="divider">
          <h2> <span style="color: brown;">Word</span></h2>
        </div>

        <div class="row justify-content-center">
          <!-- Video 1 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/FW-cBh4fmts" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 2 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/MSWmmHbmeRQ" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 3 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/OGPgS2MCow0" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 4 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/bOhXTbpHIXc" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 5 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/2qfRcqCPGoc" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 6 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/l81Cti1HQjU" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 7 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/RxjMrGAGMCg" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 8 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/yt8dP7XcVRs" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 9 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/37wst9wvM0Q" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 10 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/W0ioEyC59OM" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 11 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/eyDoBOp6ck4" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 12 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/NQqMprL9Slg" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 13 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/lCyDswrBJcY" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 14 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/agQyZx4CKxc" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 15 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/mUOVCd29D30" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 16 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/rt9Y-muEWwM" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 17 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/_BdPT1vuKQ8" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 18 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/hp-n-tf2lkc" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 19 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/g3sZtynQtgI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 20 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/CAP0pg-dGyM" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 21 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/x0Evn56VyfI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 22 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/D6DuN-psAFM" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 23 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/bt3l360w7qE" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 24 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/6O-beP22a6s" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 25 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/ym9TNeAlMP0" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 26 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Fu25sSPYjkA" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 27 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/FwobswxX0Q0" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 28 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/OUfyUohiR7c" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 29 
    <div class="col-md-6 mb-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/q5SxcL6w1kw" allowfullscreen></iframe>
      </div>
    </div>-->

          <!-- Video 30 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/RGyf2FtIjjI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 31 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/LphnXfWY76k" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 32 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/GMHny8OvdEY" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 33 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/89tr4jE9bxI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 34 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/0XFSOS4ziZE" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 35 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/b6Y_6k7o_uE" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 36 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/3KmIx0LotPY" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 37 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/42EGSl1ZPXQ" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 38 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/KfK8XeNbZp4" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 39 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Xjs0Xa1luEI" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 40 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/lVbbqb7ciGY" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Video 41 -->
          <div class="col-md-6 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/N-Xp6JTnTj0" allowfullscreen></iframe>
            </div>
          </div>


          <!--Secccion de videos de word-->


          <div class="divider">
            <h2> <span style="color: brown;">Excel</span></h2>
          </div>

          <div class="row justify-content-center">
            <!-- Video 1 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/aOw8PoXBi9s" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 2 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/IwhfZQ1IlC4" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 3 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/JVxVrRFP4M8" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 4 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/kU-IvYju4Mk" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 5 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/LfaVtIM-psA" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 6 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/ZBnVx9CFqnc" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 7 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/Hu50CxSuopQ" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 8 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/aXZQYASQekw" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 9 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/a_kvpzPlFJ0" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 10 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/joVtZbKapNo" allowfullscreen></iframe>
              </div>
            </div>

            <!-- Video 11 -->
            <div class="col-md-6 mb-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/dlX_m0VOtDs" allowfullscreen></iframe>
              </div>
            </div>

            <!-- 

!-- Segmento de Libros --
<div class="row mt-5">
  <div class="container text-center">
    <h2 class="fw-bold text-center mb-4"><span style="color: brown;">Dinamicas</span></h2>
   
    <div class="row" id="book-section">
      !-- Libros de Primero --
      <div class="col-md-4 zoomp" data-grade="1">
        <div class="card">
          <img src="public/image/numeros/1.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
          <div class="card-body">
            <h5 class="card-title text-center">libros de primer grado</h5>
            <p class="card-text" style="text-align: justify;"> </p>
            <center>
              <a href="g_libros.html" class="btn btn-primary">
                <i class="bi bi-book"></i> Ir al sitio
              </a>
            </center>
          </div>
        </div>
      </div>
      !-- Libros de segundo --
      <div class="col-md-4 zoomp" data-grade="1">
        <div class="card">
          <img src="public/image/numeros/2.jpg" class="card-img-top" alt="Proyectos de Aula" height="50%">
          <div class="card-body">
            <h5 class="card-title text-center">libros de segundo grado</h5>
            <p class="card-text" style="text-align: justify;"> </p>
            <center>
              <a href="g_libros.html" class="btn btn-primary">
                <i class="bi bi-book"></i> Ir al sitio
              </a>
            </center>
          </div>
        </div>
      </div>
      !-- Libros de Tercero--
      <div class="col-md-4 zoomp" data-grade="1">
        <div class="card">
          <img src="public/image/numeros/1.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
          <div class="card-body">
            <h5 class="card-title text-center">libros de primer grado</h5>
            <p class="card-text" style="text-align: justify;"> </p>
            <center>
              <a href="g_libros.html" class="btn btn-primary">
                <i class="bi bi-book"></i> Ir al sitio
              </a>
            </center>
          </div>
        </div>
      </div>
      -->
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