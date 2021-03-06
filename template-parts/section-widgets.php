<?php 
global $mosacademy_options;
$title = $mosacademy_options['sections-widgets-title'];
$content = $mosacademy_options['sections-widgets-content'];
$widget_layout = $mosacademy_options['sections-widgets-layout'];

if($widget_layout == '3') { $colsize = 4; }
elseif($widget_layout == '4') { $colsize = 3; }
elseif($widget_layout == '2') { $colsize = 6; }
else { $colsize = 12; }
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_widgets', $page_details ); 
?>
<section id="section-widgets">
	<div class="content-wrap">

		<?php 		
		/*
		* action_before_widgets hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_widgets', $page_details );  
		?>
		<?php if ($title) : ?>		
			<div class="title-wrapper">
				<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
			</div>
		<?php endif; ?>
		<?php if ($content) : ?>		
			<div class="content-wrapper"><?php echo do_shortcode( $content ); ?></h2></div>
		<?php endif; ?>
			<div class="row">
				<div class="col-lg-<?php echo $colsize; ?> widgets-wrapper widgets-one">
					<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_1' ); ?>
					<?php endif; ?>
				</div>
				<?php if($widget_layout != '1') : ?>
				<div class="col-lg-<?php echo $colsize; ?> widgets-wrapper widgets-two">
					<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_2' ); ?>
					<?php endif; ?>					
				</div>
				<?php endif; ?>
				<?php if($widget_layout == '3' OR $widget_layout == '4') : ?>
				<div class="col-lg-<?php echo $colsize; ?>  widgets-wrapper widgets-three">
					<?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_3' ); ?>
					<?php endif; ?>					
				</div>
				<?php endif; ?>
				<?php if($widget_layout == '4') : ?>
				<div class="col-lg-<?php echo $colsize; ?>  widgets-wrapper widgets-four">
					<?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_4' ); ?>
					<?php endif; ?>					
				</div>
				<?php endif; ?>
			</div>
		<?php 
		/*
		* action_after_service hook
		* @hooked end_div 10
		*/
		do_action( 'action_after_widgets', $page_details );  
		?>
		
	</div>
</section>
<?php do_action( 'action_below_widgets', $page_details );  ?>