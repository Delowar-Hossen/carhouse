<?php
/********************************************** 
*  include another file .....
***********************************************
*/
include ('inc/shortcodes.php');
include ('inc/post_register.php');


/********************************************** 
*  Theme Supports  .....
***********************************************
*/
function carhouse_theme_supports(){

    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_image_size('team',265,202,true);
    add_image_size('dealer',90,90,true);
    add_image_size('recents',73,71,true);
    add_theme_support('post-formats', array('aside','image','video'));
    add_theme_support('html5', array('search-form'));
    add_filter( 'widget_text', 'do_shortcode');

}
add_action('after_setup_theme','carhouse_theme_supports');


/********************************************** 
*  Post read more function  ........
***********************************************
*/
function read_more($limit){
	$posts = explode(" ", get_the_content());
	$less_posts = array_slice($posts, 0, $limit);
	echo implode(' ', $less_posts);

}

/********************************************** 
*  Menu Register function ..........
***********************************************
*/
function carhouse_register_nav_menu(){
    register_nav_menus(array(
        'primary'   	=> __('Main Menu')
        ));
}
add_action('after_setup_theme','carhouse_register_nav_menu');


/********************************************** 
*  pagination function  ..........
***********************************************
*/
//  wpbeginner_numeric_posts_nav(); function call where you show..
function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul class="pagination theme-colored">' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul>' . "\n";

}



/********************************************** 
*  Option Tree Supports .....
***********************************************
*/
add_filter('ot_show_pages', '__return_false');
add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_theme_mode', '__return_true');
add_filter('ot_use_theme_option', '__return_true');

require_once dirname( __FILE__) .'/inc/option-tree/ot-loader.php';
require_once dirname( __FILE__) .'/inc/team-meta-boxes.php';
//require_once dirname( __FILE__) .'/inc/option-trees/ot-loader.php';
//require_once dirname( __FILE__) .'/inc/option-trees/product-meta-boxes.php';
require_once dirname( __FILE__) .'/inc/products-meta-boxes.php';
require_once dirname( __FILE__) .'/inc/theme-options.php';


function all_textarea_in_metabox($value, $id){

    if($id == 'comments'){
        $value = true;
    }
    return $value;

}
add_filter('ot_override_forced_textarea_simple', 'all_textarea_in_metabox',10,2);




/*
    Image Gallery call to gallery page..

    if(function_exists('ot_get_option')){
        $images = explode(',', get_post_meta(get_the_ID(), 'gallery', true));
        if(!empty($images)){
            foreach($images as $id){
                $img wp_get_attatchment_image_src($id,'');
                echo '<li><img src="'.$img[0].'"></li>';
            }
        }
    }


*/

/********************************************** 
*  Ajax Advanced Search  .....
***********************************************
*/
require_once('wp-advanced-search/wpas.php');


function ajax_advanced_search_form() {
    $args = array();
    $args['wp_query'] = array('post_type' => 'products',
                              'posts_per_page' => 5,
                              'order'         => 'DESC'
                              );
    $args['form'] = array('auto_submit' => true, 'class' => 'demo-ajax-form');
    $args['form']['ajax'] = array(
                              'enabled' => true,
                              'show_default_results' => true,
                              'results_template' => 'template-ajax-results.php',
                              'button_text' => 'Load More Results',
        );
    
    $meta_key = 'carprice';
    $args['fields'][] = array('type'  => 'meta_key', 
                            'meta_key'=>$meta_key,
                            'compare' => 'BETWEEN',
                            'data_type' => 'NUMERIC',
                            'group_method' => 'merge',
                            'inputs' => array(
                            array(
                                'format' => 'text',
                            ),
                            array(
                                'format' => 'text'
                            )
            ));

    
    $args['fields'][] = array('type'     => 'taxonomy',
                              'taxonomy' => 'brands',
                              'format'   => 'checkbox',
                              'class' => array('myclass', 'anotherclass')
                              );

    register_wpas_form('demo-ajax-form', $args);    
}
add_action('init', 'ajax_advanced_search_form');





/********************************************** 
*  Comment functions ..........
***********************************************
*/
function custom_comments($comment, $args, $depth){
    $GLOBALS['comment'] = $comment; ?>
    <li>
    <span class="user-image"><?php echo get_avatar($comment, $size='45'); ?></span>
     <span class="user-name"><?php
                printf(__('%s'), get_comment_author_link());
             ?></span>
    <span class="date"><i class="fa fa-clock-o"></i> <?php 
                $comment_date = get_comment_date( 'j.m.Y', $comment->comment_ID );
                echo $comment_date;
             ?></span>
    <span class="comment"> <?php if($comment->comment_approved == '0'): ?>
                <em><?php _e('Your Comment is waiting Moderation'); ?></em>
             <?php else: ?>
            <p><?php comment_text(); ?></p>
           
            <?php endif; ?></span>
    <div class="comment-footer">
        <a class="share-box"><span class="like"><i class="fa fa-heart"></i>Like</span></a>
        <a class="share-box"><span class="respond"><i class="fa fa-comment"></i>Respond</span></a>
        <a class="share-box"><span class="share-2"><i class="fa fa-share-alt"></i>Share</span></a>
    </div>
   
       
    </li>

<?php

}



