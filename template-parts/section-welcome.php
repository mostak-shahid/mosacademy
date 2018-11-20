<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-welcome-animation'];
$animation_delay = ( $mosacademy_options['sections-welcome-animation-delay'] ) ? $mosacademy_options['sections-welcome-animation-delay'] : 0;


$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_welcome', $page_details ); 
?>
<section id="section-welcome" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">	
		<?php 
		/*
		* action_before_welcome hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_welcome', $page_details ); 
		?>
		<?php do_action( 'mos_welcome_content', $page_details ); ?>

		<?php 
		/*
		* action_after_welcome hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_welcome', $page_details ); 
		?>	

	</div>
</section>
<?php do_action( 'action_below_welcome', $page_details  ); ?>