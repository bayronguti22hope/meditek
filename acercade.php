<?php
/* Template Name: Acerca De */?>

<?php get_header('acercade')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">






  <div class="container">


    <div class="row section_medi animated fadeInDown delay-2s hideme">

      <div class="col-12 col-lg-6 content_img_medi">
        <img class="img_top_medic" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/IMAGEN-1-NOSOTROS.jpg"  width="100%" height="auto" alt="">
      </div>

    <div class="col-12 col-lg-6">
      <div class="row">

        <div class="col-12">

          <img class="screen_img"  src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/ICONO-NOSOTROS-1.svg" width="35%"; height="auto";  alt="">

          </div>
          <div class="col-12">


            <div class="content_text_medi">
              <p class="plain_text_tek_valores">Somos una empresa con presencia regional dedicada a la distribución de dispositivos y equipos médicos que poseen una sólida propuesta de valor para el sector salud representando marcas de alto prestigio y respaldo a nivel mundial, tales como: Medtrinic General Electric (GE Healthcare), Steris, Stryker, Hill Room, Maquet, Welch Alliyn, Agfa y Baxter. </p>
              <br>
              <p class="plain_text_tek_valores">MEDITEK nace en San José, Costa Rica en 1997, fundada por talento costarricense. Su fundador Don Efrain Monge, actualmente se desempeña en la organización como Presidente de la corporación y miembro activo de la Junta Directiva. </p>
            </div>

          </div>

      </div> <!-- row -->

    </div>






    </div> <!-- ROW -->

  </div> <!-- container -->



<section class="policy_section" style="background-image: url('<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/IMAGEN-FONDO-NOSOTROS.jpg');
">


<div class="row">
  <div class="col-12 col-lg-6">

    <div class="row">
      <div class="col-12 row-about animated fadeInDown delay-2s hideme">
          <h2 class="text-policy" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">POLÍTICA DE CALIDAD</h2>
      </div>
      <div class="col-12 animated fadeInDown delay-2s hideme">
        <p class="plain_text_about" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">"Meditek brinda tecnología, servicios y soluciones integrales de alto valor agregado para el sector salud, asegurando el cumplimiento de los requisitos contractuales, legales, reglamentarios y normativos pertinentes. Está comprometida con la satisfacción del cliente así como con la mejora continua de su sistema de gestión de la calidad"</p>
      </div>
    </div>
  </div> <!-- first col-12  -->

  <div class="col-12 col-lg-6">
    <div class="row">
      <div class="col-12 row-about animated fadeInDown delay-2s hideme">
          <h2 class="text-policy" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">NUESTRA <br> MISIÓN</h2>
      </div>
      <div class="col-12" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <p class="plain_text_about">Somos uan empresa innovadora con  vision global dedicada a brindar tecnologīa servicios y soluciones para la atención de la salud aprovechando al máximo la tecnología </p>
      </div>

    </div>
  </div>  <!-- second col-12  -->

</section>




</div> <!-- row -->

<div class="row">
  <div class="col-12">

    <div class="row">
      <div class="col-12 col-lg-5 row-about" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <h2 class="text-valores" id="valores_text">NUESTROS VALORES</h2>
      </div>
      <div class="col-12 col-lg-7" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <p class="plain_text_valores">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div> <!-- first col-12  -->

</div> <!-- ROW -->



<div class="container">


<div class="row">

  <div class="col-12">
    <div class="row">

    <div class="col-12 col-lg-4 col-no-padd">
        <div class="valores_card" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <div class="img_content_card">
            <img class="card-img-top img_card_valores_01" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/ICONO-VALORES-1.svg" alt="Card image cap">
          </div>

          <div class="card-body">
            <h5 class="valores-title">Pasión</h5>
            <p class="text_valores_card">Como bien lo dice nuestro slogan "Pasión por la Vida", pasión por aportar ese granito de arena a la calidad de vida de cientos de personas en los diferentes países de la región.</p>
          </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 col-no-padd">
        <div class="valores_card" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <div class="img_content_card">
              <img class="card-img-top img_card_valores_02" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/ICONO-VALORES-2.svg" alt="Card image cap">
          </div>

          <div class="card-body body_02">
            <h5 class="valores-title">Innovación</h5>
            <p class="text_valores_card">En la forma de hacer negocios, de hacer que las cosas pasen y dar acceso a todos los interesados en nuestros productos y servicos. </p>
          </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 col-no-padd">
        <div class="valores_card" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <div class="img_content_card">
            <img class="card-img-top img_card_valores_03" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/ICONO-VALORES-3.svg" alt="Card image cap">
          </div>
          <div class="card-body body_03">
            <h5 class="valores-title">Compromiso</h5>
            <p class="text_valores_card">Con nuestros clientes, nuestros pacientes, actores y grupos de interés.</p>
          </div>
        </div>
    </div>

  </div> <!-- second row -->

  </div>

      <div class="col-12">
        <div class="row">

          <div class="col-12 col-lg-4 offset-lg-2">
              <div class="valores_card row_box_02" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
                <div class="img_content_card">
                  <img class="card-img-top img_card_valores_04" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/ICONO-VALORES-4.svg" alt="Card image cap">
                </div>

                <div class="card-body body_04">
                  <h5 class="valores-title">Transparencia</h5>
                  <p class="text_valores_card">Manteniendo una conducta ética que nos permite identificar y actuar en el marco de lo justo y lo correcto.</p>
                </div>
              </div>
          </div>


          <div class="col-12  col-lg-4">
              <div class="valores_card row_box_02" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
                <div class="img_content_card">
                  <img class="card-img-top img_card_valores_05" src="<?php echo get_home_url(); ?>/uploads/2019/05/ICONO-VALORES-5.svg" alt="Card image cap">
                </div>

                <div class="card-body body_05">
                  <h5 class="valores-title">Responsabilidad</h5>
                  <p class="text_valores_card">En cada una de nuestras accciones, que nos permita enaltecer nuestros éxitos ya sumir con compromiso nuestras oportunidad de mejora, todo en un marco de aprendizaje y mejoramiento continuo.</p>
                </div>
              </div>
          </div>
        </div><!-- row -->

      </div>


    </div>
</div><!-- container -->



    <div class="row row-about">
      <div class="col-12">

        <div class="row" data-aos="fade-right" data-aos-offset="200" data-aos-delay="1" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <div class="col-12 col-lg-7 row-about animated fadeInDown delay-2s hideme">
              <h2 class="text-valores">CERTIFICACIONES</h2>
          </div>
          <div class="col-12 col-lg-5 animated fadeInDown delay-2s hideme container_img_certification">
            <img class="img_certification" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/LOGO-CERTIFICACION-NOSOTROS.jpg" width="50%"; height="auto"; alt="">
          </div>
        </div>
      </div> <!-- first col-12  -->

    </div> <!-- ROW -->








  </div>






<?php get_footer()?>
