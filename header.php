<!-- 
  _____  _      ______           _____ ______   _____   ____  _   _  ____ _______   ______ _____ _____ _______ 
 |  __ \| |    |  ____|   /\    / ____|  ____| |  __ \ / __ \| \ | |/ __ \__   __| |  ____|  __ \_   _|__   __|
 | |__) | |    | |__     /  \  | (___ | |__    | |  | | |  | |  \| | |  | | | |    | |__  | |  | || |    | |   
 |  ___/| |    |  __|   / /\ \  \___ \|  __|   | |  | | |  | | . ` | |  | | | |    |  __| | |  | || |    | |   
 | |    | |____| |____ / ____ \ ____) | |____  | |__| | |__| | |\  | |__| | | |    | |____| |__| || |_   | |   
 |_|    |______|______/_/    \_\_____/|______| |_____/ \____/|_| \_|\____/  |_|    |______|_____/_____|  |_| 
 -->
<?php
global $mosacademy_options;
$logo_option = $mosacademy_options['logo-option'];
$logo_url = $mosacademy_options['logo']['url'];
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo get_post_meta( get_the_ID(),'_yoast_wpseo_focuskw', true ) ?>">
    <meta name="description" content="<?php echo get_post_meta( get_the_ID(),'_yoast_wpseo_metadesc', true ) ?>">
    <meta name="author" content="Md. Mostak Shahid">   

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>
    <?php //require_once ('scripts.php') ?>   
    <?php require_once ('schema.php') ?>
</head>
<body <?php body_class(); ?>>
<!-- <span class="text-danger"><?php echo get_page_template(); ?></span> -->
<?php 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_above_header', $page_details );
?>
<input id="loader-status" type="hidden" value="<?php echo $mosacademy_options['misc-page-loader'] ?>">
<?php if ($mosacademy_options['misc-page-loader']) : ?>
    <div class="se-pre-con">
    <?php if ($mosacademy_options['misc-page-loader-image']['url']) : ?>
        <img class="img-responsive animation <?php echo $mosacademy_options['misc-page-loader-image-animation'] ?>" src="<?php echo do_shortcode( $mosacademy_options['misc-page-loader-image']['url'] ); ?>">
    <?php else : ?>
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <?php endif; ?>
    </div>
<?php endif; ?>





    <?php echo do_shortcode( '[site_identity container_class="small-logo d-md-none d-lg-none d-xl-none"]' ) ?>          

    <header id="main-header">
        <div class="content-wrap d-xs-none d-sm-none">
<?php
$header_layout = '';
$header_design = $mosacademy_options['header-design'];

function layout_starter ($layout_starter) {
	if ($layout_starter == 1){
	    $tag_layout_starter = '[element_start name="div" class="container-fluid"]';
	}
	elseif ($layout_starter == 2){
	    $tag_layout_starter = '[element_start name="div" class="container-fluid"][element_start name="div" class="row"][element_start name="div" class="col-lg-10 offset-lg-1"]';
	}
	elseif ($layout_starter == 3){
	    $tag_layout_starter = '[element_start name="div" class="container"]';
	}
	else {
	    $tag_layout_starter = '[element_start]';
	}
	return $tag_layout_starter;
}
function layout_end ($layout_end) {
	if ($layout_end == 1){
	    $tag_layout_end = '[element_end name="div" class="container-fluid"]';
	}
	elseif ($layout_end == 2){
	    $tag_layout_end = '[element_end name="div" class="col-lg-10 offset-lg-1"][element_end name="div" class="row"][element_end name="div" class="container-fluid"]';
	}
	elseif ($layout_end == 3){
	    $tag_layout_end = '[element_end name="div" class="container"]';
	}
	else {
	    $tag_layout_end = '[element_end]';
	}
	return $tag_layout_end;
}




if ($header_design == 'header-layout-custom') {
    $header_layout = @$mosacademy_options['header-layout'];
}
else {
    if ($header_design == '1' OR $header_design == '2' OR $header_design == '3') {
        $header_layout .= '[element_start name="div" class="top-header"]';
        $header_layout .= layout_starter ($mosacademy_options['header-r1-width']);
        if ($mosacademy_options['header-r1-col'] == '1') {
            $header_layout .= $mosacademy_options['header-r1-col-1'];
        }
        else {
            $header_layout .= '[element_start name="div" class="row"]';
            if ($mosacademy_options['header-r1-col'] >= 2 AND $mosacademy_options['header-r1-col'] <= 11) {
                if ($mosacademy_options['header-r1-col'] == 2) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                if ($mosacademy_options['header-r1-col'] == 3) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r1-col'] == 4 OR $mosacademy_options['header-r1-col'] == 8 ) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r1-col'] == 5 OR $mosacademy_options['header-r1-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r1-col'] == 6 OR $mosacademy_options['header-r1-col'] == 9 OR $mosacademy_options['header-r1-col'] == 10 OR $mosacademy_options['header-r1-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';

                $header_layout .= $mosacademy_options['header-r1-col-1'];
                $header_layout .= '[element_end name="div"]';

                if ($mosacademy_options['header-r1-col'] == 2 OR $mosacademy_options['header-r1-col'] == 8 OR $mosacademy_options['header-r1-col'] == 10 OR $mosacademy_options['header-r1-col'] == 11) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r1-col'] == 3 OR $mosacademy_options['header-r1-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r1-col'] == 4 OR $mosacademy_options['header-r1-col'] == 9) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r1-col'] == 5) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r1-col'] == 6) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                
                $header_layout .= $mosacademy_options['header-r1-col-2'];
                $header_layout .= '[element_end name="div"]';
            }
            if ($mosacademy_options['header-r1-col'] >= 7 AND $mosacademy_options['header-r1-col'] <= 11) {
                if ($mosacademy_options['header-r1-col'] == 7) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r1-col'] == 8 OR $mosacademy_options['header-r1-col'] == 9 OR $mosacademy_options['header-r1-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r1-col'] == 10) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                
                $header_layout .= $mosacademy_options['header-r1-col-3'];
                $header_layout .= '[element_end name="div"]';                
            }
            if ($mosacademy_options['header-r1-col'] == 11) {
                $header_layout .= '[element_start name="div" class="col-md-3"]';                
                $header_layout .= $mosacademy_options['header-r1-col-4'];
                $header_layout .= '[element_end name="div"]';                
            }
            $header_layout .= '[element_end name="div" class="row"]';
        }                
        $header_layout .= layout_end ($mosacademy_options['header-r1-width']);
        $header_layout .= '[element_end name="div" class="top-header"]';
    }
    if ($header_design == '2' OR $header_design == '3') {
        $header_layout .= '[element_start name="div" class="middle-header"]';
        $header_layout .= layout_starter ($mosacademy_options['header-r2-width']);;
        if ($mosacademy_options['header-r2-col'] == '1') {
            $header_layout .= $mosacademy_options['header-r2-col-1'];
        }
        else {
            $header_layout .= '[element_start name="div" class="row"]';
            if ($mosacademy_options['header-r2-col'] >= 2 OR $mosacademy_options['header-r2-col'] <= 11) {
                if ($mosacademy_options['header-r2-col'] == 2) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                if ($mosacademy_options['header-r2-col'] == 3) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r2-col'] == 4 OR $mosacademy_options['header-r2-col'] == 8 ) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r2-col'] == 5 OR $mosacademy_options['header-r2-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r2-col'] == 6 OR $mosacademy_options['header-r2-col'] == 9 OR $mosacademy_options['header-r2-col'] == 10 OR $mosacademy_options['header-r2-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';

                $header_layout .= $mosacademy_options['header-r2-col-1'];
                $header_layout .= '[element_end name="div"]';

                if ($mosacademy_options['header-r2-col'] == 2 OR $mosacademy_options['header-r2-col'] == 8 OR $mosacademy_options['header-r2-col'] == 10 OR $mosacademy_options['header-r2-col'] == 11) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r2-col'] == 3 OR $mosacademy_options['header-r2-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r2-col'] == 4 OR $mosacademy_options['header-r2-col'] == 9) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r2-col'] == 5) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r2-col'] == 6) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                
                $header_layout .= $mosacademy_options['header-r2-col-2'];
                $header_layout .= '[element_end name="div"]';
            }
            if ($mosacademy_options['header-r2-col'] >= 7 OR $mosacademy_options['header-r2-col'] <= 11) {
                if ($mosacademy_options['header-r2-col'] == 7) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r2-col'] == 8 OR $mosacademy_options['header-r2-col'] == 9 OR $mosacademy_options['header-r2-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r2-col'] == 10) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                
                $header_layout .= $mosacademy_options['header-r2-col-3'];
                $header_layout .= '[element_end name="div"]';                
            }
            if ($mosacademy_options['header-r2-col'] == 11) {
                $header_layout .= '[element_start name="div" class="col-md-3"]';                
                $header_layout .= $mosacademy_options['header-r2-col-4'];
                $header_layout .= '[element_end name="div"]';                
            }
            $header_layout .= '[element_end name="div" class="row"]';
        }                
        $header_layout .= layout_end ($mosacademy_options['header-r2-width']);;
        $header_layout .= '[element_end name="div" class="middle-header"]';
    }
    if ($header_design == '3') {
        $header_layout .= '[element_start name="div" class="bottom-header"]';
        $header_layout .= layout_starter ($mosacademy_options['header-r3-width']);
        if ($mosacademy_options['header-r3-col'] == '1') {
            $header_layout .= $mosacademy_options['header-r3-col-1'];
        }
        else {
            $header_layout .= '[element_start name="div" class="row"]';
            if ($mosacademy_options['header-r3-col'] >= 2 OR $mosacademy_options['header-r3-col'] <= 11) {
                if ($mosacademy_options['header-r3-col'] == 2) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                if ($mosacademy_options['header-r3-col'] == 3) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r3-col'] == 4 OR $mosacademy_options['header-r3-col'] == 8 ) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r3-col'] == 5 OR $mosacademy_options['header-r3-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r3-col'] == 6 OR $mosacademy_options['header-r3-col'] == 9 OR $mosacademy_options['header-r3-col'] == 10 OR $mosacademy_options['header-r3-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';

                $header_layout .= $mosacademy_options['header-r3-col-1'];
                $header_layout .= '[element_end name="div"]';

                if ($mosacademy_options['header-r3-col'] == 2 OR $mosacademy_options['header-r3-col'] == 8 OR $mosacademy_options['header-r3-col'] == 10 OR $mosacademy_options['header-r3-col'] == 11) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r3-col'] == 3 OR $mosacademy_options['header-r3-col'] == 7 ) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r3-col'] == 4 OR $mosacademy_options['header-r3-col'] == 9) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                if ($mosacademy_options['header-r3-col'] == 5) 
                    $header_layout .= '[element_start name="div" class="col-md-8"]';
                if ($mosacademy_options['header-r3-col'] == 6) 
                    $header_layout .= '[element_start name="div" class="col-md-9"]';
                
                $header_layout .= $mosacademy_options['header-r3-col-2'];
                $header_layout .= '[element_end name="div"]';
            }
            if ($mosacademy_options['header-r3-col'] >= 7 OR $mosacademy_options['header-r3-col'] <= 11) {
                if ($mosacademy_options['header-r3-col'] == 7) 
                    $header_layout .= '[element_start name="div" class="col-md-4"]';
                if ($mosacademy_options['header-r3-col'] == 8 OR $mosacademy_options['header-r3-col'] == 9 OR $mosacademy_options['header-r3-col'] == 11 ) 
                    $header_layout .= '[element_start name="div" class="col-md-3"]';
                if ($mosacademy_options['header-r3-col'] == 10) 
                    $header_layout .= '[element_start name="div" class="col-md-6"]';
                
                $header_layout .= $mosacademy_options['header-r3-col-3'];
                $header_layout .= '[element_end name="div"]';                
            }
            if ($mosacademy_options['header-r3-col'] == 11) {
                $header_layout .= '[element_start name="div" class="col-md-3"]';                
                $header_layout .= $mosacademy_options['header-r3-col-4'];
                $header_layout .= '[element_end name="div"]';                
            }
            $header_layout .= '[element_end name="div" class="row"]';
        }        
        $header_layout .= layout_end ($mosacademy_options['header-r3-width']);
        $header_layout .= '[element_end name="div" class="bottom-header"]';
    }
}

do_action( 'action_before_header', $page_details );
echo do_shortcode( $header_layout );
do_action( 'action_after_header', $page_details );

?>        

        </div>
    </header>
<?php 
do_action( 'action_below_header', $page_details );
$hide_title = get_post_meta( get_the_ID(), '_mosacademy_page_title', true );



if (!is_front_page()) :
    $banner_image = get_post_meta( get_the_ID(), '_mosacademy_banner_image', true );
    do_action( 'action_avobe_title', $page_details );
?>
    <section id="page-title" <?php if ($banner_image) echo 'style="background-image: url('.$banner_image.');"'?> >
        <div class="content-wrap">
            <?php do_action( 'action_before_title', $page_details ); ?>
            <span>
        	<?php 
        	if (is_home()) 
                echo get_the_title( get_option('page_for_posts', true) );
            elseif (is_single()) {
                if($mosacademy_options['single-blog-title-option'] == 2 AND $mosacademy_options['single-blog-title'])
                    echo $mosacademy_options['single-blog-title'];
                else the_title();
            }
            elseif (is_404()) {                    
                _e($mosacademy_options['404-page-title']);
            }
            elseif (is_search()){
                _e('Search reasult for ');
                echo get_search_query();
            }
            //elseif (is_shop() OR is_product_category()){
            elseif (is_shop()){
                echo get_the_title( get_option('woocommerce_shop_page_id', true) );
            }
        	elseif(!$hide_title) the_title();
        	?>            	
            </span>
            <?php do_action( 'action_after_title', $page_details ); ?>
        </div>
    </section>
    <?php do_action( 'action_below_title', $page_details ); ?>
    <?php if ($mosacademy_options['sections-breadcrumbs-option']) : ?>
    <?php 
    $title = $mosacademy_options['sections-breadcrumbs-title'];
    $content = $mosacademy_options['sections-breadcrumbs-content'];
    ?>
    <section id="section-breadcrumbs">
        <div class="content-wrap">
            <?php do_action( 'action_before_breadcrumb', $page_details ); ?>
            <?php if ($title) : ?>              
                <div class="title-wrapper">
                    <h2 class="title"><?php echo do_shortcode( $title ); ?></h2>                
                </div>
            <?php endif; ?>
            <?php if ($content) : ?>                
                <div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
            <?php endif; ?>
            <?php mos_breadcrumbs() ?>
            <?php do_action( 'action_below_breadcrumb', $page_details ); ?>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>