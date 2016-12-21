<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'option_types',
        'title'       => __( 'Header', 'theme-text-domain' )
      ),array(
        'id'          => 'about_types',
        'title'       => __( 'About Page', 'theme-text-domain' )
      ),array(
        'id'          => 'about_moreinfo',
        'title'       => __( 'About Page More Info', 'theme-text-domain' )
      ),array(
        'id'          => 'contact_us',
        'title'       => __( 'Contact Page sidebar', 'theme-text-domain' )
      ),array(
        'id'          => 'footer_types',
        'title'       => __( 'Footer', 'theme-text-domain' )
      )
    ),
    'settings'        => array( 
       array(
        'id'          => 'home_logo',
        'label'       => __( 'Home Page Logo', 'theme-text-domain' ),
        'desc'        => 'Upload Logo ',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
      ), array(
        'id'          => 'phone_num',
        'label'       => __( 'Contact Number', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Contact Number.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ), array(
        'id'          => 'email_con',
        'label'       => __( 'Email Address', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Contact Email Address.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ), array(
        'id'          => 'footer_detail',
        'label'       => __( 'Footer Details', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Company policy ...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer_types',
      ), array(
        'id'          => 'footer_offer',
        'label'       => __( 'Footer We Offer', 'theme-text-domain' ),
        'desc'        => 'Please Input What We Offer ...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer_types',
      ), array(
        'id'          => 'footer_gallery',
        'label'       => __( 'Footer Gallery', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Footer Gallery Photo ...',
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'footer_types',
      ), array(
        'id'          => 'policy',
        'label'       => __( 'Company Policy', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Company policy ...',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_types',
      ), array(
        'id'          => 'conyoutube',
        'label'       => __( 'Contact Page Youtube Video Link', 'theme-text-domain' ),
        'desc'        => 'Please Input valid youtube embed video link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_types',
      ), array(
        'id'          => 'welcometitle',
        'label'       => __( 'WELCOME SECTION TITLE', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Title',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_types',
      ), array(
        'id'          => 'welcomecontact',
        'label'       => __( 'WELCOME SECTION CONTACT', 'theme-text-domain' ),
        'desc'        => 'Please Input Your welcom message ...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_types',
      ), array(
        'id'          => 'welcometitle2',
        'label'       => __( 'WELCOME SECTION TITLE', 'theme-text-domain' ),
        'desc'        => 'Please Input Your Title',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_types',
      ), array(
        'id'          => 'welcomecontact2',
        'label'       => __( 'WELCOME SECTION CONTACT', 'theme-text-domain' ),
        'desc'        => 'Please Input Your welcom message ...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_types',
      ), array(
        'id'          => 'moreinfortitle1',
        'label'       => __( 'FIRST TITLE', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO Title...',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_moreinfo',
      ), array(
        'id'          => 'moreinforcont1',
        'label'       => __( 'MORE INFO FIRST CONTACT', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO CONTACT...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_moreinfo',
      ), array(
        'id'          => 'moreinfortitle2',
        'label'       => __( 'SECOND TITLE', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO Title...',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_moreinfo',
      ),array(
        'id'          => 'moreinforcont2',
        'label'       => __( 'MORE INFO SECOND CONTACT', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO CONTACT...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_moreinfo',
      ), array(
        'id'          => 'moreinfortitle3',
        'label'       => __( 'THIRD TITLE', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO Title...',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'about_moreinfo',
      ),array(
        'id'          => 'moreinforcont3',
        'label'       => __( 'MORE INFO THIRD CONTACT', 'theme-text-domain' ),
        'desc'        => 'Please Input MORE INFO CONTACT...',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'about_moreinfo',
      ),array(
        'id'          => 'contact_address',
        'label'       => __( 'Address Details', 'theme-text-domain' ),
        'desc'        => 'Please Input Address Details...',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_office',
        'label'       => __( 'Office Phone Number', 'theme-text-domain' ),
        'desc'        => 'Please Input Office Phone Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_mobile',
        'label'       => __( 'Office Mobile Number', 'theme-text-domain' ),
        'desc'        => 'Please Input Office Mobile Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_email',
        'label'       => __( 'Office Email Address', 'theme-text-domain' ),
        'desc'        => 'Please Input Office Email',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_mobile_s',
        'label'       => __( 'Sales Department Mobile Number', 'theme-text-domain' ),
        'desc'        => 'Please Input Sales Department Mobile Number',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_facebook',
        'label'       => __( 'Facebook Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Facebook Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_twitter',
        'label'       => __( 'Twitter Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Twitter Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_linkedin',
        'label'       => __( 'Linkdin Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Linkedin Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_google',
        'label'       => __( 'Google+ Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Google Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_rss',
        'label'       => __( 'RSS Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Rss Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),array(
        'id'          => 'contact_vimeo',
        'label'       => __( 'VIMEO Link', 'theme-text-domain' ),
        'desc'        => 'Please Input Vimeo Link',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_us',
      ),
    ),
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}