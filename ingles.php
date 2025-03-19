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
  <!-- Contenido principal -->
  <main class="container py-5">
    <!-- Sección de introducción acerca de -->
    <section class="mb-5">
      <div class="row align-items-center" id="acerca de">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4"> Inglés - <span style="color: brown;">Educación Primaria</span></h2>
          <p class="lead" style="text-align:justify"></p>
          <p style="text-align: justify;">

            La materia de Inglés en educación primaria tiene como objetivo introducir a los estudiantes en el aprendizaje del idioma de manera dinámica y divertida. A través de actividades interactivas, canciones, juegos y ejercicios prácticos, los niños desarrollan habilidades básicas en comprensión auditiva, expresión oral, lectura y escritura.

            Durante el curso, los alumnos aprenden vocabulario fundamental, estructuras gramaticales sencillas y frases comunes que les permiten comunicarse en situaciones cotidianas. Además, se fomenta la confianza para expresarse en inglés, promoviendo el aprendizaje a través de la participación activa y el trabajo en equipo.

            Este curso sienta las bases para un aprendizaje continuo del idioma, fortaleciendo la comprensión cultural y la importancia del inglés como una herramienta de comunicación global..</p>
        </div>


        <div class="row mt-6">
          <div class="col-md-4">
            <h1 style="text-align: center;">Colores</h1>
            <table class="table">
              <tr>
                <th>Icono</th>
                <th>Inglés</th>
                <th>Español</th>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: red;"></div>
                </td>
                <td>red</td>
                <td>rojo</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: purple;"></div>
                </td>
                <td>purple</td>
                <td>morado</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: white;"></div>
                </td>
                <td>white</td>
                <td>blanco</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: pink;"></div>
                </td>
                <td>pink</td>
                <td>rosa</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: brown;"></div>
                </td>
                <td>brown</td>
                <td>café</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: gray;"></div>
                </td>
                <td>gray</td>
                <td>gris</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: black;"></div>
                </td>
                <td>black</td>
                <td>negro</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: orange;"></div>
                </td>
                <td>orange</td>
                <td>naranja</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: yellow;"></div>
                </td>
                <td>yellow</td>
                <td>amarillo</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: green;"></div>
                </td>
                <td>green</td>
                <td>verde</td>
              </tr>
              <tr>
                <td>
                  <div class="color-box" style="background-color: blue;"></div>
                </td>
                <td>blue</td>
                <td>azul</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <h1 style="text-align: center;">Números</h1>
            <table class="table">
              <tr>
                <th>Número</th>
                <th>Inglés</th>
              </tr>
              <tr>
                <td>1</td>
                <td>one</td>
              </tr>
              <tr>
                <td>2</td>
                <td>two</td>
              </tr>
              <tr>
                <td>3</td>
                <td>three</td>
              </tr>
              <tr>
                <td>4</td>
                <td>four</td>
              </tr>
              <tr>
                <td>5</td>
                <td>five</td>
              </tr>
              <tr>
                <td>6</td>
                <td>six</td>
              </tr>
              <tr>
                <td>7</td>
                <td>seven</td>
              </tr>
              <tr>
                <td>8</td>
                <td>eight</td>
              </tr>
              <tr>
                <td>9</td>
                <td>nine</td>
              </tr>
              <tr>
                <td>10</td>
                <td>ten</td>
              </tr>
              <tr>
                <td>11</td>
                <td>eleven</td>
              </tr>
              <tr>
                <td>12</td>
                <td>twelve</td>
              </tr>
              <tr>
                <td>13</td>
                <td>thirteen</td>
              </tr>
              <tr>
                <td>14</td>
                <td>fourteen</td>
              </tr>
              <tr>
                <td>15</td>
                <td>fifteen</td>
              </tr>
              <tr>
                <td>16</td>
                <td>sixteen</td>
              </tr>
              <tr>
                <td>17</td>
                <td>seventeen</td>
              </tr>
              <tr>
                <td>18</td>
                <td>eighteen</td>
              </tr>
              <tr>
                <td>19</td>
                <td>nineteen</td>
              </tr>
              <tr>
                <td>20</td>
                <td>twenty</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <h1 style="text-align: center;">English Alphabet</h1>
            <table class="table">
              <tr>
                <th>Letter</th>
                <th>Pronunciation</th>
              </tr>
              <tr>
                <td>A</td>
                <td>/eɪ/</td>
              </tr>
              <tr>
                <td>B</td>
                <td>/biː/</td>
              </tr>
              <tr>
                <td>C</td>
                <td>/siː/</td>
              </tr>
              <tr>
                <td>D</td>
                <td>/diː/</td>
              </tr>
              <tr>
                <td>E</td>
                <td>/iː/</td>
              </tr>
              <tr>
                <td>F</td>
                <td>/ɛf/</td>
              </tr>
              <tr>
                <td>G</td>
                <td>/ʤiː/</td>
              </tr>
              <tr>
                <td>H</td>
                <td>/eɪʧ/</td>
              </tr>
              <tr>
                <td>I</td>
                <td>/aɪ/</td>
              </tr>
              <tr>
                <td>J</td>
                <td>/ʤeɪ/</td>
              </tr>
              <tr>
                <td>K</td>
                <td>/keɪ/</td>
              </tr>
              <tr>
                <td>L</td>
                <td>/ɛl/</td>
              </tr>
              <tr>
                <td>M</td>
                <td>/ɛm/</td>
              </tr>
              <tr>
                <td>N</td>
                <td>/ɛn/</td>
              </tr>
              <tr>
                <td>O</td>
                <td>/oʊ/</td>
              </tr>
              <tr>
                <td>P</td>
                <td>/piː/</td>
              </tr>
              <tr>
                <td>Q</td>
                <td>/kjuː/</td>
              </tr>
              <tr>
                <td>R</td>
                <td>/ɑː/</td>
              </tr>
              <tr>
                <td>S</td>
                <td>/ɛs/</td>
              </tr>
              <tr>
                <td>T</td>
                <td>/tiː/</td>
              </tr>
              <tr>
                <td>U</td>
                <td>/juː/</td>
              </tr>
              <tr>
                <td>V</td>
                <td>/viː/</td>
              </tr>
              <tr>
                <td>W</td>
                <td>/ˈdʌbəljuː/</td>
              </tr>
              <tr>
                <td>X</td>
                <td>/ɛks/</td>
              </tr>
              <tr>
                <td>Y</td>
                <td>/waɪ/</td>
              </tr>
              <tr>
                <td>Z</td>
                <td>/zɛd/</td>
              </tr>
            </table>
          </div>
        </div>

        <!--GALERIA-->
        <section id="galeria">
          <div class="container">
            <h3 style="text-align: center;">Gale<span style="color: rgba(245, 16, 16, 0.868);">ría</span></h3> <br><br>
            <!--1era fila de imagenes-->
            <div class="row">
              <div class="col-md-4 zoomp">
                <img src="public/image/taller/ingles1.jpg" height="240px" width="90%"
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
                <img src="public/image/taller/ingles2.jpg" height="240px" width="90%"
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
                <img src="public/image/taller/ingles3.jpg" height="240px" width="90%"
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
                      <img src="public/image/taller/ingles4.jpg" width="100%" alt="Cuadros Representativos de la Escuela Primaria">
                      <p class="mt-3">Esto es un mural de los cuadros de la primaria Jorge L Tamayo.</p>
                    </div>
                  </div>
                </div>
              </div>




              <div class="col-md-4 zoomp">
                <img src="public/image/taller/ingles4.jpg" height="240px" width="90%"
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
                      <img src="public/image/taller/ingles5.jpg" width="100%" alt="Deporte Escolar">
                      <p class="mt-3">Esta es una imagen de niños jugando su deporte en educacion fisica.</p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-4 zoomp">
                <img src="public/image/taller/ingles5.jpg" height="240px" width="90%"
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
                <img src="public/image/taller/ingles6.jpg" height="240px" width="90%"
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
                        <img src="public/image/taller/ingles6.jpg" width="100%" alt="Jardin de la Escuela">
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
            <h2> <span style="color: brown;">Grados</span></h2>
          </div>

          <div class="row mt-5">
            <div class="container text-center">

              <h2 class="fw-bold text-center mb-4"><span style="color: brown;"></span></h2>

              <div class="row" id="book-section">
                <!-- Libros de Primero -->
                <div class="col-md-4 zoomp" data-grade="1">
                  <h4 class="text-center fw-bold">Primer grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/1.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"> </p>
                      <center>
                        <a href="pg.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>
                <br><br><br>
                <!-- Libros de segundo -->
                <div class="col-md-4 zoomp" data-grade="1">
                  <h4 class="text-center fw-bold">Segundo grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/2.jpg" class="card-img-top" alt="Proyectos de Aula" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"> </p>
                      <center>
                        <a href="sg.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>
                <br><br><br>
                <!-- Libros de Tercero -->
                <div class="col-md-4 zoomp" data-grade="0">
                  <h4 class="text-center fw-bold">Tercer grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/3.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"></p>
                      <center>
                        <a href="tg.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>

                <!-- Libros de Cuarto -->
                <div class="col-md-4 zoomp" data-grade="0">
                  <h4 class="text-center fw-bold">Cuarto grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/4.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"></p>
                      <center>
                        <a href="cg.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>

                <!-- Libros de Quinto-->
                <div class="col-md-4 zoomp" data-grade="1">
                  <h4 class="text-center fw-bold">Quinto grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/5.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"> </p>
                      <center>
                        <a href="qg.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>
                <br><br><br>
                <!-- Libros de sexto-->
                <div class="col-md-4 zoomp" data-grade="1">
                  <h4 class="text-center fw-bold">Sexto grado</h4>
                  <div class="card">
                    <img src="public/image/numeros/6.jpg" class="card-img-top" alt="Múltiples Lenguajes" height="50%">
                    <div class="card-body">
                      <h5 class="card-title text-center"></h5>
                      <p class="card-text" style="text-align: justify;"> </p>
                      <center>
                        <a href="sextog.php" class="btn btn-primary">
                          <i class="bi bi-book"></i> Ver más
                        </a>
                      </center>
                    </div>
                  </div>
                </div>
                <br><br><br>
              </div>
            </div>
          </div>


          <h2 class="text-center mb-4">Juegos educativos</h2>
          <section class="gallery">

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