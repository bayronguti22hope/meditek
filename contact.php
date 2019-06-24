<?php
/* Template Name: Contact */?>

<?php get_header('contacto')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">









  <div class="container">


    <div class="row section_medi_contact">

      <div class="col-lg- col-md-6 content_img_medi_contact animated fadeInDown delay-2s hideme">
        <img class="first_img_comtact" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/IMAGEN-CONTACTO-1-1.jpg"  width="100%" height="auto" alt="">
      </div>

      <div class="col-lg-6 col-md-6 section_contact_normal">

        <div class="animated fadeInDown delay-2s hideme">
            <h2 class="text-contact">ESCRÍBANOS</h2>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12 animated fadeInDown delay-2s hideme">
              <?php echo do_shortcode('[contact-form-7 id="120" title="Solicitud de Información"]'); ?>
            </div>
            <div class="col-sm-1"></div>
        </div>
      </div>



    </div> <!-- ROW -->

  </div> <!-- container -->







    <div class="row">

      <div class="col-12 col-lg-5">
        <div class="row-services" data-aos="fade-right" data-aos-offset="200" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <h2 class="text-contact_reportes">REPORTES DE AVERÍAS</h2>
        </div>
        </div>
        <div class="col-12 col-lg-7">
          <p class="plain_text_contact_reportes" data-aos="fade-left" data-aos-offset="200" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div> <!-- row -->


</div> <!-- container fluis -->

<div class="container-fluid form_averias">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-12" data-aos="fade-up" data-aos-offset="200" data-aos-delay="10" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
      <?php echo do_shortcode('[contact-form-7 id="122" title="Reporte de averías"]'); ?>
    </div>
    <div class="col-sm-1"></div>

  </div>
</div>





<?php get_footer()?>
