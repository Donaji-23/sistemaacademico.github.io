<?php
// PHP logic can be added here if needed
?>
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
  <h1 class="text-center mb-4">Eventos Académicos 🌟</h1>
  <p class="lead text-center">
    ¡Ven y únete a nuestra comunidad escolar para:<br>
    - Aprender y descubrir nuevas cosas 📚<br>
    - Celebrar nuestras tradiciones y cultura 🎉<br>
    - Conocer nuevos amigos y profesores 👫👨‍🏫<br>
    - Divertirte y pasar un buen rato 🎈<br>
    <strong class="fw-bold">¡No te pierdas la oportunidad de unirte a nosotros y ser parte de nuestra comunidad escolar!</strong>
  </p>
      <!-- Sección de   50 Aniversario -->
    <div class="row mt-5">
      <div class="col-md-6">
        <h2><i class="bi bi-bullseye me-2"></i>"50 Aniversario"🎂</h2>
        <p style="text-align: justify;">Niños y niñas, padres y madres de familia, colectivo docente y administrativo, público en general disfrutando el recorrido del parque Hidalgo hasta las instalaciones de nuestra escuela.
        Imágenes y postales que quedarán guardadas en la memoria de todos los que asistimos a este evento 📸.</p>


        <!-- GALERÍA -->
<section id="galeria">
  <!-- 1era fila de imágenes -->
  <div class="row">
    <div class="col-md-4 zoomp">
      <img src="public/image/eventos/50 ani.jpg" height="300px" width="300%" alt="50 Aniversario Primaria Jorge L Tamayo" data-bs-toggle="modal" data-bs-target="#imageModal">
      <br><br>
    </div>

    <!-- Modal con Carrusel -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel">50 Aniversario Primaria Jorge L Tamayo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body">
           <!-- Carrusel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/image/eventos/50 ani1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
    </div>
    <div class="carousel-item">
      <img src="public/image/eventos/50 ani2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="public/image/eventos/50 ani3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 3">
    </div>
    <div class="carousel-item">
      <img src="public/image/eventos/50 ani4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 4">
    </div>
    <div class="carousel-item">
      <img src="public/image/eventos/50 ani5.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 5">
    </div>
  </div>
              <!-- Controles del Carrusel -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
              </button>
            </div>
            <!-- Descripción del Evento -->
            <p class="mt-3 text-center">Escuela Primaria Urbana Federal "ING. JORGE L. TAMAYO". 50 ANIVERSARIO 🥳 Muchas felicidades al colectivo Escolar. Alumnos y padres de familia. Egresados, ex Directivos, Maestros, supervisores y Autoridades que estuvieron presentes en el evento. ¡SOY TAMAYO!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Sección de Eventos deportivos de Atletismo -->
  </div>
      <div class="col-md-6">
      <h2><i class="bi bi-gear me-2"></i>"Eventos deportivos de Atletismo" 🏃‍♂️🏃‍♀️</h2>
      <p style="text-align: justify;">Destacada participación de nuestros jóvenes estudiantes en los Eventos deportivos de atletismo etapa supervisión num. 50.
De la cual, se obtuvieron las siguientes posiciones:
</p>
<ul style="list-style: none; padding-left: 0;">
  <li>🥇 1er lugar - 150 m. Varonil</li>
  <li>🥇 1er lugar - 300 m. Varonil</li>
  <li>🥇 1er lugar - 300 m. Femenil</li>
  <li>🥇 1er lugar - 600 m. Femenil</li>
</ul>
 <!-- GALERÍA -->
 <section id="galeria">
    <div class="row">
      <div class="col-md-4 zoomp">
        <img src="public/image/eventos/atle.jpg" height="350px" width="300%" 
             alt="Eventos deportivos de Atletismo" data-bs-toggle="modal" data-bs-target="#modalAtletismo">
        <br><br>
      </div>

      <!-- Modal con Carrusel -->
      <div class="modal fade" id="modalAtletismo" tabindex="-1" aria-labelledby="modalAtletismoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAtletismoLabel">Eventos deportivos de Atletismo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Carrusel -->
              <div id="carouselAtletismo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/image/eventos/atle1.jpg" class="d-block mx-auto" style="width: 40%; height: auto;"  alt="Imagen 1">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/atle2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/atle3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 3">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/atle4.jpg"class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 4">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/atle5.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 5">
                  </div>
                </div>
                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAtletismo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAtletismo" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
              <!-- Descripción del Evento -->
              <p class="mt-3 text-center">
                Nos sentimos orgullosos de ustedes porque con su esfuerzo han dejado muy en alto el nombre de nuestra institución.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<!--  -->
<!-- Sección de  Destacada participación de nuestra institución en el "Concurso de escoltas" -->
      <div class="row mt-5">
      <div class="col-md-6">
        <h2><i class="bi bi-bullseye me-2"></i>"Concurso de escoltas"🥇</h2>
        <p style="text-align: justify;">Todo el reconocimiento para las participantes por el esfuerzo y la gallardía mostrada en las ejecuciones, a los padres de familia por su apoyo, a los profesores de educación física y a los que acompañaron a nuestra escolta en este evento.</p>


        <!-- GALERÍA -->
<section id="galeria">
  <!-- 1era fila de imágenes -->
  <div class="row">
    <div class="col-md-4 zoomp">
      <img src="public/image/eventos/escol.jpg" height="300px" width="300%" alt="Concurso de escoltas" data-bs-toggle="modal" data-bs-target="#modalEscolta">
      <br><br>
    </div>

   <!-- Modal con Carrusel -->
<div class="modal fade" id="modalEscolta" tabindex="-1" aria-labelledby="modalEscoltaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEscoltaLabel">Concurso de escoltas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel -->
        <div id="carouselEscolta" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="public/image/eventos/escol1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/escol2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/escol3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/escol4.jpg" class="d-block mx-auto" style="width: 30%; height: auto;" alt="Imagen 4">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/escol5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 5">
            </div>
          </div>
          <!-- Controles del Carrusel -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselEscolta" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselEscolta" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <p class="mt-3 text-center">Nos vamos con la satisfacción de que se hizo el esfuerzo para alcanzar la meta, y que la hermandad entre las diferentes escuelas se refrenda en este tipo de eventos.</p>
      </div>
    </div>
  </div>
</div>
</div>



 <!-- Sección de Eventos club de danza  -->
  </div>
      <div class="col-md-6">
      <h2><i class="bi bi-gear me-2"></i>"Club de danza"💃🕺</h2>
      <p style="text-align: justify;">Participación del club de danza y alumnos de nuestra institución, en la presentación de los cuadros de baile "Veracruz" y danzón.</p>
      
 <!-- GALERÍA -->
 <section id="galeria">
    <div class="row">
      <div class="col-md-4 zoomp">
        <img src="public/image/eventos/danza.jpg" height="300px" width="300%" 
             alt="Club de danza" data-bs-toggle="modal" data-bs-target="#modaldanza">
        <br><br>
      </div>

      <!-- Modal con Carrusel -->
      <div class="modal fade" id="modaldanza" tabindex="-1" aria-labelledby="modaldanzaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modaldanzaLabel">Club de danza</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Carrusel -->
              <div id="carouseldanza" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/image/eventos/danza1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/danza2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/danza3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/danza4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 4">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/danza5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 5">
                  </div>
                </div>
                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouseldanza" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouseldanza" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
              <!-- Descripción del Evento -->
              <p class="mt-3 text-center">
              En la presentación de los cuadros de baile "Veracruz" y danzón.
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

   <!--  -->
    <!--  -->
<!-- Sección de "El orgullo de ser mexicano"-->
<div class="row mt-5">
      <div class="col-md-6">
        <h2><i class="bi bi-bullseye me-2"></i>"El orgullo de ser mexicano"🌮🌶</h2>
        <p style="text-align: justify;">Las profesoras de primer y segundo grado iniciaron el 2 de septiembre un hermoso proyecto titulado "El orgullo de ser mexicano". Para lo cual, el día de hoy se comenzó con la presentación de los trabajos realizados en cada grupo.
        Padres, docentes y alumnos en conjunto, por un bien común.</p>


        <!-- GALERÍA -->
<section id="galeria">
  <!-- 1era fila de imágenes -->
  <div class="row">
    <div class="col-md-4 zoomp">
      <img src="public/image/eventos/mexi.jpg" height="300px" width="300%" alt="El orgullo de ser mexicano" data-bs-toggle="modal" data-bs-target="#modalorgullo">
      <br><br>
    </div>

   <!-- Modal con Carrusel -->
<div class="modal fade" id="modalorgullo" tabindex="-1" aria-labelledby="modalorgulloLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalorgulloLabel">El orgullo de ser mexicano</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel -->
        <div id="carouselorgullo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="public/image/eventos/mexi1.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/mexi2.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/mexi3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/mexi4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 4">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/mexi5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 5">
            </div>
          </div>
          <!-- Controles del Carrusel -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselorgullo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselorgullo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <p class="mt-3 text-center">Los Tamayitos de primer grado, trabajaron con las regiones de nuestro estado. 
        Y los segundos grados trabajaron la riqueza cultural de los estados de la república mexicana.</p>
      </div>
    </div>
  </div>
</div>
</div>




 <!-- Sección de Eventos Día Internacional de las Naciones Unidas. -->
  </div>
      <div class="col-md-6">
      <h2><i class="bi bi-gear me-2"></i>"Día Internacional de las Naciones Unidas"</h2>
      <p style="text-align: justify;">Participación de 3er. Grado celebrando el  Día Internacional de las Naciones Unidas.
      El objetivo de la ONU es mantener la paz y la seguridad internacional, fomentar las relaciones de amistad entre las naciones,
       y promover el progreso social, los Derechos Humanos y el nivel de vida. </p>
      
 <!-- GALERÍA -->
 <section id="galeria">
    <div class="row">
      <div class="col-md-4 zoomp">
        <img src="public/image/eventos/nacion.jpg" height="350px" width="300%" 
             alt="Día Internacional de las Naciones Unidas." data-bs-toggle="modal" data-bs-target="#modalnacion">
        <br><br>
      </div>

      <!-- Modal con Carrusel -->
      <div class="modal fade" id="modalnacion" tabindex="-1" aria-labelledby="modalnacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalnacionLabel">Día Internacional de las Naciones Unidas.</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Carrusel -->
              <div id="carouselnacion" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/image/eventos/nacion1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/nacion2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/nacion3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/nacion4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 4">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/nacion5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 5">
                  </div>
                </div>
                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselnacion" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselnacion" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
              <!-- Descripción del Evento -->
              <p class="mt-3 text-center">
              "Soluciones para erradicar la pobreza, impulsar el desarrollo sostenible y defender a los más vulnerables". ONU
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<!--  -->
<!--  -->
<!--  -->
<!-- Sección de El Día de Muertos -->
<div class="row mt-5">
      <div class="col-md-6">
        <h2><i class="bi bi-bullseye me-2"></i>"El Día de Muertos"🧟‍♀️🥖</h2>
        <p style="text-align: justify;">En la visión indígena implica el retorno transitorio de las ánimas de los difuntos, quienes regresan a casa, al mundo de los vivos, para convivir con los familiares y
           también para nutrirse de la esencia del alimento que se les ofrece en los altares puestos en su honor.</p>


        <!-- GALERÍA -->
<section id="galeria">
  <!-- 1era fila de imágenes -->
  <div class="row">
    <div class="col-md-4 zoomp">
      <img src="public/image/eventos/muerto.jpg" height="300px" width="300%" alt="El Día de Muertos" data-bs-toggle="modal" data-bs-target="#modalmuerto">
      <br><br>
    </div>

   <!-- Modal con Carrusel -->
<div class="modal fade" id="modalmuerto" tabindex="-1" aria-labelledby="modalmuertoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalmuertoLabel">El Día de Muertos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel -->
        <div id="carouselmuerto" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="public/image/eventos/muerto1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/muerto2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/muerto3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/muerto4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 4">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/muerto5.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 5">
            </div>
          </div>
          <!-- Controles del Carrusel -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselmuerto" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselmuerto" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <p class="mt-3 text-center">En nuestra Institución ya estamos de fiesta, celebrando nuestras tradiciones. Es así como nuestros grupos 3°A, 5A, 5B y 5C representaron con gran alegría, dedicación y esfuerzo estas festividades. 
          Gracias también al esfuerzo de los Padres de Familia.</p>
      </div>
    </div>
  </div>
</div>
</div>




 <!-- Sección de Eventos Navidad. -->
  </div>
      <div class="col-md-6">
      <h2><i class="bi bi-gear me-2"></i>"Navidad"🎅🎄</h2>
      <p style="text-align: justify;">Era Rodolfo un reno que tenía la nariz, roja como la grana y de un brillo singular. Todos sus compañeros se reían sin parar y nuestro buen amigo solo y triste se quedó.
      Pero Navidad llegó, Santa Claus bajó y a Rodolfo lo eligió por su singular nariz. </p>
      
 <!-- GALERÍA -->
 <section id="galeria">
    <div class="row">
      <div class="col-md-4 zoomp">
        <img src="public/image/eventos/navi.jpg" height="350px" width="300%" 
             alt="Navidad" data-bs-toggle="modal" data-bs-target="#modalnavi">
        <br><br>
      </div>

      <!-- Modal con Carrusel -->
      <div class="modal fade" id="modalnavi" tabindex="-1" aria-labelledby="modalnaviLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalnaviLabel">Navidad</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Carrusel -->
              <div id="carouselnavi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/image/eventos/navi1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/navi2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/navi3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/navi4.jpg" class="d-block mx-auto" style="width: 40%; height: auto;"  alt="Imagen 4">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/navi5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 5">
                  </div>
                </div>
                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselnavi" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselnavi" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
              <!-- Descripción del Evento -->
              <p class="mt-3 text-center">
              Ya se siente el espíritu de la navidad en nuestra escuela con la gran participación de los alumnos ✨️Muchas Felicidades✨️
              🎶 🎵 🎙 🎼🎄¡Feliz Navidad, Feliz Navidad, Próspero Año y Felicidad!🎄☃️
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!-- Sección de Eventos deportivos "-->
<div class="row mt-5">
      <div class="col-md-6">
        <h2><i class="bi bi-bullseye me-2"></i>"Eventos deportivos"🎾🏐🏃⛹️‍♀️</h2>
        <p style="text-align: justify;">Nos sentimos orgullosos de nuestros jóvenes deportistas que están poniendo muy en alto su esfuerzo y dedicación así como a nuestra institución a la cual están representando.</p>


        <!-- GALERÍA -->
<section id="galeria">
  <!-- 1era fila de imágenes -->
  <div class="row">
    <div class="col-md-4 zoomp">
      <img src="public/image/eventos/depo.jpg" height="300px" width="300%" alt="Eventos deportivos" data-bs-toggle="modal" data-bs-target="#modaldeporte">
      <br><br>
    </div>

   <!-- Modal con Carrusel -->
<div class="modal fade" id="modaldeporte" tabindex="-1" aria-labelledby="modaldeporteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaldeporteLabel">Eventos deportivos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Carrusel -->
        <div id="carouseldeporte" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="public/image/eventos/depo1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/depo2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/depo3.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 3">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/depo4.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 4">
            </div>
            <div class="carousel-item">
              <img src="public/image/eventos/depo5.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 5">
            </div>
          </div>
          <!-- Controles del Carrusel -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouseldeporte" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouseldeporte" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <p class="mt-3 text-center">Reconocemos el trabajo y labor de los profesores que están aportando de su trabajo para guiar a los jóvenes en este proceso deportivo.
        Felicidades Tamayos!!!!</p>
      </div>
    </div>
  </div>
</div>
</div>




 <!-- Sección de Eventos de la Kermés de la Primavera -->
  </div>
      <div class="col-md-6">
      <h2><i class="bi bi-gear me-2"></i>"Kermés de la Primavera"🐝🪻🌼</h2>
      <p style="text-align: justify;">Fue una jornada llena de diversión y alegría donde chicos y grandes disfrutaron de la pasarela de disfraces alusivos a la primavera, bailes, cantos, increíbles juegos como la tradicional lotería, brincolines, inflables y la emocionante tómbola. 
        Además, contamos con una deliciosa variedad de comida que deleitó a todos los asistentes. </p>
      
 <!-- GALERÍA -->
 <section id="galeria">
    <div class="row">
      <div class="col-md-4 zoomp">
        <img src="public/image/eventos/kermes.jpg" height="350px" width="300%" 
             alt="Kermés de la Primavera" data-bs-toggle="modal" data-bs-target="#modalkermes">
        <br><br>
      </div>

      <!-- Modal con Carrusel -->
      <div class="modal fade" id="modalkermes" tabindex="-1" aria-labelledby="modalkermesLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalkermesLabel">Kermés de la Primavera</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Carrusel -->
              <div id="carouselkermes" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/image/eventos/kermes1.jpg" class="d-block mx-auto" style="width: 60%; height: auto;" alt="Imagen 1">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/kermes2.jpg" class="d-block mx-auto" style="width: 60%; height: auto;"  alt="Imagen 2">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/kermes3.jpg" class="d-block mx-auto" style="width: 40%; height: auto;" alt="Imagen 3">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/kermes4.jpg" class="d-block mx-auto" style="width: 40%; height: auto;"  alt="Imagen 4">
                  </div>
                  <div class="carousel-item">
                    <img src="public/image/eventos/kermes5.jpg" class="d-block mx-auto" style="width: 40%; height: auto;"  alt="Imagen 5">
                  </div>
                </div>
                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselkermes" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselkermes" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
              <!-- Descripción del Evento -->
              <p class="mt-3 text-center">
              Queremos agradecer a todos los que formaron parte de este maravilloso evento: alumnos, padres de familia, maestros y personal de la escuela. 
              ¡Su entusiasmo y participación hicieron de esta kermés un día inolvidable!
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!-- Videos de los eventos academicos -->
<div class="divider">
            <h2> <span style="color: brown;"> Videos de los eventos académicos</span></h2>
          </div>

          <div class="row mt-5">
            <div class="container text-center">

              <h2 class="fw-bold text-center mb-4"><span style="color: brown;"></span></h2>

              <div class="row" id="book-section">



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
