<?php

function mosacademy_enqueue_scripts() {
	global $mosacademy_options;
	if ($mosacademy_options["typography-fonts"]["font-awesome"]) {
		wp_register_style( 'font-awesome.min', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-awesome.min' );
	}
	if ($mosacademy_options["typography-fonts"]["arimo"]) {
		wp_register_style( 'arimo.min', get_template_directory_uri() . '/fonts/Arimo/css/arimo.min.css' );
		wp_enqueue_style( 'arimo.min' );
	}
	if ($mosacademy_options["typography-fonts"]["dosis"]) {
		wp_register_style( 'dosis.min', get_template_directory_uri() . '/fonts/Dosis/css/dosis.min.css' );
		wp_enqueue_style( 'dosis.min' );
	}
	if ($mosacademy_options["typography-fonts"]["hind"]) {
		wp_register_style( 'hind.min', get_template_directory_uri() . '/fonts/Hind/css/hind.min.css' );
		wp_enqueue_style( 'hind.min' );
	}
	if ($mosacademy_options["typography-fonts"]["khand"]) {
		wp_register_style( 'khand.min', get_template_directory_uri() . '/fonts/Khand/css/khand.min.css' );
		wp_enqueue_style( 'khand.min' );
	}
	if ($mosacademy_options["typography-fonts"]["montserrat"]) {
		wp_register_style( 'montserrat.min', get_template_directory_uri() . '/fonts/Montserrat/css/montserrat.min.css' );
		wp_enqueue_style( 'montserrat.min' );
	}
	if ($mosacademy_options["typography-fonts"]["muli"]) {
		wp_register_style( 'muli.min', get_template_directory_uri() . '/fonts/Muli/css/muli.min.css' );
		wp_enqueue_style( 'muli.min' );
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
	if ($mosacademy_options["typography-fonts"]["ptsans"]) {
		wp_register_style( 'ptsans.min', get_template_directory_uri() . '/fonts/PTSans/css/ptsans.min.css' );
		wp_enqueue_style( 'ptsans.min' );
	}
	if ($mosacademy_options["typography-fonts"]["roboto"]) {
		wp_register_style( 'roboto.min', get_template_directory_uri() . '/fonts/Roboto/css/roboto.min.css' );
		wp_enqueue_style( 'roboto.min' );
	}
	if ($mosacademy_options["typography-fonts"]["sourcesanspro"]) {
		wp_register_style( 'sourcesanspro.min', get_template_directory_uri() . '/fonts/SourceSansPro/css/sourcesanspro.min.css' );
		wp_enqueue_style( 'sourcesanspro.min' );
	}
	if ($mosacademy_options["typography-fonts"]["sourceserifpro"]) {
		wp_register_style( 'sourceserifpro.min', get_template_directory_uri() . '/fonts/SourceSerifPro/css/sourceserifpro.min.css' );
		wp_enqueue_style( 'sourceserifpro.min' );
	}
	if ($mosacademy_options["typography-fonts"]["ubuntu"]) {
		wp_register_style( 'ubuntu.min', get_template_directory_uri() . '/fonts/Ubuntu/css/ubuntu.min.css' );
		wp_enqueue_style( 'ubuntu.min' );
	}

	wp_enqueue_script( 'jquery' );	

	if (@$mosacademy_options['misc-plugins-check']['isotope']) {	
		wp_register_script('isotope.pkgd.min', get_template_directory_uri() . '/plugins/isotope/isotope.pkgd.min.js', 'jquery');
		wp_enqueue_script( 'isotope.pkgd.min' );
	}
	
	wp_register_style( 'bootstrap.min', get_template_directory_uri() .  '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min' );
	wp_register_script('bootstrap.min', get_template_directory_uri() .  '/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script( 'bootstrap.min' );

	wp_register_style( 'animate.min', get_template_directory_uri() .  '/plugins/wow/animate.min.css' );
	wp_enqueue_style( 'animate.min' );
	wp_register_script('wow.min', get_template_directory_uri() . '/plugins/wow/wow.min.js', 'jquery');
	wp_enqueue_script( 'wow.min' );
	
	wp_register_script('jquery.sticky.min', get_template_directory_uri() . '/plugins/jquery.sticky.min.js', 'jquery');
	wp_enqueue_script( 'jquery.sticky.min' );

	
	wp_register_style( 'owl.carousel.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.min.css' );
	wp_register_style( 'owl.theme.default.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.theme.default.min.css' );
	wp_enqueue_style( 'owl.carousel.min' );
	wp_enqueue_style( 'owl.theme.default.min' );
	wp_register_script('owl.carousel.min', get_template_directory_uri() . '/plugins/owlcarousel/owl.carousel.min.js', 'jquery');
	wp_enqueue_script( 'owl.carousel.min' );	

	
	wp_register_style( 'jquery.fancybox.min', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css' );
	wp_enqueue_style( 'jquery.fancybox.min' );
	wp_register_script('jquery.fancybox.min', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', 'jquery');
	wp_enqueue_script( 'jquery.fancybox.min' );


	wp_register_script('jPages.min', get_template_directory_uri() . '/plugins/jPages/jPages.min.js', 'jquery');
	wp_enqueue_script( 'jPages.min' );
	

	
	wp_register_script('slimscroll.min', get_template_directory_uri() . '/plugins/slimscroll/jquery.slimscroll.min.js', 'jquery');
	wp_enqueue_script( 'slimscroll.min' );

	if ($mosacademy_options['misc-plugins-check']['lazy']) :
		wp_register_script('jquery.lazy.min', get_template_directory_uri() . '/plugins/jquery.lazy-master/jquery.lazy.min.js', 'jquery');
		wp_enqueue_script( 'jquery.lazy.min' );
	endif;
	
	if ($mosacademy_options['misc-settings-css-additional']) {
		foreach ($mosacademy_options['misc-settings-css-additional'] as $css) {
			$n = 1;
			wp_enqueue_style( 'additional-css-'.$n, $css );
			$n++;
		}
	}
	if ($mosacademy_options['misc-settings-js-additional']) {
		$n = 1;
		foreach ($mosacademy_options['misc-settings-js-additional'] as $js) {			
			// var_dump($js);
			wp_enqueue_script( 'additional-js-'.$n, $js) ;
			$n++;
		}
	}	

	// wp_register_style( 'theme-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'theme-style' );
	if ($mosacademy_options['basic-styling-stylesheet']) {	
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() .  '/css/' . $mosacademy_options['basic-styling-stylesheet'], array('bootstrap.min', 'animate.min', 'owl.carousel.min', 'owl.theme.default.min', 'jquery.fancybox.min'));
		wp_enqueue_style( 'stylesheet' );
	}

	wp_register_style( 'main.min', get_template_directory_uri() .  '/css/main.min.css', array('bootstrap.min', 'animate.min', 'owl.carousel.min', 'owl.theme.default.min', 'jquery.fancybox.min'));
	wp_enqueue_style( 'main.min' );
		
	wp_register_script('main.min', get_template_directory_uri() . '/js/main.min.js', 'jquery');
	wp_enqueue_script( 'main.min' );


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

