<?php
$before_loop = get_post_meta( get_the_ID(), '_mosacademy_before_loop', true );
$after_loop = get_post_meta( get_the_ID(), '_mosacademy_after_loop', true );
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_before_loop_page', $page_details ); 
echo do_shortcode( $before_loop );
?>
<?php $page_layout = get_post_meta( get_the_ID(), '_mosacademy_page_layout', true )? get_post_meta( get_the_ID(), '_mosacademy_page_layout', true ) : $mosacademy_options['general-page-layout']; ?>

	<?php while ( have_posts() ) : the_post(); ?>				
		<?php if (has_post_thumbnail()):?>
			<div class="blog-img-container">
				<?php if($page_layout != 'ns') : ?>
				<?php the_post_thumbnail('blog-image', array('class' => 'img-responsive img-fluid img-blog img-centered'))?>
				<?php else : ?>
				<?php the_post_thumbnail('blog-image-full', array('class' => 'img-responsive img-fluid img-blog img-centered'))?>
				<?php endif; ?>
			</div>
		<?php endif;?>
		<div class="content">
			<?php the_content()?>
		</div>
	<?php endwhile;	?>
<?php 
echo do_shortcode( $after_loop );
do_action( 'action_after_loop_page', $page_details ); 
?>