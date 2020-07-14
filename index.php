<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MDBS - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="assets/img/logo.png" class="img-fluid animated" alt="">&nbsp;&nbsp;<span>MDBS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Proyecto</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#tablas">Tablas</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="plain-sqlsrv.php">SQL Server</a></li>
          <li><a href="plain-mysql.php">MySql</a></li>

          <li class="get-started"><a href="#services">Empezar!</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"> Sistema de Gestión de Bases de Datos </h1>
          <h2>Implementación de un (SGBD) el que deberá importar la metadata de Microsoft SQL Server y mySQL</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#services" class="btn-get-started scrollto">Empezar!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Proyecto</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Lo utilizara para realizar las siguientes actividades:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Crear Tabla</li>
              <li><i class="ri-check-double-line"></i> Crear Relaciones</li>
              <li><i class="ri-check-double-line"></i> Ejecutar Sentencias SQL</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Los tipos de datos, las excepciones y restricciones de su manejador de base de datos serán heredados todos de la metadata 
            </p>
            <a href="#services" class="btn-learn-more">Crear!</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Servicios</h2>
          <p>Elije como empezar</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-microsoft"></i></div>
              <h4 class="title"><a href="plain-sqlsrv.php">SQL Server</a></h4>
              <p class="description">Crear Tabla en SQL Server Management Studio</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="cib-mysql"></i></div>
              <h4 class="title"><a href="#mysql">MySQL</a></h4>
              <p class="description"> Crear Tabla con propiedades MySQL </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <!-- End Services Section -->

    
    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Equipo</h2>
          <p>Creamos el Proyecto de Teoria de Base de Datos</p>
        </div>

        <div class="row  justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/bobadilla.png" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Elvin Bobadilla</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/angel.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Ángel Sevilla</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Ángel Sevilla</strong>. Todos los Derechos Reservados
          </div>
          <div class="credits">
            Diseñado por <a href="#index.html">Ángel Sevilla</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#hero" class="scrollto">Inicio</a>
            <a href="#about" class="scrollto">Proyecto</a>
            <a href="#sqlserver">SQl Server</a>
            <a href="plain-mysql.php">MySQl</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>