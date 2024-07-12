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
     
     
     <div  class="content-wrapper" >
  
        <section class="content-header" style="margin-left: 20px;">

            <?php
                                  
                  include("carruselfotos.php");
            ?>

            <div><br></div>


            <p>
            Construyendo y remodelando cocinas empotradas            
            </p>
            <p>
            Remodelación Cocinas Modernas <br>
            Transformamos cocinas antiguas en espacios modernos y funcionales con nuestro servicio de remodelación.
            </p>

            <p>
            Servicios Personalizados Diseño <br>
            Ofrecemos servicios personalizados de diseño para crear la cocina empotrada de sus sueños.
            </p>

            <p>
            Experiencia familiar en construcción <br>
                Somos una pequeña empresa familiar especializada en la construcción y remodelación de cocinas empotradas. Con más de 20 años de experiencia, nos dedicamos a crear diseños personalizados y funcionales para nuestros clientes.
            </p>

            <p>
            Diseños personalizados y funcionales <br>
              Nuestro objetivo es crear espacios únicos y prácticos que se adapten a las necesidades de cada cliente. Trabajamos con materiales de alta calidad y ofrecemos un servicio personalizado para garantizar la satisfacción de nuestros clientes.
            </p>

            <p class="text-center" style="font-size: xx-large;">

                <b>Somos una empresa que mejora y mantiene tus instalaciones en estado óptimo
            
            </p>

            <p class="text-center" style="font-size: xx-large; color:#845630; font-family:Georgia, 'Times New Roman', Times, serif">
              <b>En general cualquier persona que requiera soluciones en construcción, remodelación, mantenimiento y servicios generales en sus inmuebles encontrara aquí la solución.          
            </p>

        </section>

        <!-- boton subir -->

            <a id="back-to-top" href="#" class="btn btn-warning back-to-top" role="button" aria-label="Scroll to top">
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
