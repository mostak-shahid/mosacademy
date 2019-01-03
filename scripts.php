<?php 
global $mosacademy_options; 
function gradient_manager($options) {
	$from = $options['from'];
	$to = $options['to'];
	echo 'background: '.$from.';';
	echo 'background: -moz-linear-gradient(top,  '.$from.' 0%, '.$to. ' 100%);';
	echo 'background: -webkit-linear-gradient(top,  '.$from.' 0%, '.$to. ' 100%);';
	echo 'background: linear-gradient(to bottom, '.$from.' 0%, '.$to. ' 100%);';
	echo 'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="'.$from.'", endColorstr="'.$to.'",GradientType=0 );';
}
function background_manager ($options) {
    foreach ($options as $key => $value){
		if($key != 'media' AND $value) {
			if( $key !='background-image') {
				echo $key . ':' . $value . ';';
			} else {
				echo $key . ':url(' . $value . ');';					
			}
		}
    }
}
function rgba_manager ($options) {
	echo 'background-color: '. $options['rgba'];
}
function mosacademy_theme_css () {
	global $mosacademy_options; 
?>
<style>
.scrollup {	
    background-image: url('<?php echo get_template_directory_uri() ?>/images/icon_top.png');
}
#thanks-page {
	background-image: url('<?php echo get_template_directory_uri() ?>/images/thank-you-1-bg.jpg');
}

<?php if ($mosacademy_options['basic-styling-primary-color']) : ?>
	<?php if ($mosacademy_options['basic-styling-primary-color-background']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-primary-color-background'],',') ?> {
			background-color: <?php echo $mosacademy_options['basic-styling-primary-color']; ?>;
		}
	<?php endif; ?>
	<?php if ($mosacademy_options['basic-styling-primary-color-text']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-primary-color-text'],',') ?> {
			color: <?php echo $mosacademy_options['basic-styling-primary-color']; ?>;
		}
	<?php endif; ?>
	<?php if ($mosacademy_options['basic-styling-primary-color-border']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-primary-color-border'],',') ?> {
			border-color: <?php echo $mosacademy_options['basic-styling-primary-color']; ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>
<?php if ($mosacademy_options['basic-styling-secondary-color']) : ?>
	<?php if ($mosacademy_options['basic-styling-secondary-color-background']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-secondary-color-background'],',') ?> {
			background-color: <?php echo $mosacademy_options['basic-styling-secondary-color']; ?>;
		}
	<?php endif; ?>
	<?php if ($mosacademy_options['basic-styling-secondary-color-text']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-secondary-color-text'],',') ?> {
			color: <?php echo $mosacademy_options['basic-styling-secondary-color']; ?>;
		}
	<?php endif; ?>
	<?php if ($mosacademy_options['basic-styling-secondary-color-border']) : ?>		
		<?php echo rtrim($mosacademy_options['basic-styling-secondary-color-border'],',') ?> {
			border-color: <?php echo $mosacademy_options['basic-styling-secondary-color']; ?> !important;
		}
	<?php endif; ?>

<?php endif; ?>
body {<?php 
	if ($mosacademy_options['typography-body-font']['color']) echo 'color: ' . $mosacademy_options['typography-body-font']['color'] . ';';
	if ($mosacademy_options['typography-body-font']['font-style']) echo 'font-style: ' . $mosacademy_options['typography-body-font']['font-style'] . ';';
	if ($mosacademy_options['typography-body-font']['font-family']) echo 'font-family: ' . $mosacademy_options['typography-body-font']['font-family'] . ';';
	if ($mosacademy_options['typography-body-font']['font-size']) echo 'font-size: ' . $mosacademy_options['typography-body-font']['font-size'] . ';';
	if ($mosacademy_options['typography-body-font']['font-height']) echo 'line-height: ' . $mosacademy_options['typography-body-font']['font-height'] . ';';
	if ($mosacademy_options['typography-body-font']['font-weight']) echo 'font-weight: ' . $mosacademy_options['typography-body-font']['font-weight'] . ';';
	?>}
.se-pre-con {
<?php if ($mosacademy_options['misc-page-loader-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['misc-page-loader-background-gradient'])?>
<?php elseif ($mosacademy_options['misc-page-loader-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['misc-page-loader-background-solid'])?>
<?php elseif ($mosacademy_options['misc-page-loader-background-type'] == 3 AND $mosacademy_options['misc-page-loader-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['misc-page-loader-background-rgba'])?>
<?php endif; ?>}
#top-header {
<?php if ($mosacademy_options['header-top-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['header-top-background-gradient'])?>
<?php elseif ($mosacademy_options['header-top-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['header-top-background-solid'])?>
<?php elseif ($mosacademy_options['header-top-background-type'] == 3 AND $mosacademy_options['header-top-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['header-top-background-rgba'])?>
<?php endif; ?>}
#main-header {
<?php if ($mosacademy_options['header-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['header-background-gradient'])?>
<?php elseif ($mosacademy_options['header-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['header-background-solid'])?>
<?php elseif ($mosacademy_options['header-background-type'] == 3 AND $mosacademy_options['header-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['header-background-rgba'])?>
<?php endif; ?>}
#nav-area,
#nav-area .sub-menu li,
.small-header .small-nav .small-menu {
<?php if ($mosacademy_options['header-menu-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['header-menu-background-gradient'])?>
<?php elseif ($mosacademy_options['header-menu-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['header-menu-background-solid'])?>
<?php elseif ($mosacademy_options['header-menu-background-type'] == 3 AND $mosacademy_options['header-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['header-menu-background-rgba'])?>
<?php endif; ?>}
.small-header .small-nav .mobile-menu {
<?php if ($mosacademy_options['small-menu-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['small-menu-background-gradient'])?>
<?php elseif ($mosacademy_options['small-menu-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['small-menu-background-solid'])?>
<?php elseif ($mosacademy_options['small-menu-background-type'] == 3 AND $mosacademy_options['small-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['small-menu-background-rgba'])?>
<?php endif; ?>}
#page-title {
<?php if ($mosacademy_options['sections-title-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-title-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-title-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-title-background-solid'])?>
<?php elseif ($mosacademy_options['sections-title-background-type'] == 3 AND $mosacademy_options['sections-title-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-title-background-rgba'])?>
<?php endif; ?>}
#section-breadcrumbs {
<?php if ($mosacademy_options['sections-breadcrumbs-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-breadcrumbs-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-breadcrumbs-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-breadcrumbs-background-solid'])?>
<?php elseif ($mosacademy_options['sections-breadcrumbs-background-type'] == 3 AND $mosacademy_options['sections-breadcrumbs-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-breadcrumbs-background-rgba'])?>
<?php endif; ?>}
#section-banner {
<?php if ($mosacademy_options['sections-banner-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-banner-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-banner-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-banner-background-solid'])?>
<?php elseif ($mosacademy_options['sections-banner-background-type'] == 3 AND $mosacademy_options['sections-banner-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-banner-background-rgba'])?>
<?php endif; ?>}
.page-content {
<?php if ($mosacademy_options['sections-content-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-content-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-content-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-content-background-solid'])?>
<?php elseif ($mosacademy_options['sections-content-background-type'] == 3 AND $mosacademy_options['sections-content-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-content-background-rgba'])?>
<?php endif; ?>}
#section-service {
<?php if ($mosacademy_options['sections-service-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-service-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-service-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-service-background-solid'])?>
<?php elseif ($mosacademy_options['sections-service-background-type'] == 3 AND $mosacademy_options['sections-service-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-service-background-rgba'])?>
<?php endif; ?>}
#section-blog {
<?php if ($mosacademy_options['sections-blog-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-blog-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-blog-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-blog-background-solid'])?>
<?php elseif ($mosacademy_options['sections-blog-background-type'] == 3 AND $mosacademy_options['sections-blog-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-blog-background-rgba'])?>
<?php endif; ?>}
#section-button {
<?php if ($mosacademy_options['sections-button-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-button-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-button-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-button-background-solid'])?>
<?php elseif ($mosacademy_options['sections-button-background-type'] == 3 AND $mosacademy_options['sections-button-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-button-background-rgba'])?>
<?php endif; ?>}
#section-contact {
<?php if ($mosacademy_options['sections-contact-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-contact-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-contact-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-contact-background-solid'])?>
<?php elseif ($mosacademy_options['sections-contact-background-type'] == 3 AND $mosacademy_options['sections-contact-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-contact-background-rgba'])?>
<?php endif; ?>}
#section-welcome {
<?php if ($mosacademy_options['sections-welcome-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-welcome-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-welcome-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-welcome-background-solid'])?>
<?php elseif ($mosacademy_options['sections-welcome-background-type'] == 3 AND $mosacademy_options['sections-welcome-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-welcome-background-rgba'])?>
<?php endif; ?>}
#section-gallery {
<?php if ($mosacademy_options['sections-gallery-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-gallery-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-gallery-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-gallery-background-solid'])?>
<?php elseif ($mosacademy_options['sections-gallery-background-type'] == 3 AND $mosacademy_options['sections-gallery-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-gallery-background-rgba'])?>
<?php endif; ?>}
.sidebar {
<?php if ($mosacademy_options['sections-sidebar-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-sidebar-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-sidebar-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-sidebar-background-solid'])?>
<?php elseif ($mosacademy_options['sections-sidebar-background-type'] == 3 AND $mosacademy_options['sections-sidebar-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-sidebar-background-rgba'])?>
<?php endif; ?>}
#section-widgets {
<?php if ($mosacademy_options['sections-widgets-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-widgets-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-widgets-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-widgets-background-solid'])?>
<?php elseif ($mosacademy_options['sections-widgets-background-type'] == 3 AND $mosacademy_options['sections-widgets-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-widgets-background-rgba'])?>
<?php endif; ?>}
#footer {
<?php if ($mosacademy_options['sections-footer-background-type'] == 1) : ?>
	<?php gradient_manager($mosacademy_options['sections-footer-background-gradient'])?>
<?php elseif ($mosacademy_options['sections-footer-background-type'] == 2) : ?>
	<?php background_manager($mosacademy_options['sections-footer-background-solid'])?>
<?php elseif ($mosacademy_options['sections-footer-background-type'] == 3 AND $mosacademy_options['sections-footer-background-rgba']['rgba']) : ?>
	<?php rgba_manager($mosacademy_options['sections-footer-background-rgba'])?>
<?php endif; ?>}


<?php if ($mosacademy_options['sections-welcome-readmore'] == 'button' OR $mosacademy_options['sections-welcome-readmore'] == 'popup') : ?>
	.btn-welcome {
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_1']) : ?>
		background-color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_1'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_3']) : ?>
		color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_3'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_5']) : ?>
		border-width: <?php echo $mosacademy_options['sections-welcome-but']['text_field_5'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_6']) : ?>
		border-style: <?php echo $mosacademy_options['sections-welcome-but']['text_field_6'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_7']) : ?>
		border-color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_7'] ?>;
		<?php endif; ?>
		<?php if (isset($mosacademy_options['sections-welcome-but']['text_field_9'])) : ?>
		border-radius: <?php echo $mosacademy_options['sections-welcome-but']['text_field_9'] ?> !important;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_10']) : ?>
		margin: <?php echo $mosacademy_options['sections-welcome-but']['text_field_10'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_11']) : ?>
		padding: <?php echo $mosacademy_options['sections-welcome-but']['text_field_11'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_12']) : ?>
		font-size: <?php echo $mosacademy_options['sections-welcome-but']['text_field_12'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_13']) : ?>
		font-weight: <?php echo $mosacademy_options['sections-welcome-but']['text_field_13'] ?>;
		<?php endif; ?>
	}
	.btn-welcome:hover, .btn-welcome:focus, .btn-welcome:active, .btn-welcome:visited {
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_2']) : ?>
		background-color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_2'] ?>;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_4']) : ?>
		color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_4'] ?> !important;
		<?php endif; ?>
		<?php if ($mosacademy_options['sections-welcome-but']['text_field_8']) : ?>
		border-color: <?php echo $mosacademy_options['sections-welcome-but']['text_field_8'] ?>;
		<?php endif; ?>
	}
<?php endif; ?>
<?php if ($mosacademy_options['sections-welcome-readmore'] AND $mosacademy_options['sections-welcome-height']['height']) : ?>
	#section-welcome .desc {
		height: <?php echo $mosacademy_options['sections-welcome-height']['height']; ?>;
		<?php 
		if ($mosacademy_options['sections-welcome-bar']['text_field_1']) :
			$padding = max( intval( $mosacademy_options['sections-welcome-bar']['text_field_1'] ), intval( $mosacademy_options['sections-welcome-bar']['text_field_7'] ) ) + 10;
			$position = ( $mosacademy_options['sections-welcome-bar']['text_field_6'] ) ? $mosacademy_options['sections-welcome-bar']['text_field_6'] : 'right';
		?>
		padding-<?php echo $position?>: <?php echo  $padding ?>px;
		<?php endif ?>
	}
<?php endif;?>
</style>
<?php
}
add_action( 'wp_head', 'mosacademy_theme_css', 999, 1 );
function mosacademy_theme_js () {
	global $mosacademy_options; 
?>
<script>
	jQuery(document).ready(function($) {
	<?php if ($mosacademy_options['misc-cts-number']) : ?>
	<?php $text = ($mosacademy_options['misc-cts-text']) ? ($mosacademy_options['misc-cts-text']) : 'Show Number';?>
	<?php $limit = ($mosacademy_options['misc-cts-limit']) ? $mosacademy_options['misc-cts-limit'] : 2 ?>
		$('body').find('.clickToShow').each(function( number ) {
			var before_number = '';
			var number = $(this).attr('href').replace(/[a-z :]/gmi, "");
			var text = $(this).html();
			var numeric = text.match(/^[0-9 ]/gmi);
			if (numeric == 0){
				var slices = text.split(" ");
				var length = slices.length;
				if (length > 1) before_number = slices[0];
				else before_number = text.substring(0, <?php echo $limit?>);
				$( this ).css('display', 'none').after('<a class="clickToShowBtn" href="javascript:void(0)">'+before_number+' <?php echo $text ?>'+'</a>');
			}
		});

		$('.clickToShowBtn').click(function(){
		    $(this).toggle();
		    $(this).siblings('.clickToShow').toggle();
		});
	<?php endif; ?>
	<?php if ($mosacademy_options['misc-cts-small-number'] AND $mosacademy_options['misc-cts-small-number-text']) : ?>
		$('body').find('.phoneToShow').each(function( number ) {
			var text = $(this).html();
			<?php 
			$bign = 'hidden-xs hidden-sm hidden-md hidden-lg';
			$smalln = '';
			foreach ($mosacademy_options['misc-cts-small-number-devices'] as $device => $value) {
				if ($value) {
					$smalln .= $device . ' ';
					$bign = str_replace($device,"",$bign);
				}
			} 
			?>
			$( this ).html('<span class="<?php echo $smalln ?>">' + text + '</span>' + '<span class="<?php echo $bign ?>">' + '<?php echo  $mosacademy_options['misc-cts-small-number-text'] ?>' + '</span>')
		});
	<?php endif; ?>
	<?php if ($mosacademy_options['misc-cts-small-email'] AND $mosacademy_options['misc-cts-small-email-text']) : ?>
		$('body').find('.mailToShow').each(function( number ) {
			var text = $(this).html();
			<?php 
			$big = 'hidden-xs hidden-sm hidden-md hidden-lg';
			$small = '';
			foreach ($mosacademy_options['misc-cts-small-email-devices'] as $device => $value) {
				if ($value) {
					$small .= $device . ' ';
					$big = str_replace($device,"",$big);
				}
			} 
			?>
			$( this ).html('<span class="<?php echo $small ?>">' + text + '</span>' + '<span class="<?php echo $big ?>">' + '<?php echo  $mosacademy_options['misc-cts-small-email-text'] ?>' + '</span>')
		});
	<?php endif; ?>
		var owl_banner_owl = $('#section-banner-owl');
		owl_banner_owl.owlCarousel({
		    loop: true,
		    nav: true,
		    dots: true,
		    items:1,
		    margin: 0,	    	    
		    lazyLoad: true,
		    autoplay: true,
		    autoplayTimeout: 6000,
		    autoplayHoverPause: true,
		});
	<?php $service_layout = ($mosacademy_options['sections-service-layout']) ? $mosacademy_options['sections-service-layout'] : 3; ?>
		var owl_service_owl = $('#section-service-owl');
		owl_service_owl.owlCarousel({
		    loop: true,
		    nav: true,
		    dots: true,
		    margin: 0,	    	    
		    lazyLoad: true,
		    autoplay: true,
		    autoplayTimeout: 6000,
		    autoplayHoverPause: true,
		<?php if($service_layout ==1) : ?>
			items:1,
		<?php else : ?>
			responsive:{
				0: {
		    		items:1,
				},
				992: {
		    		items:2,
				},
				1200: {
		    		items:<?php echo $service_layout ?>,
				}
			}
		<?php endif; ?>
		});
		<?php 
		$blog_layout = ($mosacademy_options['sections-blog-layout']) ? $mosacademy_options['sections-blog-layout'] : 3; 
		?>
		var owl_blog_owl = $('#section-blog-owl');
		owl_blog_owl.owlCarousel({
		    loop: true,
		    nav: true,
		    dots: true,
		    margin: 0,	    	    
		    lazyLoad: true,
		    autoplay: true,
		    autoplayTimeout: 6000,
		    autoplayHoverPause: true,
		<?php if($blog_layout ==1) : ?>
			items:1,
		<?php else : ?>
			responsive:{
				0: {
		    		items:1,
				},
				992: {
		    		items:2,
				},
				1200: {
		    		items:<?php echo $blog_layout ?>,
				}
			}
		<?php endif; ?>		
		});
		<?php 
		$gallery_layout = ($mosacademy_options['sections-gallery-layout']) ? $mosacademy_options['sections-gallery-layout'] : 3; 
		?>
		var owl_gallery_owl = $('#section-gallery-owl');
		owl_gallery_owl.owlCarousel({
		    loop: true,
		    nav: true,
		    dots: true,
		    margin: 0,	    	    
		    lazyLoad: true,
		    autoplay: true,
		    autoplayTimeout: 6000,
		    autoplayHoverPause: true,
		<?php if($gallery_layout ==1) : ?>
			items:1,
		<?php else : ?>
			responsive:{
				0: {
		    		items:1,
				},
				992: {
		    		items:2,
				},
				1200: {
		    		items:<?php echo $gallery_layout ?>,
				}
			}
		<?php endif; ?>
		});
		var welcome_full_height;
		$(window).load(function(){
			welcome_height_management ();
		});
		function welcome_height_management () {
			$(".with-button").addClass("with-none");
			welcome_full_height = $(".with-none").height();
			$(".desc.with-none").removeClass("with-none");
			$(".with-button").height('<?php echo $mosacademy_options['sections-welcome-height']['height'] ?>');
		};

	    $(".btn-welcome.expand").click(function() {
	        $("#section-welcome .desc.with-button").animate({"height": welcome_full_height + "px"});
	        $(this).hide();
	        $(this).siblings(".bend").show();
	    });
	    $(".btn-welcome.bend").click(function() {
	        $("#section-welcome .desc.with-button").animate({"height": "<?php echo $mosacademy_options['sections-welcome-height']['height'] ?>"});
	        $(this).hide();
	        $(this).siblings(".expand").show();
	    });

		$('.with-scroll').slimScroll({
			height : '<?php echo $mosacademy_options['sections-welcome-height']['height'] ?>',
			railVisible : true,
			alwaysVisible : true,
			railOpacity : 1,
			opacity : 1,


			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_1']) : ?>
			size : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_1'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_2']) : ?>
			railColor : '<?php echo $mosacademy_options['sections-welcome-bar']['text_field_2']; ?>',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_3']) : ?>
			railborderWidth : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_3'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_4']) : ?>
			railborderColor : '<?php echo $mosacademy_options['sections-welcome-bar']['text_field_4']; ?>',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_5']) : ?>
			railBorderRadius : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_5'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_6']) : ?>
			position : '<?php echo $mosacademy_options['sections-welcome-bar']['text_field_6']; ?>',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_7']) : ?>
			barSize : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_7'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_8']) : ?>
			color : '<?php echo $mosacademy_options['sections-welcome-bar']['text_field_8']; ?>',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_9']) : ?>
			borderWidth : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_9'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_10']) : ?>
			borderColor : '<?php echo $mosacademy_options['sections-welcome-bar']['text_field_10']; ?>',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_11']) : ?>
			borderRadius : '<?php echo intval( $mosacademy_options['sections-welcome-bar']['text_field_11'] ); ?>px',
			<?php endif; ?>
			<?php if ($mosacademy_options['sections-welcome-bar']['text_field_1'] < $mosacademy_options['sections-welcome-bar']['text_field_7'] ) : 
				$distance = ( intval($mosacademy_options['sections-welcome-bar']['text_field_7']) - intval($mosacademy_options['sections-welcome-bar']['text_field_1']) ) / 2;
			?>
			distance : '<?php echo $distance ?>px',
			<?php endif; ?>


		});

	});
</script>
	<?php
}
add_action( 'wp_footer', 'mosacademy_theme_js', 998, 1 );