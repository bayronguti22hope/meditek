<?php
/* Template Name: home */?>

<?php get_header()?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">

  <div class="row">

    <div class="col-12 col-lg-5">
      <div class="row-services animated fadeInDown delay-2s hideme">
          <h2 class="text-services">NUESTROS SERVICIOS</h2>
      </div>
      </div>
      <div class="col-12 col-lg-7">
        <p class="plain_text_services">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

  </div> <!-- row -->


<!-- Colors Cards  -->

  <div class="row box_services wrapper">

    <div class="one" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <div class="my_card_purple">
            <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-SERVICIOS.svg" width="50em"; alt="">
            <div class="card-body">
              <h5 class="card-title">Dispositivos Médicos</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    <!-- one -->

    <div class="two" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
      <div class="my_card_dark_blue">
        <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-SERVICIOS.svg" width="50em"; alt="">
        <div class="card-body">
          <h5 class="card-title">Equipos Médicos</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <!-- two -->

    <div class="three" data-aos="fade-right" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
      <div class="my_card_light_blue d-flex">
        <img class="card-img-top" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-SERVICIOS.svg" width="50em"; alt="">
        <div class="card-body">
          <h5 class="card-title">Servicio Técnico</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

  <!-- three -->

  </div> <!-- box_services -->




<!-- Info about Meditek -->

  <div class="container">


    <div class="row section_medi">

      <div class="col-lg-6 content_img_medi" data-aos="fade-up" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/IMAGEN-1.jpg"  width="100%" height="auto" alt="">
      </div>

      <div class="col-lg-6">

        <div class="" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <h2 class="text-MEDI">MEDITEK</h2>
        </div>

        <div class="content_text_medi" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center" >
          <p class="plain_text_tek">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. .</p>
          <a href="#" class="btn-main-tek">Ver Más</a>
        </div>

      </div>



    </div> <!-- ROW -->

  </div> <!-- container -->


  <!-- Header for home products -->

    <div class="col-12">
      <div class="row">

        <div class="col-12 col-lg-5 row-services" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <h2 class="text-productos">NUESTROS PRODUCTOS</h2>
        </div>
        <div class="col-12 col-lg-7" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
          <p class="plain_text_products">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

      </div> <!-- row -->


    </div> <!--  col-12 -->





<!-- The Loop for the products in homepage. -->



<div class="wrapper_productos">



    <?php

    $args = array(
      'post_type' => 'product',
      'post_status' => 'publish',
      'posts_per_page' => '4',
      'order' => 'DESC'

    );
    $the_query = new WP_Query( $args );
      $count = 0 ;
    ?>

    <?php
  // the query
  $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>


      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        $count ++;
      ?>

        <?php if ( $count == 1 ): ?>



              <div class="product_one container_overlay" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                <div class="card_product_extra card_product_01">
                <img class="product_01" src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%" height="auto" >
                <div class="middle">
                  <div class="text_hover_0">
                    <h2 class="title_home_product"><?php the_title(); ?></h2>
                    <a href="<?php echo get_the_permalink();?>" class="btn-hover-main-tek">Más Información</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- product one -->

          <?php elseif ($count == 2): ?>


            <div class="product_two" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
              <div class="card_product_extra container_overlay">
               <div class="">
                    <img class="img_product_02" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Avatar" class="image-01" width="100%" height="auto" >
                                  <div class="middle">
                                    <div class="text_hover_02">
                                      <h2 class="title_home_product"><?php the_title(); ?></h2>
                                      <a href="<?php echo get_the_permalink();?>" class="btn-hover-main-tek">Más Información</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- product two -->

              <?php elseif ($count == 3) : ?>



                <div class="product_three container_overlay" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                  <div class="img_one">
                    <div class="porduct-02">
                          <div class="card">

                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%"; height="auto"; alt="">
                          <div class="middle">
                            <div class="text_hover_03">
                              <h2 class="title_home_product"><?php the_title(); ?></h2>
                              <a href="<?php echo get_the_permalink();?>" class="btn-hover-main-tek">Más Información</a>
                            </div>
                          </div>


                        </div>
                    </div>
                  </div>
                </div>

                <!-- product three-->

              <?php elseif ($count == 4) : ?>

                <div class="product_four container_overlay" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">
                 <div class="img_two">
                   <div class="porduct-03">
                     <div class="card_product_03">
                     <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="100%"; height="auto"; alt="">
                     <div class="middle">
                       <div class="text_hover_03">
                         <h2 class="title_home_product"><?php the_title(); ?></h2>
                         <a href="<?php echo get_the_permalink();?>" class="btn-hover-main-tek">Más Información</a>
                       </div>
                     </div>
                       </div>
                   </div>
                 </div>
               </div>

               <!-- product four  -->



          <?php endif; ?>


















      <?php endwhile; ?>
      <!-- end of the loop -->

      <!-- pagination here -->

      <?php wp_reset_postdata(); ?>

  <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


</div>

<!--Info with some icons -->
<div class="row general_info counter" data-aos="fade-left" data-aos-offset="200" data-aos-delay="5" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true">

  <div class="col-12 col-md-4 box-counting-info">
    <img class="contador-01" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-CONTADOR-1-1.svg"  width="50%"alt="">
    <p class="counting-01 count">20</p>
    <p class="text-for-counting-1">Años en el mercado</p>
  </div>


  <div class="col-12 col-md-4 box-counting-info">
    <img class="contador-02" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-CONTADOR-2.svg"  width="50%"alt="">
    <p class="counting-02 count">14</p>
    <p class="text-for-counting-2">Hospitales felices</p>
  </div>


  <div class="col-12 col-md-4 box-counting-info">
    <img class="contador-03" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/ICONO-CONTADOR-3.svg"  width="50%"alt="">
    <p class="counting-03 count">180</p>
    <p class="text-for-counting-3">Dispositivos entregados</p>
  </div>


</div>


</div>
<!-- here is where the container fluid ends  -->


<?php get_footer()?>
