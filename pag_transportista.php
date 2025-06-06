<?php
    session_start();
    if (!isset($_SESSION['nit'])) {
        header("Location: iniciar_sesion.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Perfil - Transportista</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-truck me-3"></i>Transportista</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> <i class="fa fa-truck me-3"></i>-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        <a href="about.html" class="nav-item nav-link">Nosotros</a>
                        <a href="contact.html" class="nav-item nav-link">Contáctanos</a>
                        
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">¡Hola <?php echo $_SESSION['nombres']; ?>!</h1>
                    
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Estás a un paso de</h5>
                    <h1 class="mb-5">Unirte a la mejor red de transportistas agrícolas</h1>
                </div>
                
                <div class="row g-4">
                   
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <!-- Imagen reemplazando el iframe -->
                        <img src="img/camion.jpg" alt="Descripción de la imagen" class="position-relative rounded w-100 h-100" style="min-height: 350px; object-fit: cover;">
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-lg-12">
                        
                        <h1 class="mb-8">¿Que puedes hacer como Transportista?</h1>
                        <p class="mb-8">Como transportista en Ubbi App, tienes la oportunidad de 
                            conectar con productores y consumidores que necesitan trasladar sus productos
                             de manera rápida y eficiente. A través de nuestra plataforma, podrás recibir solicitudes de envío, 
                             establecer acuerdos directamente con los clientes y optimizar tus rutas para maximizar tus ganancias. 
                             Al formar parte de nuestra comunidad, te aseguras de contar con más oportunidades de trabajo y una red de 
                             usuarios que valoran un servicio confiable y seguro. 
                                </p>
                    </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <!--<h5 class="section-title ff-secondary text-start text-primary fw-normal"></h5>*/-->
                        <h1 class="text-white mb-4">Registra tu vehículo</h1>
                        <form action="guardar_vehiculo.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Placa" name="Placa" placeholder="Placa">
                                        <label for="Placa">Placa</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Cedula">
                                        <label for="Cedula">Cedula Titular</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Capacidad" name="Capacidad" placeholder="Capacidad">
                                        <label for="Capacidad">Capacidad en Kg</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Modelo" name="Modelo" placeholder="Modelo">
                                        <label for="Modelo">Modelo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Referencia" name="Referencia" placeholder="Referencia">
                                        <label for="Referencia">Referencia</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Chasis" name="Chasis" placeholder="Chasis">
                                        <label for="Chasis">Chasis</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="tipoUsuario" class="form-label" style="color: white !important;">Elige la marca de tu vehículo:</label>

                                    <select class="form-select" id="tipoUsuario" name="Marca" required>
                                        <option value="" selected disabled>Elige una opción</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Hino">Hino</option>
                                        <option value="International">International</option>
                                        <option value="JAC">JAC</option>
                                        <option value="Foton">Foton</option>
                                        <option value="Kenworth">Kenworth</option>

                                    </select>
                                </div>
                               
                                
                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Registra tu vehículo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid rounded w-500 wow zoomIn" src="img/estacas.jpeg" alt="">
                </div>  
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Ubi App</h4>
                        <a class="btn btn-link" href="">Acerca de Nosotros</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terminos y condiciones</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contáctanos</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Universidad San Buenaventura</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+57 321 3535001</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ubiapp.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Ubi App</a>, All Right Reserved. 
							
							
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>