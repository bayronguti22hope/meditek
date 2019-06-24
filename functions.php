<?php

// Registro del menú de WordPress

add_theme_support( 'nav-menus' );
add_theme_support( 'woocommerce' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main',
          'secondary' => 'Secondary'
        )
    );
}



function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




function menu() {

  ?>
  <div class="">
    <ul class="container-links">
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>">INICIO</a></li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/acerca-de/">ACERCA DE MEDITEK</a></li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/productos/">NUESTROS PRODUCTOS </a></li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/aprenda-con-nosotros/">APRENDA CON NOSOTROS</a> </li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/casos-de-exito/">CASOS DE ÊXITO</a> </li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/sostenibilidad/">SOSTENIBILIDAD</a></li>
      <li class="nav-desktop"><a href="<?php echo get_site_url();?>/contacto/">CONTACTO</a></li>
    </ul>
  </div>
  <?php
}
//Post type de videos
function create_noticias() {
register_post_type( 'Videos',
// CPT Options
    array(
        'labels' => array(
            'name' => __( 'Videos' ),
            'singular_name' => __( 'Videos' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'videos'),
    )
);
register_post_type( 'Facebook',
// CPT Options
    array(
        'labels' => array(
            'name' => __( 'Facebook' ),
            'singular_name' => __( 'Facebook' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'facebook'),
    )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_noticias' );




//Post type de FB Post
function create_post_facebook() {
// register_post_type( 'Facebook',
// // CPT Options
//     array(
//         'labels' => array(
//             'name' => __( 'Facebook' ),
//             'singular_name' => __( 'Facebook' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array('slug' => 'facebook'),
//     )
// );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_facebook' );

 add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 15 );

 function bbloomer_custom_action() {
 echo add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
 }
remove_action( 'woocommerce_after_single_product', 'woocommerce_breadcrumb');

?>
