\<?php
/* Template Name: Catalogo */?>

<?php get_header('catalogo')?>

<?php echo get_the_post_thumbnail_url(); ?>

<?php //echo get_the_title(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>

<?php endif; ?>


<div class="container-fluid ">



<!--- Container para la seccion de productos --->
  <div class="container">


    <div class="row">


      <!--Menu accordion -->
      <div class="">

      </div>



      <!-- Columna de productos  -->
      <div class="">


            <div class="">

              <h3>Categorías</h3>

              <h5>Todos</h5>

              <ul>

                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>

              </ul>

            </div>

      </div>




    </div> <!-- row -->


  </div> <!-- container -->







<div class="wrapper_productos">
  <div class="product_one container_overlay animated fadeInDown delay-2s hideme">
    <div class="card_product_extra card_product_01">
    <img class="product_01" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/PRODUCTO-1-1.jpg" width="100%"; height="auto"; alt="">
    <div class="middle">
      <div class="text_hover_0">
        <h2>Lorem ipsum</h2>
        <h6>dolor sit amet</h6>
        <a href="#" class="btn-hover-main-tek">Más Información</a>
      </div>
    </div>
  </div>
</div>

  <div class="product_two">
    <div class="card_product_extra ">
     <div class="container_overlay animated fadeInDown delay-2s hideme">
          <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/PRODUCTO-2.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                          <div class="text_hover_01">
                            <h2>Lorem ipsum</h2>
                            <h6>dolor sit amet</h6>
                            <a href="#" class="btn-hover-main-tek">Más Información</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

  <div class="product_three container_overlay animated fadeInDown delay-2s hideme">
    <div class="img_one">
      <div class="porduct-02">
            <div class="card">

            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/PRODUCTO-3.jpg" width="100%"; height="auto"; alt="">
            <div class="middle">
              <div class="text_hover_02">
                <h2>Lorem ipsum</h2>
                <h6>dolor sit amet</h6>
                <a href="#" class="btn-hover-main-tek">Más Información</a>
              </div>
            </div>


          </div>

      </div>

    </div>

  </div>


  <div class="product_four container_overlay animated fadeInDown delay-2s hideme">
    <div class="img_two">
      <div class="porduct-03">
        <div class="card">
        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/05/PRODUCTO-4.jpg"width="100%"; height="auto"; alt="">
        <div class="middle">
          <div class="text_hover_03">
            <h2>Lorem ipsum</h2>
            <h6>dolor sit amet</h6>
            <a href="#" class="btn-hover-main-tek">Más Información</a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>



</div>



</div>



<?php get_footer()?>
