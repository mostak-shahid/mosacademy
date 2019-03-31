<?php 
global $mosacademy_options;
$avobe_page = get_post_meta( get_the_ID(), '_mosacademy_avobe_page', true );
$before_page = get_post_meta( get_the_ID(), '_mosacademy_before_page', true );
$after_page = get_post_meta( get_the_ID(), '_mosacademy_after_page', true );
$below_page = get_post_meta( get_the_ID(), '_mosacademy_below_page', true );
$sidebar = get_post_meta( get_the_ID(), '_mosacademy_page_sidebar', true );


$page_for_posts = get_option( 'page_for_posts' );
$blog_sections = get_post_meta( $page_for_posts, '_mosacademy_page_section_layout', true )['Enabled'];

$all_sections = get_post_meta( get_the_ID(), '_mosacademy_page_section_layout', true );

if (sizeof(@$all_sections["Enabled"]) > 1) $sections = $all_sections["Enabled"];
else $sections = $blog_sections;
?>
<?php 
get_header(); 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_page', $page_details ); 
echo do_shortcode( $avobe_page );
?>

<?php $page_layout = get_post_meta( get_the_ID(), '_mosacademy_page_layout', true )? get_post_meta( get_the_ID(), '_mosacademy_page_layout', true ) : $mosacademy_options['general-page-layout']; ?>
<section id="page" class="page-content">
	<div class="content-wrap">
		<?php 
		/*
		* action_before_page hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_page', $page_details ); 
		echo do_shortcode( $before_page );
		?>
			<?php if($page_layout != 'ns') : ?>
			<div class="row">
				<div class="<?php if($page_layout != 'ns' ) echo 'col-md-8'; if($page_layout == 'ls') echo ' col-md-push-4' ?>">
			<?php endif; ?>
				<?php if ( have_posts() ) :?>	
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php do_action( 'action_before_page_content_area', $page_details ); ?>					
					<?php get_template_part( 'content', 'page' ) ?>
					<?php do_action( 'action_after_page_content_area', $page_details ); ?>
					</div>
				<?php endif; ?>
				<div class="post-linking">
					<div class="row">
						<div class="col-md-6 text-left">								
							<?php previous_post_link("%link", "Previous Post") ; ?>
						</div>
						<div class="col-md-6 text-right">
							<?php next_post_link("%link", "Next Post"); ?>
						</div>						
					</div>
				</div>
				<?php if ($mosacademy_options['single-blog-comment']) : ?>
					<?php if ($mosacademy_options['single-blog-comment-style'] == 'fb') : ?>
						<?php require_once ('functions/facebook-comments.php') ?>
					<?php else : ?>							
						<?php if (comments_open() || '0' != get_comments_number()) : comments_template(); endif;?>
					<?php endif; ?>
				<?php endif; ?>
			<?php if($page_layout != 'ns') : ?>
				</div>
				<div class="page-widgets col-md-4 <?php if($page_layout == 'ls') echo 'col-md-pull-8' ?>">
					<?php get_sidebar($sidebar);?>
				</div>
			</div>
			<?php endif; ?>
		<?php 
		/*
		* action_after_page hook
		* @hooked end_div 10
		*/
		echo do_shortcode( $after_page ); 
		do_action( 'action_after_page', $page_details );
		?>
	</div>
</section>
<?php 
echo do_shortcode( $below_page );
do_action( 'action_below_page', $page_details ); 
?>
<?php if($sections ) { foreach ($sections as $key => $value) { get_template_part( 'template-parts/section', $key );}}?>
<?php get_footer(); ?>