<?php
include "conexion.php";

session_start();
  if (!isset($_SESSION['email'])) 
  {
    echo "<script>window.location = '../forum.php';</script>";
  }

$consulta = $_GET['id'];

  $sqli="SELECT * FROM tickets WHERE id_ticket ='".$consulta."'";
  $result=mysqli_query($conectar,$sqli);
  $numero_filas = mysqli_num_rows($result);
  $filalis=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PlugMC - Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent " style="background-color: rgba(209, 0, 216, 0.397);">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">PlugMC</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="#heroCarousel">Ticket</a></li>
          <li><a href="../index.html">Home</a></li>
          <li><a href="../forum.php">Support Area</a></li>
          <li><a href="https://store.plug-mc.net/" target="_blank">Shop</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center" 
  style="background-image: url('../assets/img/background.png'); background-repeat: no-repeat; background-attachment: inherit; background-size: 100% 100%; padding-top: 100px;">
    <!-- Ticket inicio -->
    <br><br><br><br>
    <div class="forums" style="background-color: rgba(209, 0, 216, 0.397);width: 96%;border: 1px solid #dadada;">
        <center>
            <div class="card text-center">
                <div class="card-header">
                  <b><?php echo $filalis['departamento_ticket']; ?></b>
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="color: rgb(230, 1, 191);"> <b>Ticket #<?php echo $filalis['id_ticket']; ?> - <?php echo $filalis['titulo_ticket']; ?></b> </h5>
                  <p class="card-text text-dark shadow-lg p-3 mb-5 bg-white rounded">
                    <?php echo $filalis['descripcion_ticket']; ?>
                  </p>
                    <img src="../assets/img_report/<?php echo $filalis['foto_rp']; ?>" class="shadow-lg p-3 mb-5 bg-white rounded" alt="" width="60%" height="auto">
                </div>
                <div class="card-footer" style="color: rgb(230, 1, 191);">
                  <b><?php echo $filalis['fecha_ticket']; ?> by <?php echo $filalis['uname']; ?></b> 
                </div>
              </div>
        </center>
    </div>
    <!-- Final Ticket -->
  
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(210,0,216, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(210,0,216, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

  
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>PlugMC</h3>
      <p>Follow us on our social networks to find out all the events 
      and information about the server
      </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-youtube"></i></a>
        <a href="https://discord.gg/sxdje9G" class="google-plus"><i class="bx bxl-discord"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>PlugMC</span></strong>. All Rights Reserved.
        <br>
        Website designed by XmokPlay
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  </script>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>