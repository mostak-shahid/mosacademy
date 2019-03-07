<?php 
global $mosacademy_options;
$animation = $mosacademy_options['sections-newgallery-animation'];
$animation_delay = ( $mosacademy_options['sections-newgallery-animation-delay'] ) ? $mosacademy_options['sections-newgallery-animation-delay'] : 0;
$title = $mosacademy_options['sections-newgallery-title'];
$content = $mosacademy_options['sections-newgallery-content'];
$gallery = $mosacademy_options['sections-newgallery-gallery'];
$large_size = $mosacademy_options['sections-newgallery-large-size'];
$gap = $mosacademy_options['sections-newgallery-gap'];
$layout = $mosacademy_options['sections-newgallery-layout'];
$gal_url = $mosacademy_options['sections-newgallery-url'];
$zoom = $mosacademy_options['sections-newgallery-zoom'];
if (@$zoom['attachment_id']) $zoom_url = wp_get_attachment_url( $zoom['attachment_id'] );
elseif (@$zoom['url']) $zoom_url = $zoom['url'];
else $zoom_url = get_template_directory_uri() . '/images/zoom.png';



include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
	$alt_tag = mos_alt_generator(get_the_ID());
} 
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));
do_action( 'action_avobe_newgallery', $page_details ); 
?>
<section id="section-newgallery" <?php if ($animation) echo 'data-wow-delay="'.$animation_delay.'s" class="wow '.$animation.'"' ?>>
	<div class="content-wrap">
		
		<?php 
		/*
		* action_before_newgallery hook
		* @hooked start_container 10 (output .container)
		*/
		do_action( 'action_before_newgallery', $page_details ); 
		?>
				<?php if ($title) : ?>				
					<div class="title-wrapper">
						<h2 class="title"><?php echo do_shortcode( $title ); ?></h2>				
					</div>
				<?php endif; ?>
				<?php if ($content) : ?>				
					<div class="content-wrapper"><?php echo do_shortcode( $content ) ?></div>
				<?php endif; ?>
				<?php if (@$gallery) : ?>
				<div class="main-grid <?php if (@$gap[1]) echo 'gap-30' ?>">
					<?php 
					if(@$gap[1]) {
						$wide_w = 750;
						$wide_h = 360;
						$tall_w = 360;
						$tall_h = 750;
						$med_w = $med_h = 360;
					} else {
						$wide_w = 760;
						$wide_h = 380;
						$tall_w = 380;
						$tall_h = 760;
						$med_w = $med_h = 380;						
					}
					$i = $j = 1;
					?>
					<?php $attachment_ids = explode(',', $gallery); ?>
					<?php foreach ($attachment_ids as $attachment_id) : ?>
						<?php 
						$attachment_url = wp_get_attachment_url( $attachment_id );
						$attachment_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

						if (($j%2==0 AND $i==2) OR ($j%2!=0 AND $i==1)) :
							$img_url = aq_resize(wp_get_attachment_url( $attachment_id ), $wide_w, $wide_h, true);
							$con_class= "eight";
							$width = $wide_w;
							$height = $wide_h;
						elseif (($j%2==0 AND $i==1) OR ($j%2!=0 AND $i==2)) :
							$img_url = aq_resize(wp_get_attachment_url( $attachment_id ), $tall_w, $tall_h, true);
							$con_class= "four merge-two-rows"; 
							$width = $tall_w;
							$height = $tall_h;
						else : 
							$img_url = aq_resize(wp_get_attachment_url( $attachment_id ), $med_w, $med_w, true);
							$con_class= "four";
							$width = $med_w;
							$height = $med_w;
						endif; ?>	
							<div class="<?php echo $con_class; ?>">
								<a href="<?php if ($large_size == 'max') echo aq_resize($attachment_url, 1920); elseif ($large_size == 'container') echo aq_resize($attachment_url, 1140); else echo $attachment_url ?>" data-fancybox="gallery" data-caption="">
									<img class="img-responsive img-fluid img-gallery img-<?php echo $attachment_id?>" src="<?php echo $img_url ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" alt="<?php echo $alt_tag['inner'] . $attachment_alt ?>" >
									<span class="hover"><img src="<?php echo $zoom_url ?>" alt="Zoom"></span>
								</a>
							</div>
						<?php 
						if ($i%4==0) {
							$j++; 
							$i=0;
						}
						$i++;
						?>
					<?php endforeach ?>
				</div>

					<?php if (@$gal_url) : ?>
						<div class="row"><div class="col-md-4 col-md-offset-4"><a class="btn btn-block btn-gallery" href="<?php echo esc_url( do_shortcode( $gal_url ) ) ?>">View More</a></div></div>
					<?php endif ?>
				<?php endif ?>
		<?php 
		/*
		* action_after_newgallery hook
		* @hooked end_div 10 
		*/
		do_action( 'action_after_newgallery', $page_details ); 
		?>	
	</div>
</section>
<?php do_action( 'action_below_newgallery', $page_details  ); ?>
<style>
.styling {
    background-color: rgba(224,18,101,0.5);
    color: #fff;
    border: 1px #E01266 solid;
    border-radius: 4px;
    padding: 12px;
}
</style>