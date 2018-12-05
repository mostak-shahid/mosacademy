<?php

function mosacademy_enqueue_scripts() {
	global $mosacademy_options;
	if ($mosacademy_options["typography-fonts"]["font-awesome"]) {
		wp_register_style( 'font-awesome.min', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-awesome.min' );
	}
	if ($mosacademy_options["typography-fonts"]["oldstandard"]) {
		wp_register_style( 'oldstandard.min', get_template_directory_uri() . '/fonts/OldStandard/css/oldstandard.min.css' );
		wp_enqueue_style( 'oldstandard.min' );
	}
	if ($mosacademy_options["typography-fonts"]["opensans"]) {
		wp_register_style( 'opensans.min', get_template_directory_uri() . '/fonts/OpenSans/css/opensans.min.css' );
		wp_enqueue_style( 'opensans.min' );
	}
	if ($mosacademy_options["typography-fonts"]["poppins"]) {
		wp_register_style( 'poppins.min', get_template_directory_uri() . '/fonts/Poppins/css/poppins.min.css' );
		wp_enqueue_style( 'poppins.min' );
	}
	if ($mosacademy_options["typography-fonts"]["montserrat"]) {
		wp_register_style( 'montserrat.min', get_template_directory_uri() . '/fonts/Montserrat/css/montserrat.min.css' );
		wp_enqueue_style( 'montserrat.min' );
	}
	if ($mosacademy_options["typography-fonts"]["roboto"]) {
		wp_register_style( 'roboto.min', get_template_directory_uri() . '/fonts/Roboto/css/roboto.min.css' );
		wp_enqueue_style( 'roboto.min' );
	}
	if ($mosacademy_options["typography-fonts"]["ubuntu"]) {
		wp_register_style( 'ubuntu.min', get_template_directory_uri() . '/fonts/Ubuntu/css/ubuntu.min.css' );
		wp_enqueue_style( 'ubuntu.min' );
	}

	wp_enqueue_script( 'jquery' );	

	wp_register_style( 'bootstrap.min', get_template_directory_uri() .  '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min' );
	wp_register_script('bootstrap.min', get_template_directory_uri() .  '/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script( 'bootstrap.min' );

	wp_register_style( 'animate', get_template_directory_uri() .  '/plugins/wow/animate.css' );
	wp_enqueue_style( 'animate' );
	wp_register_script('wow.min', get_template_directory_uri() . '/plugins/wow/wow.min.js', 'jquery');
	wp_enqueue_script( 'wow.min' );
	
	wp_register_script('jquery.sticky', get_template_directory_uri() . '/plugins/jquery.sticky.js', 'jquery');
	wp_enqueue_script( 'jquery.sticky' );

	if ($mosacademy_options['misc-plugins-check']['owlcarousel']) {
		wp_register_style( 'owl.carousel.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.min.css' );
		wp_register_style( 'owl.theme.default.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.theme.default.min.css' );
		wp_enqueue_style( 'owl.carousel.min' );
		wp_enqueue_style( 'owl.theme.default.min' );
		wp_register_script('owl.carousel.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.min.js', 'jquery');
		wp_enqueue_script( 'owl.carousel.min' );
	}

	if ($mosacademy_options['misc-plugins-check']['fancybox']) {
		wp_register_style( 'jquery.fancybox.min', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css' );
		wp_enqueue_style( 'jquery.fancybox.min' );
		wp_register_script('jquery.fancybox.min', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', 'jquery');
		wp_enqueue_script( 'jquery.fancybox.min' );
	}
	if ($mosacademy_options['misc-plugins-check']['jPages']) {	
		wp_register_script('jPages.min', get_template_directory_uri() . '/plugins/jPages/jPages.min.js', 'jquery');
		wp_enqueue_script( 'jPages.min' );
	}
	if ($mosacademy_options['misc-plugins-check']['isotope']) {	
		wp_register_script('isotope.pkgd.min', get_template_directory_uri() . '/plugins/isotope/isotope.pkgd.min.js', 'jquery');
		wp_enqueue_script( 'isotope.pkgd.min' );
	}
	if ($mosacademy_options['misc-plugins-check']['slimscroll']) {	
		wp_register_script('slimscroll', get_template_directory_uri() . '/plugins/slimscroll/jquery.slimscroll.js', 'jquery');
		wp_enqueue_script( 'slimscroll' );
	}
	if ($mosacademy_options['misc-plugins-check']['lazy']) {	
		wp_register_script('jquery.lazy.min', get_template_directory_uri() . '/plugins/jquery.lazy-master/jquery.lazy.min.js', 'jquery');
		wp_enqueue_script( 'jquery.lazy.min' );
	}

	// wp_register_style( 'theme-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'theme-style' );

	wp_register_style( 'main.min', get_template_directory_uri() .  '/css/main.min.css', array('bootstrap.min', 'animate', 'owl.carousel.min', 'owl.theme.default.min', 'jquery.fancybox.min'));
	wp_enqueue_style( 'main.min' );
		
	wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery');
	wp_enqueue_script( 'main' );


}
add_action( 'wp_enqueue_scripts', 'mosacademy_enqueue_scripts' );
function mosacademy_admin_enqueue_scripts(){
	wp_register_style( 'font-awesome.min', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_register_style( 'custom-admin', get_template_directory_uri() . '/css/custom-admin.css' );
	wp_enqueue_style( 'font-awesome.min' );
	wp_enqueue_style( 'custom-admin' );

	wp_enqueue_media();
	wp_register_script('custom-admin', get_template_directory_uri() . '/js/custom-admin.js', 'jquery');
	wp_enqueue_script('custom-admin');


}
add_action( 'admin_enqueue_scripts', 'mosacademy_admin_enqueue_scripts' );

