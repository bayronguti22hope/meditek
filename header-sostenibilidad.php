<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo get_the_title(); ?></title>

    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- STYLE -->
    <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet"> -->

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom Styles & Mobile -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">
    <link rel="script" href="<?php echo get_stylesheet_directory_uri(); ?>/js/animate.js">
    <!-- Special files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body class="text-center">



    <!-- HEADER -->
    <header id="monster" class="row header sostenibilidad_header" style="background-image: url('<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/BANNER-SOSTENIBILIDAD.jpg');
">
      <div class="animated fadeInDown delay-2s hideme">
        <div class="opacity-main">

          <!--Navbar (desktop) -->
          <div class="row desk_top_menu">


              <div class="col-2">
                <!-- <a href="#home" class="active logo_desktop"></a>  -->
                  <img class="logo_desktop" src="<?php echo get_site_url();?>/wp-content/uploads/2019/05/LOGO-MEDITEK-BLANCO.svg" height="50px" width="100%">
              </div>

              <div class="col-10 nav_bar_desktop">
              <div class="col-12 d-flex justify-content-xl-center">


                      <?php echo menu(); ?>

                </div><!--row -->


              </div>




          </div> <!-- desk_top_menu -->



      </div> <!-- opacity -->

<!--Text for main slider (desktop) -->
        <div class="container">
          <div class="row main_text_desktop" data-aos="fade-right" data-aos-offset="200" data-aos-delay="10" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="">
              <div class="contact_header_text" style="padding-left:16px">
                <h3>SOSTENIBILIDAD</h3>
                <!-- <h5>MEDITEK</h5> -->



              </div>

            </div>

          </div>

        </div>








      <div class="row">

        <div class="col-12">

        <!--Rows for Logos -->
        <div class="row">
            <div class="col-12">


            <!-- Simulate a smartphone / tablet -->
            <div class="mobile-container">

            <!-- Top Navigation Menu -->
            <div class="topnav">
              <!-- <a href="#home" class="active">
                </a> -->
                <img class="img-fluid logo_main" src="<?php echo get_site_url(); ?>
/wp-content/uploads/2019/05/LOGO-MEDITEK-BLANCO.svg" height="100%" width="100%">


              <div id="myLinks">
                <a  class="nav-link"href="<?php echo get_site_url();?>">INICIO</a>
                <a class="nav-link" href="<?php echo get_site_url();?>/acerca-de/">ACERCA DE MEDITEK</a>
                <a class="nav-link" href="<?php echo get_site_url();?>/productos/">NUESTROS PRODUCTOS</a>
                <a class="nav-link" href="<?php echo get_site_url();?>/aprenda-con-nosotros/">APRENDA CON NOSOTROS</a>
                <a class="nav-link" href="<?php echo get_site_url();?>/casos-de-exito/">CASOS DE ÊXITO</a>
                <a class="nav-link" href="<?php echo get_site_url();?>/sostenibilidad/">SOSTENIBILIDAD</a>
                <a  class="nav-link" href="<?php echo get_site_url();?>/contacto/">CONTACTO</a>

              </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>

            <div class="" style="padding-left:16px">
              <!-- main_header_text -->
              <h3 class="sostenibilidad_mobile_title">SOSTENIBILIDAD</h3>
              <!-- <h5>MEDITEK</h5> -->
            <!-- <a href="#" class="btn-main-slider">Más Información</a> -->
            </div>

            <!-- End smartphone / tablet look -->
            </div>

                        <script>
                        function myFunction() {
                          var x = document.getElementById("myLinks");
                          if (x.style.display === "block") {
                            x.style.display = "none";
                          } else {
                            x.style.display = "block";
                          }
                        }
                        </script>
              </div>




            </div>
        </div>

    </div> <!-- menu row -->
  </div>

    </header>
