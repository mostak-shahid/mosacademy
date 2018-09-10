<?php /*Template Name: Home Page Template*/?>
<?php 
global $mosacademy_options;
$sections = $mosacademy_options['home-layout-settings']['Enabled'];
if($sections ) {
	$shift = array_shift($sections);
}
?>
<?php get_header(); ?>
<?php if($sections ) { foreach ($sections as $key => $value) { get_template_part( 'template-parts/section', $key );}}?>
<?php get_footer(); ?>
