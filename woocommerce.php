<?php 
global $mosacademy_options;
$all_sections = get_post_meta( get_the_ID(), '_mosacademy_page_section_layout', true );
$sections = ( @$all_sections["Enabled"] ) ? @$all_sections["Enabled"] : $mosacademy_options['page-layout-settings']['Enabled'];
?>
<?php 
get_header(); 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_page', $page_details ); 
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
		?>
			<div class="<?php if($page_layout != 'ns') echo 'row'; else echo 'no-row' ?>">
				<div class="<?php if($page_layout != 'ns' ) echo 'col-md-8'; if($page_layout == 'ls') echo ' col-md-push-4' ?>">
				<?php woocommerce_content(); ?>
				</div>
			<?php if($page_layout != 'ns') : ?>
				<div class="page-widgets col-md-4 <?php if($page_layout == 'ls') echo 'col-md-pull-8' ?>">
					<?php get_sidebar('page');?>
				</div>
			<?php endif; ?>
			</div>
		<?php 
		/*
		* action_after_page hook
		* @hooked end_div 10
		*/
		do_action( 'action_after_page', $page_details ); 
		?>
	</div>
</section>
<?php do_action( 'action_below_page', $page_details ); ?>
<?php if($sections ) { foreach ($sections as $key => $value) { get_template_part( 'template-parts/section', $key );}}?>
<?php get_footer(); ?>