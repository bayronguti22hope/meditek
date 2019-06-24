<?php
/* Template Name: Aprenda con nosotros */?>

<?php get_header('aprenda')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">
  <div class="row">

    <div class="col-12 col-lg-8">
      <div class="row-services animated fadeInDown delay-2s hideme" >
          <h2 class="text-aprenda">APRENDA ACERCA DE NUESTRAS SOLUCIONES</h2>
      </div>
      </div>
      <div class="col-12 col-lg-4">
        <p class="plain_text_services"></p>
      </div>

  </div> <!-- row -->



<!-- videos sections  -->

<div class="container">


  <div class="row videos_content_sostenibilidad" data-aos="fade-right" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">

    <?php
    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'Videos',
      'orderby' => array(
        'date' => 'ASC', )
      );

      $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <!-- agrega contenido ------>

    <div class="col-12 col-md-6 col-lg-3 col-xl-3 ty-compact-list col_no_padd">
      <?php echo get_the_content(); ?>

    </div>



    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php _e( 'No hay entradas' ); ?></p>
    <?php endif; ?>



    <div class="show-more">Ver más</div>

  </div> <!-- ROW -->

</div> <!-- container -->




</div> <!-- container fluid -->






<?php get_footer()?>
