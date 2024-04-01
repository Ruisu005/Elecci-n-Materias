<?php

session_start();

if (!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor debes iniciar sesion");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir Materias</title>

    <link rel="shortcut icon" href="images/materia-logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estiloMaterias.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav_crystalline">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Materias</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" data-bs-toggle="modal" data-bs-target="#selectedSubjectsModal" onclick="showSelectedSubjects()">Mis Materias</a></li>
                    <li class="nav-item"><a class="nav-link" href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="button">
                        <a class="nav-link" href="php/cerrar_sesion.php">Cerrar Sesion</a>
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <header class="py-5 header">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bienvenido</h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $usuario; ?></p>
                </div>
            </div>
        </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="subjectsContainer">
                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/metematicas.png" alt="Metematicas" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Metematicas</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Metematicas', 'assets/images/metematicas.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/fisica.png" alt="Fisica" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Fisica</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Fisica', 'assets/images/fisica.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/español.png" alt="Español" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Español</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Español', 'assets/images/español.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/ingles.png" alt="Ingles" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Ingles</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Ingles', 'assets/images/ingles.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/informatica.png" alt="Informatica" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Informatica</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Informatica', 'assets/images/informatica.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 bg">
                        <!-- Imagen de Materia-->
                        <img class="card-img-top img-fluid" src="assets/images/biologia.png" alt="Biologia" />
                        <!--  Detalles de Materia-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre Materia-->
                                <h5 class="fw-bolder">Biologia</h5>
                            </div>
                        </div>
                        <!-- Accion de Materia-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button class="btn btn-outline-dark mt-auto" onclick="addSubject('Biologia', 'assets/images/biologia.png')">Añadir Materia</button></div>
                        </div>
                    </div>
                </div>
                <!-- Agregar más productos aquí -->
            </div>
        </div>
    </section>

    <!-- Modal para mostrar las materias seleccionadas -->
    <div class="modal fade" id="selectedSubjectsModal" tabindex="-1" aria-labelledby="selectedSubjectsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="selectedSubjectsModalLabel">Mis Materias</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="selectedSubjectsList" class="list-group">
                        <!-- Lista de materias seleccionadas -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script src="assets/js/materias.js"></script>
</body>
</html>
