<?php
add_action( 'init', 'text_layout_manager' );
function text_layout_manager () {
    global $mosacademy_options;
    //Page Title
    if ($mosacademy_options['sections-title-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_title', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_title', 'start_row', 11, 1 );
        add_action( 'action_before_title', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_title', 'end_div', 10, 1 );
        add_action( 'action_after_title', 'end_div', 11, 1 );
        add_action( 'action_after_title', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-title-text-layout'] == 'container-fliud') {
        add_action( 'action_before_title', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_title', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-title-text-layout'] == 'container-full') {
        add_action( 'action_before_title', 'start_full_width', 10, 1 );
        add_action( 'action_after_title', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_title', 'start_container', 10, 1 );
        add_action( 'action_after_title', 'end_div', 10, 1 );
    }
    //Breadcrumbs
    if ($mosacademy_options['sections-breadcrumbs-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_breadcrumb', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_breadcrumb', 'start_row', 11, 1 );
        add_action( 'action_before_breadcrumb', 'start_container_col_10', 12, 1 );

        add_action( 'action_below_breadcrumb', 'end_div', 10, 1 );
        add_action( 'action_below_breadcrumb', 'end_div', 11, 1 );
        add_action( 'action_below_breadcrumb', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-breadcrumbs-text-layout'] == 'container-fliud') {
        add_action( 'action_before_breadcrumb', 'start_container_fluid', 10, 1 );
        add_action( 'action_below_breadcrumb', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-breadcrumbs-text-layout'] == 'container-full') {
        add_action( 'action_before_breadcrumb', 'start_full_width', 10, 1 );
        add_action( 'action_below_breadcrumb', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_breadcrumb', 'start_container', 10, 1 );
        add_action( 'action_below_breadcrumb', 'end_div', 10, 1 );
    }
    //Banner
    if ($mosacademy_options['sections-banner-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_banner_title', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_banner_title', 'start_row', 11, 1 );
        add_action( 'action_before_banner_title', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_banner_url', 'end_div', 10, 1 );
        add_action( 'action_after_banner_url', 'end_div', 11, 1 );
        add_action( 'action_after_banner_url', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-banner-text-layout'] == 'container-fliud') {
        add_action( 'action_before_banner_title', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_banner_url', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-banner-text-layout'] == 'container-full') {
        add_action( 'action_before_banner_title', 'start_full_width', 10, 1 );
        add_action( 'action_after_banner_url', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_banner_title', 'start_container', 10, 1 );
        add_action( 'action_after_banner_url', 'end_div', 10, 1 );
    }
    //Content
    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $post_id = url_to_postid( $url );
    $text_layout = ( get_post_meta( $post_id, '_mosacademy_text_layout', true ) ) ?  get_post_meta( $post_id, '_mosacademy_text_layout', true ) : $mosacademy_options['sections-contact-text-layout'];
    if ($text_layout == 'container-fliud-spacing') {
        add_action( 'action_before_page', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_page', 'start_row', 11, 1 );
        add_action( 'action_before_page', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_page', 'end_div', 10, 1 );
        add_action( 'action_after_page', 'end_div', 11, 1 );
        add_action( 'action_after_page', 'end_div', 12, 1 );   
    } elseif ($text_layout == 'container-fliud') {
        add_action( 'action_before_page', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_page', 'end_div', 10, 1 );
    } elseif ($text_layout == 'container-full') {
        add_action( 'action_before_page', 'start_full_width', 10, 1 );
        add_action( 'action_after_page', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_page', 'start_container', 10, 1 );
        add_action( 'action_after_page', 'end_div', 10, 1 );
    }
    //Service
    if ($mosacademy_options['sections-service-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_service', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_service', 'start_row', 11, 1 );
        add_action( 'action_before_service', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_service', 'end_div', 10, 1 );
        add_action( 'action_after_service', 'end_div', 11, 1 );
        add_action( 'action_after_service', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-service-text-layout'] == 'container-fliud') {
        add_action( 'action_before_service', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_service', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-service-text-layout'] == 'container-full') {
        add_action( 'action_before_service', 'start_full_width', 10, 1 );
        add_action( 'action_after_service', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_service', 'start_container', 10, 1 );
        add_action( 'action_after_service', 'end_div', 10, 1 );
    }
    //Blog
    if ($mosacademy_options['sections-blog-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_blog', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_blog', 'start_row', 11, 1 );
        add_action( 'action_before_blog', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_blog', 'end_div', 10, 1 );
        add_action( 'action_after_blog', 'end_div', 11, 1 );
        add_action( 'action_after_blog', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-blog-text-layout'] == 'container-fliud') {
        add_action( 'action_before_blog', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_blog', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-blog-text-layout'] == 'container-full') {
        add_action( 'action_before_blog', 'start_full_width', 10, 1 );
        add_action( 'action_after_blog', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_blog', 'start_container', 10, 1 );
        add_action( 'action_after_blog', 'end_div', 10, 1 );
    }
    //Button
    if ($mosacademy_options['sections-button-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_button', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_button', 'start_row', 11, 1 );
        add_action( 'action_before_button', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_button', 'end_div', 10, 1 );
        add_action( 'action_after_button', 'end_div', 11, 1 );
        add_action( 'action_after_button', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-button-text-layout'] == 'container-fliud') {
        add_action( 'action_before_button', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_button', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-button-text-layout'] == 'container-full') {
        add_action( 'action_before_button', 'start_full_width', 10, 1 );
        add_action( 'action_after_button', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_button', 'start_container', 10, 1 );
        add_action( 'action_after_button', 'end_div', 10, 1 );
    }
    //Contact
    if ($mosacademy_options['sections-contact-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_contact', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_contact', 'start_row', 11, 1 );
        add_action( 'action_before_contact', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_contact', 'end_div', 10, 1 );
        add_action( 'action_after_contact', 'end_div', 11, 1 );
        add_action( 'action_after_contact', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-contact-text-layout'] == 'container-fliud') {
        add_action( 'action_before_contact', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_contact', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-contact-text-layout'] == 'container-full') {
        add_action( 'action_before_contact', 'start_full_width', 10, 1 );
        add_action( 'action_after_contact', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_contact', 'start_container', 10, 1 );
        add_action( 'action_after_contact', 'end_div', 10, 1 );
    }
    //Welcome
    if ($mosacademy_options['sections-welcome-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_welcome', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_welcome', 'start_row', 11, 1 );
        add_action( 'action_before_welcome', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_welcome', 'end_div', 10, 1 );
        add_action( 'action_after_welcome', 'end_div', 11, 1 );
        add_action( 'action_after_welcome', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-welcome-text-layout'] == 'container-fliud') {
        add_action( 'action_before_welcome', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_welcome', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-welcome-text-layout'] == 'container-full') {
        add_action( 'action_before_welcome', 'start_full_width', 10, 1 );
        add_action( 'action_after_welcome', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_welcome', 'start_container', 10, 1 );
        add_action( 'action_after_welcome', 'end_div', 10, 1 );
    }

    //Gallery
    if ($mosacademy_options['sections-gallery-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_gallery', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_gallery', 'start_row', 11, 1 );
        add_action( 'action_before_gallery', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_gallery', 'end_div', 10, 1 );
        add_action( 'action_after_gallery', 'end_div', 11, 1 );
        add_action( 'action_after_gallery', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-gallery-text-layout'] == 'container-fliud') {
        add_action( 'action_before_gallery', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_gallery', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-gallery-text-layout'] == 'container-full') {
        add_action( 'action_before_gallery', 'start_full_width', 10, 1 );
        add_action( 'action_after_gallery', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_gallery', 'start_container', 10, 1 );
        add_action( 'action_after_gallery', 'end_div', 10, 1 );
    }
    //New Gallery
    if ($mosacademy_options['sections-newgallery-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_newgallery', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_newgallery', 'start_row', 11, 1 );
        add_action( 'action_before_newgallery', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_newgallery', 'end_div', 10, 1 );
        add_action( 'action_after_newgallery', 'end_div', 11, 1 );
        add_action( 'action_after_newgallery', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-newgallery-text-layout'] == 'container-fliud') {
        add_action( 'action_before_newgallery', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_newgallery', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-newgallery-text-layout'] == 'container-full') {
        add_action( 'action_before_newgallery', 'start_full_width', 10, 1 );
        add_action( 'action_after_newgallery', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_newgallery', 'start_container', 10, 1 );
        add_action( 'action_after_newgallery', 'end_div', 10, 1 );
    }
    //Widgets
    if ($mosacademy_options['sections-widgets-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_widgets', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_widgets', 'start_row', 11, 1 );
        add_action( 'action_before_widgets', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_widgets', 'end_div', 10, 1 );
        add_action( 'action_after_widgets', 'end_div', 11, 1 );
        add_action( 'action_after_widgets', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-widgets-text-layout'] == 'container-fliud') {
        add_action( 'action_before_widgets', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_widgets', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-widgets-text-layout'] == 'container-full') {
        add_action( 'action_before_widgets', 'start_full_width', 10, 1 );
        add_action( 'action_after_widgets', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_widgets', 'start_container', 10, 1 );
        add_action( 'action_after_widgets', 'end_div', 10, 1 );
    }
    //Footer
    if ($mosacademy_options['sections-footer-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_footer', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_footer', 'start_row', 11, 1 );
        add_action( 'action_before_footer', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_footer', 'end_div', 10, 1 );
        add_action( 'action_after_footer', 'end_div', 11, 1 );
        add_action( 'action_after_footer', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-footer-text-layout'] == 'container-fliud') {
        add_action( 'action_before_footer', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_footer', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-footer-text-layout'] == 'container-full') {
        add_action( 'action_before_footer', 'start_full_width', 10, 1 );
        add_action( 'action_after_footer', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_footer', 'start_container', 10, 1 );
        add_action( 'action_after_footer', 'end_div', 10, 1 );
    }
    //Blog Page
    $page_for_posts = get_option( 'page_for_posts' );
    $layout = get_post_meta( $page_for_posts, '_mosacademy_text_layout', true );
    if ($layout == 'container-fliud-spacing') {
        add_action( 'action_before_blog_page', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_blog_page', 'start_row', 11, 1 );
        add_action( 'action_before_blog_page', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_blog_page', 'end_div', 10, 1 );
        add_action( 'action_after_blog_page', 'end_div', 11, 1 );
        add_action( 'action_after_blog_page', 'end_div', 12, 1 );   
    } elseif ($layout == 'container-fliud') {
        add_action( 'action_before_blog_page', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_blog_page', 'end_div', 10, 1 );
    } elseif ($layout == 'container-full') {
        add_action( 'action_before_blog_page', 'start_full_width', 10, 1 );
        add_action( 'action_after_blog_page', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_blog_page', 'start_container', 10, 1 );
        add_action( 'action_after_blog_page', 'end_div', 10, 1 );
    }
    
}
add_action( 'action_before_section_blog_loop_item', 'action_before_general_blog_loop_item_fnc', 10, 1 );
function action_before_general_blog_loop_item_fnc () {
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
    $alt_tag = mos_alt_generator(get_the_ID());
} 
    ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    if (has_post_thumbnail()):
        $attachment_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
    ?>
        <div class="blog-img-container">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('col-4-full', array('class' => 'img-responsive img-fluid img-blog img-centered', 'alt' => $alt_tag['inner'] . get_the_title()))?></a>
        </div>
    <?php endif;
}

add_action( 'action_before_section_blog_loop_item_title', 'action_before_general_blog_loop_item_title_fnc', 10, 1 );
function action_before_general_blog_loop_item_title_fnc () {
    ?>
    <div class="content blog">
    <?php
}
add_action( 'action_section_blog_loop_item_title', 'action_blog_loop_general_item_title_fnc', 10, 1 );
function action_blog_loop_general_item_title_fnc () {
    if (is_single()) : ?>
        <h2 class="blog-title" title="<?php the_title(); ?>"><?php the_title(); ?></h2>
    <?php else : ?>
        <h2 class="blog-title" title="<?php the_title(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
    <?php endif;
}
add_action( 'action_after_blog_section_loop_item_title', 'action_general_post_meta_fnc', 5, 1 );
add_action( 'action_after_blog_section_loop_item_title', 'action_general_post_content_fnc', 10, 1 );
function action_general_post_meta_fnc () {
    global $mosacademy_options;
    if($mosacademy_options['blog-archive-meta']) : ?>
        <ul class="list-unstyled post-meta">
            <?php if($mosacademy_options['blog-archive-meta-options']['author']) : ?>
                <li><i class="fa fa-user"></i> <?php echo ucfirst(get_the_author()); ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['date']) : ?>
                <li><i class="fa fa-calendar"></i> <?php echo get_the_date('j M Y');  ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['tags']) : ?>
                <!-- <li><?php the_category( ', ' ); ?></li> -->
                <li><?php the_tags( '<i class="fa fa-tags"></i> Tags: ', ', ' ); ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['comment']) : ?>
                <li><i class="fa fa-comments"></i> <?php comments_popup_link( '0 Comments', '1 Comment', '% Comments' ); ?></li>
            <?php endif; ?>
        </ul>
    <?php endif;
}
function action_general_post_content_fnc() {
    global $mosacademy_options; 
    $excerpt = $mosacademy_options['blog-use-excerpt'];
    $limit = $mosacademy_options['blog-use-excerpt-limit'];
    $readmore = $mosacademy_options['blog-use-excerpt-readmore-text'];
    //edit_post_link( 'Edit Post' );
    if (is_single() OR !$excerpt) : ?>
        <div class="desc"><?php the_content()?></div>        
    <?php else: ?>
        <div class="desc"><?php echo wp_trim_words(get_the_content(), $limit, '')?></div>
        <a href="<?php the_permalink(); ?>" class="btn btn-blog"><?php echo $readmore?></a>
    <?php endif;
}
add_action( 'action_after_blog_section_loop_item', 'action_after_general_blog_loop_item_fnc', 10, 1 );
function action_after_general_blog_loop_item_fnc () {
    ?>
        </div>
    </div>
    <?php 
}

/*Final Blog looping*/
add_action( 'action_before_blog_page_loop_item', 'post_wrapper_start_fnc', 10, 1 );
add_action( 'action_before_blog_page_loop_item', 'post_img_container_start_fnc', 20, 1 );

add_action( 'action_before_blog_page_loop_item_title', 'post_thumbnail_fnc', 10, 1 );
add_action( 'action_before_blog_page_loop_item_title', 'post_meta_fnc', 20, 1 );
add_action( 'action_before_blog_page_loop_item_title', 'end_div', 30, 1 );

add_action( 'action_blog_page_loop_item_title', 'action_blog_loop_general_item_title_fnc', 10, 1 );
add_action( 'action_after_blog_page_loop_item_title', 'action_general_post_content_fnc', 10, 1 );
add_action( 'action_after_blog_page_loop_item_title', 'action_general_post_content_fnc', 10, 1 );


add_action( 'action_after_page_blog_loop_item', 'end_div', 10, 1 );/*end of post_wrapper_start_fnc*/

function post_wrapper_start_fnc () {
    ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
}
function post_img_container_start_fnc () {
    ?>
    <div class="blog-img-container">
    <?php 
}
function post_thumbnail_fnc() {
	global $mosacademy_options;
    ?>

    <?php 
    if (has_post_thumbnail()):
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
            $alt_tag = mos_alt_generator(get_the_ID());
        } 
        ?>
    	<?php if (is_single()) : ?>
        	<?php if($page_layout != 'ns') : ?>
        		<?php the_post_thumbnail('blog-image', array('class' => 'img-responsive img-fluid img-blog img-centered', 'alt' => $alt_tag['inner'] . get_the_title()))?>
        	<?php else : ?>
        		<?php the_post_thumbnail('blog-image-full', array('class' => 'img-responsive img-fluid img-blog img-centered', 'alt' => $alt_tag['inner'] . get_the_title()))?>
        	<?php endif; ?>
        <?php else : ?>
        	<?php
        	$img_url = get_the_post_thumbnail_url();
        	$width = ( $mosacademy_options['blog-archive-grid-img']['width'] ) ? $mosacademy_options['blog-archive-grid-img']['width'] : '750';
        	$height = ( $mosacademy_options['blog-archive-grid-img']['height'] ) ? $mosacademy_options['blog-archive-grid-img']['height'] : '750';
        	?>
        	<a href="<?php the_permalink() ?>"><img src="<?php echo aq_resize($img_url, $width, $height, true) ?>" alt="<?php echo $alt_tag['inner'] . get_the_title() ?>"></a>
        <?php endif ?>
    <?php endif;
}
function post_meta_fnc () {
    global $mosacademy_options;
    if($mosacademy_options['blog-archive-meta']) : ?>
        <ul class="list-unstyled post-meta">
            <?php if($mosacademy_options['blog-archive-meta-options']['date']) : ?>
                <li class="date"><i class="fa fa-calendar"></i> <?php echo get_the_date('j M Y');  ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['author']) : ?>
                <li class="author"><i class="fa fa-user"></i> <?php echo ucfirst(get_the_author()); ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['tags']) : ?>
                <li class="tags"><?php the_tags( '<i class="fa fa-tags"></i> ', ', ' ); ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['categories']) : ?>
                <li class="categories"><i class="fa fa-folder"></i> <?php the_category( ', ' ); ?></li>
            <?php endif; ?>
            <?php if($mosacademy_options['blog-archive-meta-options']['comment']) : ?>
                <li class="comments"><i class="fa fa-comments"></i> <?php comments_popup_link( '0 Comments', '1 Comment', '% Comments' ); ?></li>
            <?php endif; ?>
        </ul>
    <?php endif;
}


add_action( 'action_before_contact_form', 'contact_title_fnc', 10, 1 );
function contact_title_fnc () {
    global $mosacademy_options;
    $title = $mosacademy_options['sections-contact-title'];
    $content = $mosacademy_options['sections-contact-content'];
    ?>
    <?php if ($title) : ?> 
    <div class="title-wrapper">             
        <h2 class="title"><?php echo do_shortcode( $title ); ?></h2>
    </div>
    <?php endif; ?>
    <?php if ($content) : ?> 
    <div class="desc"><?php echo do_shortcode( $content ) ?></div>
    <?php endif; ?>
    <?php
}
add_action( 'action_contact_form', 'contact_form_fnc', 10, 1 );
function contact_form_fnc () {
    global $mosacademy_options;
    $short_code = $mosacademy_options['sections-contact-shortcode'];
    ?>
    <div class="form-wrapper">
    <?php echo do_shortcode( $short_code ); ?>
    </div>
    <?php  
}

add_action( 'action_below_footer', 'back_to_top_fnc', 10, 1 );
function back_to_top_fnc () {
    global $mosacademy_options;
    if ($mosacademy_options['misc-back-top']) :
    ?>
    <a href="javascript:void(0)" class="scrollup" style="display: none;"><img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/icon_top.png" alt="Back To Top"></a>
    <?php 
    endif;
}

add_action( 'mos_welcome_content', 'mos_welcome_content_fnc', 10, 1 );
add_action( 'mos_welcome_content', 'mos_welcome_media_fnc', 15, 1 );
function mos_welcome_content_fnc () {
    global $mosacademy_options;
    $title = $mosacademy_options['sections-welcome-title'];
    $content = $mosacademy_options['sections-welcome-content'];
    $image = wp_get_attachment_url( $mosacademy_options['sections-welcome-media']['id']);
    $image_align = $mosacademy_options['sections-welcome-media-align'];
    $readmore = $mosacademy_options['sections-welcome-readmore'];
    $url = $mosacademy_options['sections-welcome-url'];
    $cls = '';
    if($image_align == 'top') $cls = 'col-md-12 order-last';
    elseif($image_align == 'right') $cls = 'col-md-6';
    elseif($image_align == 'bottom') $cls = 'col-md-12';
    elseif($image_align == 'left') $cls = 'col-md-6 order-last';


    if ($readmore == 'scroll') $class = "with-scroll"; 
    elseif ($readmore == 'button') $class = "with-button"; 
    elseif ($readmore == 'popup') $class = "with-popup"; 
    elseif ($readmore == 'redirect') $class = "with-redirect"; 
    else $class = "with-none";
    if ($readmore == 'popup') : ?>
<!-- Modal -->
<div class="modal fade" id="welcomeModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo do_shortcode( $title ); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( $content );//the_content(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php endif;
    if ($image) echo '<div class="row"><div class="'. $cls .'">';
    if ($title) echo '<div class="title-wrapper"><h2 class="title">' . do_shortcode( $title ) . '</h2></div>';
    if ($content) echo '<div class="desc '.$class .'"> '.do_shortcode( $content ).'</div>';
    if ($readmore == 'button') echo '<a href="javascript:void(0)" class="btn btn-welcome expand">Read More</a><a href="javascript:void(0)" class="btn btn-welcome bend" style="display: none">Close</a>';
    elseif ($readmore == 'popup') echo '<a href="javascript:void(0)" class="btn btn-welcome popup" data-toggle="modal" data-target="#welcomeModal">Read More</a>';
    elseif ($readmore == 'redirect') echo '<a href="'.esc_sql( do_shortcode( $url ) ) .'" class="btn btn-welcome redirect">Read More</a>';
    if ($image) echo '</div>';
}
function mos_welcome_media_fnc () {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if ( is_plugin_active( 'mos-image-alt/mos-image-alt.php' ) ) {
        $alt_tag = mos_alt_generator(get_the_ID());
    } 
    global $mosacademy_options;    
    $image = wp_get_attachment_url( $mosacademy_options['sections-welcome-media']['id']);    
    $image_align = $mosacademy_options['sections-welcome-media-align'];
    $cls = '';
    if($image_align == 'top') $cls = 'col-md-12 order-first';
    elseif($image_align == 'right') $cls = 'col-md-6';
    elseif($image_align == 'bottom') $cls = 'col-md-12';
    elseif($image_align == 'left') $cls = 'col-md-6 order-first';
    if ($image) echo '<div class="'. $cls .'"><img class="img-responsive img-fluid img-centered img-welcome" src="'.$image.'" width="'.$mosacademy_options['sections-welcome-media']['width'].'" height="'.$mosacademy_options['sections-welcome-media']['height'].'" alt="'.$alt_tag['inner'] . $title.'"></div></div>';
}
add_action( 'action_after_gallery', 'gallery_link_func', 1, 1 );
function gallery_link_func($page_details){
    global $mosacademy_options;
    ?>

            <div class="row">
            <?php if($mosacademy_options['sections-gallery-view-more']['text_field_3']) echo '<div class="'.$mosacademy_options['sections-gallery-view-more']['text_field_3'].'">'; ?>
                <?php if ($mosacademy_options['sections-gallery-view-more']['text_field_1'] AND $mosacademy_options['sections-gallery-view-more']['text_field_2']) : ?>
                    <a class="gallery-link <?php echo do_shortcode( $mosacademy_options['sections-gallery-view-more']['text_field_4'] )  ?>" href="<?php echo do_shortcode( $mosacademy_options['sections-gallery-view-more']['text_field_2'] )  ?>"><?php echo do_shortcode( $mosacademy_options['sections-gallery-view-more']['text_field_1'] )  ?></a>
                <?php endif; ?>
            <?php if($mosacademy_options['sections-gallery-view-more']['text_field_3']) echo '</div>'; ?>
            </div>
    <?php
}




function start_container () { ?><div class="container"><?php }
function start_container_fluid () { ?><div class="container-fluid"><?php }
function start_full_width () { ?><div class="start_full_width"><?php }
function start_row () { ?><div class="row"><?php }
function start_container_col_10 () { ?><div class="col-lg-10 offset-lg-1"><?php }


function start_col_1 () { ?><div class="col-md-1"><?php }
function start_col_2 () { ?><div class="col-md-2"><?php }
function start_col_3 () { ?><div class="col-md-3"><?php }
function start_col_4 () { ?><div class="col-md-4"><?php }
function start_col_5 () { ?><div class="col-md-5"><?php }
function start_col_6 () { ?><div class="col-md-6"><?php }
function start_col_8 () { ?><div class="col-md-8"><?php }
function start_col_7 () { ?><div class="col-md-7"><?php }
function start_col_9 () { ?><div class="col-md-9"><?php }
function start_col_10 () { ?><div class="col-md-10"><?php }
function start_col_11 () { ?><div class="col-md-11"><?php }
function start_col_12 () { ?><div class="col-md-12"><?php }

function start_text_center () { ?><div class="text-center"><?php }
function start_text_right () { ?><div class="text-right"><?php }
function start_text_left () { ?><div class="text-left"><?php }
function end_div () { ?></div><?php }
/*function wpdocs_who_is_hook( $a, $b ) {
    echo '<code>';
        print_r( $a );
    echo '</code>';
 
    echo '<br />'.$b;
}
add_action( 'wpdocs_i_am_hook', 'wpdocs_who_is_hook', 10, 2 );
$a = array(
    'eye patch'  => 'yes',
    'parrot'     => true,
    'wooden leg' => 1
);
$b = __( 'And Hook said: "I ate ice cream with Peter Pan."', 'textdomain' ); 
do_action( 'wpdocs_i_am_hook', $a, $b );*/
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) AND $post->post_type == 'page' ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    } else {
        $classes[] = $post->post_type . '-archive';
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );