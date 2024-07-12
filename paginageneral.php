<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cocina Empotrada</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- ionicons -->
  <script  type = "module" src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
  <script  nomodule  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/a53abdfd93.js" crossorigin="anonymous"></script> 

</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    <!-- Navbar -->
    
    <?php
      include('navegacion.php');
    ?>

    <!-- fin Navbar-->

    <div class="content-wrapper">
  
        <section class="content-header" style="margin-left: 20px;">
 
       </section>

        <!-- boton subir -->

            <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>

        <!-- fin  boton-->

    </div>
  
    <!-- Footer -->

      <?php
        include('footer.php');
      ?>
      
    <!-- fin Footer -->

</div>

 
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
 
</body>
</html>
