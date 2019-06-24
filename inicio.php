<?php
/* Template Name: Inicio */?>

<?php get_header()?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>


<!-- Slider or Video Area -->

<?php  ?>

<?php echo "bayron
"; ?>

    <?php

$image = get_field('logo_meditek_01');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>

<div id="myheadVideo monster" class="youtube-responsive-container wow fadeInLeft delay-2s">
    <div class="overlay"></div> <!-- overlay -->
        <iframe class="videoYou" width="100%" height="800" src="<?php the_field('video_background'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen muted="muted" loop="loop" controls="0" iv_load_policy="3" modestbranding rel="0"></iframe>
     <div class="container h-100" id="encabezado_main">
              <!--  <h1 class="display-3 text-right-Head">Soluciones en <br> la Nube</h1>
                <h3 class="text-right-sub-head"> Para gestion de estudios médicos. <br> Almacene, distribuya y reporte.</h3>
    -->    </div>
     </div>
</div>



<!--Section for the plans -->
<div class="row">

    <div class="col-lg-12 col-lg-10 plans_section wow fadeInLeft delay-2s">
        <h2 class="display-3 plans-text">Planes</h2>
    </div>
 </div>
<div class="my-box-01 fadeInDown delay-4s">
  <a href="<?php echo get_home_url(); ?>/wp-content/uploads/2019/04/TABLA-1200x850.png" data-fancybox data-caption="Nuestros Planes">
  	<img class="img-responsive fancybox-01" src="<?php echo get_home_url(); ?>/uploads/2019/04/TABLA-1200x850.png" width="450px" height="auto" alt="" />
  </a>
</div>



    <div id="monster" class="container cont-img ">

    <?php
    $image = get_field('table_info');

        if( !empty($image) ): ?>

            <img class="img-responsive img-fluid" id="img-plans" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

    </div>




<div class="container wow fadeInLeft delay-2s">
<!-- Formulario -->
    <div class="col-12 col-md-6">
       <h5><?php echo get_field('test-form', 2); ?></h5>
       <?php echo do_shortcode( get_field('test-form', 2) ); ?>
   </div>
   <!-- *** -->
</div>

    <div class="special-padd">
</div>



        <section class="form-sectio wow fadeInLeft delay-2s">
            <div role="form" class="wpcf7 hideme" id="wpcf7-f142-p148-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                </div>
                    <form action="/Meditek/index.php/test-form/?preview_id=148&amp;preview_nonce=bc0b518dbc&amp;preview=true#wpcf7-f142-p148-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="142">
                                <input type="hidden" name="_wpcf7_version" value="5.1.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f142-p148-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="148">
                                <input type="hidden" name="g-recaptcha-response" value="">
                         </div>

                                        <h3 class="text-center title-form">Más información</h3>
                                <div class="container monster hideme">

                                    <div class="row">

                                    <div class="col-2">
                                            </div>

                                        <div class="col-md-4 col-12 righty-col-form">

                                        <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="50" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre Completo*"></span></p>
                                        </div>


                                        <div class="col-md-4 col-12 lefty-col-for">

                                        <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="50" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address*"></span></p>
                                        </div>
                                        <div class="col-2">
                                            </div>

                                    </div>  <!--closed the first row here -->


                                    <div class="row">
                                        <div class="col-md-2 col-0">
                                            </div>

                                           <div class="col-md-4 col-12 righty-col-form">
                                         <div id="myDrop" class="mydown">

                                            <select class="UnicDrop">
                                              <option><p>Tipo de Plan*</p></option>
                                                <option>Basic</option>
                                                <option>Silver</option>
                                                <option>Gold</option>
                                                 <option>Platinum</option>
                                              </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4 col-12 lefty-col-for">

                                        <p><span class="wpcf7-form-control-wrap your-name"><input type="tel" name="your-name" value="" size="50" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Número de teléfono*"></span></p>

                                        </div>

                                        <div class="col-md-2 col-0">
                                            </div>
                                     </div> <!--closed the second row here -->


                                     <div class="row">
                                            <div class="col-2">
                                            </div>

                                         <div class="col-md-8 col-12 big_text_area">
                                                <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="120" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Observaciones"></textarea></span></p>
                                         </div>

                                         <div class="col-2">
                                        </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-lg-5 col-md-4">
                                            </div>

                                            <div class="col-lg-2 col-md-4 btn-form">
                                                    <p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" id="submmitmy_form"><span class="ajax-loader"></span></p>
                                                        <div class="wpcf7-response-output wpcf7-display-none">
                                            </div>

                                            <div class="col-lg-5 col-md-4">
                                            </div>
                                        </div>

                                    </div> <!-- Row for observaciones close here-->
                                </div>


                                    </div>
                            </div>
                        </form>
                    </div>
        </section>





<div class="row wow fadeInDown delay-5s" id="about">
    <div class="col-lg-6 col-md-6 col-12">

            <?php

        $image = get_field('optmice_icon');

        if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

        <h2 class="display-5" id="about-title">Optimice su<br> presupuesto.</h2>
        <p class="normal-text-about">Realice los pagos solamente por las<br> estudios realizados, asi evitando <br>riesgos en su inversion.</p>


    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-12">

                <?php

            $image = get_field('mantenimiento_icono');

            if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

        <h2 class="display-5" id="about-title">Sin gasto de mantenimiento y<br> actualizaciones continuas</h2>
        <p class="normal-text-about">Al ser un servicio, MD Link se<br>encaega de que la solucion siempre<br>totalmente actualizada.</p>

    </div>

</div>






<div class="row wow fadeInDown" id="contact">

    <div class="col-xl-6 col-lg-6 col-md-6 col-12" id="mytext-side">
        <p>Somos una empresa con mas de 20 años de experiencia<br> dedicada a la distribucioon de equipo u dispositivos<br> medicos, certificados en ISOO 9001-2015</p>
        <p>Manejamos una línea, área comercial en el area de la<br> salud, brindando soluciones a pacientes y centros<br> medicos con el respaldo de prestigiosas marcas a nivel<br> mundial.</p>
    </div>

    <div class="col-xl-6 col-xl-6 col-lg-6 col-md-6 col-12 img-fluid" id="myImg-side">

                <?php

            $image = get_field('side_image');

            if( !empty($image) ): ?>

                <img class="myImg-side" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

    </div>

</div>


<div class="special-padd">
</div>


<div class="MY_footer wow fadeInLeft">
<?php $image= get_field('footer_background', 106); ?>
<div class="row" id="myfooter" style="background-image: url('<?php echo $image['url']; ?>');">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <h2 class="head-title">Contacto</h2>
    </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-12 col-mobile-footer">

        <?php
            $image = get_field('phone_footer', 106);
            if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
            <div id="text-footer-message">
                <p>(506) 2549 2200</p>
            </div>

            <?php
            $image = get_field('message_footer', 106);
            if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

            <div id="text-footer-phone">
                <p>informacion@medtekla.com</p>
            </div>

        </div>

        <div class="col-2">
        <p></p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-12 col-mobile-footer">
        <h4 class="sub-title-footer">Síganos</h4>
        <?php
            $image = get_field('facebook_footer', 106);
            if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

            <p class="middle-text">@meditekservices</p>
            <div>


            <?php
            $image = get_field('youtube_footer', 106);
            if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>


            <p class="middle-text">Meditek Services</p>
            </div>


        </div>


        <div class="col-1">
        <p></p>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-12 col-mobile-footer">


        <?php
            $image = get_field('ubicacion_footer', 106);
            if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

        <p class="text-foo-location">Sabana Norte, San José,<br>Costa Rica</p>



        <?php
            $image = get_field('footer_logo', 106);
            if( !empty($image) ): ?>

        <img id="img-footer-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

        </div>

</div>
</div> <!-- here closed MY_footer -->
<?php get_footer()?>
