<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Team Member Details', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'teams' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Designation', 'theme-text-domain' ),
        'id'          => 'designation',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Facebook', 'theme-text-domain' ),
        'id'          => 'facebook',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Twitter', 'theme-text-domain' ),
        'id'          => 'twitter',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Linkedin', 'theme-text-domain' ),
        'id'          => 'linkedin',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Google Plus', 'theme-text-domain' ),
        'id'          => 'google',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Rss', 'theme-text-domain' ),
        'id'          => 'rss',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Vimeo', 'theme-text-domain' ),
        'id'          => 'vimeo',
        'type'        => 'text'
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );

}