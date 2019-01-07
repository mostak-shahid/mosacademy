<?php 
global $mosacademy_options;
$grid = $mosacademy_options['blog-archive-grid'];
$zigzag = $mosacademy_options['blog-archive-section1-zigzag'];
if($grid == '4') { $colsize = 3; }
elseif($grid == '3') { $colsize = 4; }
elseif($grid == '2') { $colsize = 6; }
else { $colsize = 12; }
if (is_single()) $colsize = 12;
$n = 1;
$page_details = array( 'id' => get_the_ID(), 'template_file' => basename( get_page_template() ));

$page_for_posts = get_option( 'page_for_posts' );
$before_loop = get_post_meta( $page_for_posts, '_mosacademy_before_loop', true );
$after_loop = get_post_meta( $page_for_posts, '_mosacademy_after_loop', true ); 
do_action( 'action_before_loop_blog_page', $page_details ); 
if (is_home()) echo do_shortcode( $before_loop );
			?>
			<div class="blogs">
				<?php if ($colsize != 12) : ?>
					<div class="row">
				<?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ($colsize != 12) : ?>
				<div class="col-md-<?php echo $colsize?> <?php if ($colsize < 6 ) echo 'col-sm-6';?>">
				<?php endif; ?>
							<div class="blog-content<?php if ($mosacademy_options['blog-archive-content-layout'] == 2) echo ' row' ?>">
			                	<?php
			                	if ($mosacademy_options['blog-archive-content-layout'] == 2 AND $mosacademy_options['blog-archive-section1-width']) :
				                	$sec_1 = $mosacademy_options['blog-archive-section1-width'];
				                	$slice = explode("-",$sec_1);
				                	$num = 12 - end($slice);
				                	if (@$zigzag AND $n%2==0) $sec_1 .= ' ' . $slice[0] . '-' . $slice[1] . '-push-' . $num;
				                	$sec_2 = $slice[0] . '-' . $slice[1] . '-' . $num;
				                	if (@$zigzag AND $n%2==0) $sec_2 .= ' ' . $slice[0] . '-' . $slice[1] . '-pull-' . end($slice);
				                endif
			                	?>
			                	<div class="sec-1 <?php  echo $sec_1 ?>">
				                <?php if (@$mosacademy_options['blog-archive-section1']) : ?>
				                	<?php foreach ($mosacademy_options['blog-archive-section1'] as $shortcodes) : ?>
				                		<?php echo do_shortcode( $shortcodes ) ?>
				                	<?php endforeach; ?>
				                <?php endif; ?>
			                	</div>
			                	<div class="sec-2 <?php  echo $sec_2 ?>">
				                <?php if (@$mosacademy_options['blog-archive-section2']) : ?>		                		
				                	<?php foreach ($mosacademy_options['blog-archive-section2'] as $shortcodes) : ?>
				                		<?php echo do_shortcode( $shortcodes ) ?>
				                	<?php endforeach; ?>
				                <?php endif; ?>
			                	</div>  
			                </div> 

				<?php if ($colsize != 12) : ?>
				</div>
				<?php endif ?>

				<?php if ($grid > 1 AND $n%$grid == 0) echo '</div></div><div class="blogs"><div class="row">'; $n++;?>

			<?php endwhile;?>
				<?php if ($colsize != 12) : ?>
					</div>
				<?php endif; ?>
			</div>
<?php 
if (is_home()) echo do_shortcode( $after_loop );
do_action( 'action_after_loop_blog_page', $page_details );
?>

