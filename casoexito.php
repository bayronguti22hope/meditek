<?php
/* Template Name: Casos de Exito */?>

<?php get_header('casos-new')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">
  <div class="row">

    <div class="col-12 col-lg-6 animated fadeInDown delay-2s hideme">
      <div class="row-services">
          <h2 class="text-testimonios">TESTIMONIOS</h2>
      </div>
      </div>
      <div class="col-12 col-lg-6 animated fadeInDown delay-2s hideme">
        <p class="plain_text_services">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>




  </div> <!-- row -->



<!-- TESTIMONIOS sections  -->

  <div class="container">


    <div class="row videos_content">

      <div class="col-12 col-md-6" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <iframe class="video_tube_01" width="" height="" src="https://www.youtube.com/embed/yxZsfajKQio" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="col-12 col-md-6" data-aos="fade-left" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <iframe class="video_tube_01" width="" height="" src="https://www.youtube.com/embed/Fsub5ivJ_G4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="col-12 col-md-6" data-aos="fade-right" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <iframe class="video_tube_01" width="" height="" src="https://www.youtube.com/embed/yKHR7-zU9S8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="col-12 col-md-6" data-aos="fade-left" data-aos-offset="200" data-aos-delay="20" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <iframe class="video_tube_01" width="" height="" src="https://www.youtube.com/embed/wUrdhW7sANQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>


    </div> <!-- ROW -->

  </div> <!-- container -->






  </div>



</div>



</div>



<?php get_footer()?>
