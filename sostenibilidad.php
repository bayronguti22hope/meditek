<?php
/* Template Name: Ssotenibilidad */?>

<?php get_header('sostenibilidad')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">
  <div class="row">

    <div class="col-12 col-lg-6">
      <div class="row-services animated fadeInDown delay-2s hideme">
          <h2 class="text-sostenibilidad">ACCIONES SOSTENIBLES</h2>
      </div>
      </div>
      <div class="col-12 col-lg-6 animated fadeInDown delay-2s hideme">
        <p class="plain_text_sostenibilidad">Este año nuestra estrategia está enfocada en los ejes de la sostenibilidad: Social, económica y Ambiental. Comprometidos con el medio ambiente este año realizamos la siguiente labor: 5 Minutes Beach Clean up.</p>
      </div>

  </div> <!-- row -->



<!-- TESTIMONIOS sections  -->

  <div class="container">


    <div class="row videos_content_sostenibilidad animated fadeInDown delay-2s hideme">



      <div class="col-12">


        <!-- Embed for Facebook Video -->
        <blockquote class="embedly-card"><h4><a href="<?php printf('https://www.facebook.com/meditekservices/videos/2137170623264134/"') ?>">5 Minutes Beach Cleanup</a></h4><p>Este año nuestra estrategia está enfocada en los ejes de la sostenibilidad: Social, económica y Ambiental. Comprometidos con el medio ambiente este año...</p></blockquote>
          <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>





      </div>

    </div> <!-- ROW -->

  </div> <!-- container -->






  </div>



</div>



</div>



<?php get_footer()?>
