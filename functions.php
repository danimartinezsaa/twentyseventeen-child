<?php
//Función para definir un area de widgets
function funcion_widgets_dani() {
	register_sidebar( array(
		'name'          => __( 'Widget Area Dani', 'twentyseventeen-child' ),
		'id'            => 'sidebar-dani',
		'description'   => __( 'Añade tus widgets a la area creada por dani.', 'twentyseventeen-child' ),
		'before_widget' => '<section id="css-widget" class="widget-dani">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Widget Area Dani2', 'twentyseventeen-child' ),
		'id'            => 'sidebar-dani2',
		'description'   => __( 'Añade tus widgets a la area creada por dani.', 'twentyseventeen-child' ),
		'before_widget' => '<div id="css-widget-footer" class="widget-dani">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title-dani">',
		'after_title'   => '</h2>',
	) );
}
//Para que funcione el area de widgets tenemos que pasarselo a la función add_action con widgets_init. Después llamamos a dynamic_sidebar en la zona del tema
//en la que lo queramos añadir. Este lo añadimos al footer, por ejemplo.
add_action('widgets_init','funcion_widgets_dani');

//Función para crear un nuevo menú
function menu_dani() {
  register_nav_menu('en-pie-menu',__( 'Menu en pie de página' ));
}
add_action( 'init', 'menu_dani' );
//Llamamos Menú en pie de página para situar este menú en el footer

?>