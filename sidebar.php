<?php global $mosacademy_options;?>
<div class="sidebar">
	<?php 
	$sidebar = ( get_post_meta( get_the_ID(), '_mosacademy_page_sidebar', true ) ) ? get_post_meta( get_the_ID(), '_mosacademy_page_sidebar', true ) : 'sidebar';
	if ( is_active_sidebar( $sidebar ) ) :
		dynamic_sidebar( $sidebar );
	endif; 
	?>
</div>