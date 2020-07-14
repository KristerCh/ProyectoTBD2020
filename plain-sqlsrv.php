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
          <li><a href="#sqlserver">SQL Server</a></li>
          <li><a href="#mysql">MySql</a></li>

          <li class="get-started"><a href="#services">Empezar!</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 
  <main id="main">   

    <!-- ======= SQL Server Section ======= -->
    <section id="sqlserver" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>SQL Server</h2>
          <p>Crear data en SQL Server</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box" >
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="" data-toggle="modal" data-target="#desingModal">Modo Diseño</a></h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="" data-toggle="modal" data-target="#queryModal">Sentencia SQL</a></h3>
            </div>
          </div>

        </div>

      </div>
    </section> <!-- End SQL Server Section -->

    <!-- ======= Modal SQL Server Query Section ======= -->
    <section id="modalSQLServerquery">
      <div class="container">

          <!-- Modal -->
        <div class="modal fade" id="queryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sentencia SQL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Query:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!--End Modal SQL Server -->

      </div>
    </section><!-- End Modal Query Section -->

    <!-- ======= Modal SQL Server Diseño Section ======= -->
    <section id="modalSQLServerdesing">
      <div class="container">

          <!-- Modal -->
        <div class="modal fade" id="desingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Atributos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Editable table -->
                <div class="card">
                  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">atributos de la Tabla:</h3>
                  <div class="card-body">
                    <div id="table" class="table-editable">
                      <span class="table-add float-right mb-3 mr-6"><a href="#!" class="text-success"><i
                            class="bx bxs-plus-square" aria-hidden="true"></i></a></span>
                      <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                          <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Tamaño</th>
                            <th class="text-center">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="pt-3-half" contenteditable="true">Id</td>
                            <td class="pt-3-half" contenteditable="true">int</td>
                            <td class="pt-3-half" contenteditable="true">10</td>
                            <td>
                              <span class="table-remove"><button type="button"
                                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                            </td>
                          </tr>
                          <!-- This is our clonable table line -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- Editable table -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!--End Modal SQL Server -->

      </div>
    </section><!-- End Modal Diseño Section -->

     <!-- ======= Tablas Section ======= -->
     <section id="tablas" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tablas</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

              <h5>SQL Server</h5>
            <table class="table table-sm table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Alumnos</td>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

              <h5>MySQL</h5>
            <table class="table table-sm table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Alumnos</td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>

      </div>
    </section><!-- End Tablas Section -->

   

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
            <a href="#mysql">MySQl</a>
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