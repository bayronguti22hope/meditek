  <!-- FOOTER -->
  <footer class="row">

  </footer>

  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <!-- BOOTSTRAP -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jQueryv3.3.1.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>




<div class="container-fluid main_footer">

  <div class="MY_footer wow fadeInLeft">
            <div class="row" id="myfooter">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h2 class="head-title">CONTÁCTENOS</h2>
                </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-12 col-mobile-footer">

                    <?php
                        $image = get_field('phone_footer', 106);
                        if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        <div id="text-footer-message">
                          <a  class="nav-link_footer" href="<?php echo get_site_url();?>">INICIO</a>
                          <a class="nav-link_footer" href="<?php echo get_site_url();?>/acerca-de/">ACERCA DE MEDITEK</a>
                          <a class="nav-link_footer" href="<?php echo get_site_url();?>/productos/">NUESTROS PRODUCTOS</a>
                          <a class="nav-link_footer" href="<?php echo get_site_url();?>/aprenda-con-nosotros/">APRENDA CON NOSOTROS</a>
                          <a class="nav-link_footer" href="<?php echo get_site_url();?>/casos-de-exito/">CASOS DE ÊXITO</a>
                          <a class="nav-link_footer" href="<?php echo get_site_url();?>/sostenibilidad/">SOSTENIBILIDAD</a>
                          <a  class="nav-link_footer" href="<?php echo get_site_url();?>/contacto/">CONTACTO</a>
                        </div>


                        <?php
                        $image = get_field('message_footer', 106);
                        if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>



                    </div>

                    <div class="col-2">
                    <p></p>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 col-mobile-footer">

                    <?php
                        $image = get_field('facebook_footer', 106);
                        if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>


                        <div id="text-footer-phone">
                          <a href="tel:(506)25492200">
                          <img class="icon_phone" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/TELEFONO-ICONO.svg" width="50px" height="auto"; alt="">
                        </a>
                          <p class="footer_text_center">COSTA RICA</p>
                            <p class="footer_text_center">(506) 800 MEDITEK</p>
                        </div>

                        <div id="text-footer-phone">
                          <a target="_top" href="mailto:informacion@medtekla.com?subject=Informacion acerca de nuestros servicios">
                          <img class="icon_phone" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/CORREO-ICONO.svg" width="50px" height="auto"; alt="">
                          </a>
                            <p class="email_info">informacion@medtekla.com</p>
                        </div>





                        <?php
                        $image = get_field('youtube_footer', 106);
                        if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>




                    </div>


                    <div class="col-1">
                    <p></p>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-12 col-mobile-footer">
                      <h4 class="sub-title-footer">SÍGANOS</h4>

                    <?php
                        $image = get_field('ubicacion_footer', 106);
                        if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                        <div class="">
                          <ul class="col-footer-social">
                            <li>
                              <a href="https://www.facebook.com/meditekservices/" target="_blank">
                              <img class="" src="<?php echo get_site_url();?>/wp-content/uploads/2019/05/FACEBOOK-ICONO.svg" width="25px" height="auto"; alt="">
                            </a>
                            </li>
                            <li><p class="footer-text-right">@meditekservices</p></li>
                          </ul>
                        </div>



                          <div class="">
                            <ul class="col-footer-social">
                              <li>
                                <a href="https://www.youtube.com/channel/UCntIEx6epBXXfL4U62LR1oQ" target="_blank">
                                <img class="" src="<?php echo get_site_url();?>/wp-content/uploads/2019/05/YOUTUBE-ICONO.svg" width="25px" height="auto"; alt="">
                              </a>
                              </li>
                              <li><p class="footer-text-right">Meditek Services</p></li>
                            </ul>
                          </div>





                    <a href="#home" class="active img_footer_logo"> <img class="" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/LOGO-MEDITEK-BLANCO.svg" height="50px" width="100%">
                    </a>

                    <?php
                        $image = get_field('footer_logo', 106);
                        if( !empty($image) ): ?>

                    <img id="img-footer-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                    </div>

            </div>
  </div> <!-- here closed MY_footer -->

</div>
<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 12000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

<script>
jQuery(document).ready(function($){
// Code goes here

//this will execute on page load(to be more specific when document ready event occurs)

  if ($('.ty-compact-list').length > 8 ) {
    $('.ty-compact-list:gt(7)').hide();
    $('.show-more').show();
  }

  $('.show-more').on('click', function() {
    //toggle elements with class .ty-compact-list that their index is bigger than 2
    $('.ty-compact-list:gt(7)').toggle();
    //change text of show more element just for demonstration purposes to this demo
    $(this).text() === 'Ver más' ? $(this).text('Ver Menos') : $(this).text('Ver más');


  });


});





  //ready(); = una vez cargada en su totalidad la página web ejecuta el código
  $(document).ready(function(){
  	//cuando la <option> del <select id="selector_1"> en el formulario cambia
      $("#select_cat").on("change", function(){
  	   	//toma el nuevo valor,
      	var my_category = $(this).val();
      	//se compara el nuevo valor con las opciones dadas
  		switch (my_category) {
  			//si el nuevo valor coincide con el valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
  			case 'Equipos SURGICAL':
  				//remueve todos las <option> dentro de <select id="selector_2">
  				$("#selectList").children().remove();
  				//agrega una nueva <option> al <select id="selector_2">
  				$("#selectList").append("<option>ARMARIOS CALENTADORES AMSCO®</option>");
  				//se pueden agregar cuantas opciones se necesiten
  				$("#selectList").append("<option>Mesa quirúrgica CMAX XRAY</option><option>Mesa quirúrgica 5085</option><option>LÁMPARAS QUIRÚRGICAS DE XLED</option>");
  			//termina case 'valor_1'
  			break;
        case 'Equipo Médico':
          //remueve todos las <option> dentro de <select id="selector_2">
          $("#selectList").children().remove();
          //agrega una nueva <option> al <select id="selector_2">
          $("#selectList").append("<option>ARMARIOS CALENTADORES AMSCO®</option>");
          //se pueden agregar cuantas opciones se necesiten
          $("#selectList").append("<option>Mesa quirúrgica CMAX XRAY/option><option>Mesa quirúrgica 5085</option><option>LÁMPARAS QUIRÚRGICAS DE XLED</option>");
        //termina case 'valor_1'
        break;
  			//si el nuevo valor coincide con el valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
  			case 'Equipos Monitores GE':
  				//remueve todos las <option> dentro de <select id="selector_3">
  				$("#selectList").children().remove();
  				//agrega una nueva <option> al <select id="selector_3">
  				$("#selectList").append("<option>Monitor Carescape B450 </option>");
  				//se pueden agregar cuantas opciones se necesiten
  				$("#selectList").append("<option>Monitor CARESCAPE B650</option><option>Monitores de paciente B105 y B125</option><option>Monitor CARESCAPE B850</option>");
  			//termina case 'valor_2'
  			break;
        //si el nuevo valor coincide con el valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
        case 'Equipos Welch Allyn':
          //remueve todos las <option> dentro de <select id="selector_3">
          $("#selectList").children().remove();
          //agrega una nueva <option> al <select id="selector_3">
          $("#selectList").append("<option>Lámpara para Procedimientos Menores Green Series™ 600</option>");
          //se pueden agregar cuantas opciones se necesiten
          $("#selectList").append("<option></option><option>Esfigmomanómetro Digital Connex® ProBPTM 3400</option><option>Pocket LED Sets</option><option>Esfigmomanómetros aneroides </option><option>OFTALMOSCOPIO PANOPTIC™</option><option>Otoscopio Macroview</option><option>Estetoscopio Profesional</option><option>Transformador de Pared 77710</option><option>Set de Diagnóstico</option>");
        //termina case 'valor_2'
        break;
        //si el nuevo valor coincide con el valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
        case 'Gestión Digital Salud':
          //remueve todos las <option> dentro de <select id="selector_3">
          $("#selectList").children().remove();
          //agrega una nueva <option> al <select id="selector_3">
          $("#selectList").append("<option>Nombre de producto 3</option>");
          //se pueden agregar cuantas opciones se necesiten
          // Solo hay una opcion
          // $("#selectList").append("<option>Opción_1</option><option>Opción_2</option>");
        //termina case 'valor_2'
        break;
  			//si el nuevo valor no coincide con ningun valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
        case 'Servicio Técnico':
          //remueve todos las <option> dentro de <select id="selector_3">
          $("#selectList").children().remove();
          //agrega una nueva <option> al <select id="selector_3">
          $("#selectList").append("<option>Nombre de producto 2</option>");
          //se pueden agregar cuantas opciones se necesiten
        // Solo hay una opcion
        //  $("#selectList").append("<option>Opción_1</option>");
        //termina case 'valor_2'
        break;
        //si el nuevo valor no coincide con ningun valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
        case 'Terapias':
          //remueve todos las <option> dentro de <select id="selector_3">
          $("#selectList").children().remove();
          //agrega una nueva <option> al <select id="selector_3">
          $("#selectList").append("<option>Nombre de producto 1</option>");
          //se pueden agregar cuantas opciones se necesiten
        // Solo hay una opcion no es necesario otras opciones
        //  $("#selectList").append("<option>Opción_1</option>");
        //termina case 'valor_2'
        break;


      	//si el nuevo valor no coincide con ningun valor que se encuentran dentro de las comillas del case, se ejecutan las siguientes acciones:
  			default:
  				//remueve todos las <option> dentro de <select id="selector_1">
  				$("#selectList").children().remove();
  				//agrega una nueva <option> al <select id="selector_1">
  				$("#selectList").append("<option>Nueva Opción</option>");
  				//se pueden agregar cuantas opciones se necesiten
  				$("#selectList").append("<option>Opción_1</option><option>Opción_2</option>");
  			//termina case 'valor_2'
  			break;
  		//termina comparación
  		}
  	//termina funcion de cambio
      });



      $("#cat_test").change(function(){
        console.log("The text has been changed.");
        });

         $('#cat_test').select2();


  //fin de ready();

});




// Animation
  AOS.init({
    disable: 'mobile'
  });



//


</script>






  <?php wp_footer();?>


  </body>
</html>
