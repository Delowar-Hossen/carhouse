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
add_action( 'admin_init', 'custom_meta_boxess' );
function custom_meta_boxess() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Products Details', 'theme-text-domain' ),
    'desc'        => 'Please Fill Up All Product Details',
    'pages'       => array( 'products' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Images Gallery', 'theme-text-domain' ),
        'id'          => 'images',
        'type'        => 'gallery',
        
      ),array(
        'label'       => __( 'Car Type', 'theme-text-domain' ),
        'id'          => 'cartype',
        'type'        => 'select',
        'choices'     => array(
            array(
              'label' => 'Select Type',
              'value' => '',
            ),
            array(
              'label' => 'Rent',
              'value' => 'Rent',
            ),
            array(
              'label' => 'Sale',
              'value' => 'Sale',
            )
          )
      ),array(
        'label'       => __( 'Price', 'theme-text-domain' ),
        'id'          => 'carprice',
        'type'        => 'text',
      ),array(
        'label'       => __( 'Car Color', 'theme-text-domain' ),
        'id'          => 'carcolor',
        'type'        => 'select',
        'choices'     => array(
            array(
              'label' => 'Select Color',
              'value' => '',
            ),
            array(
              'label' => 'White',
              'value' => 'White',
            ),
            array(
              'label' => 'Black',
              'value' => 'Black',
            ),
            array(
              'label' => 'Red',
              'value' => 'Red',
            )
          )
      ),array(
        'label'       => __( 'Year', 'theme-text-domain' ),
        'id'          => 'year',
        'type'        => 'text',
      ),array(
        'label'       => __( 'Body Style', 'theme-text-domain' ),
        'id'          => 'body_style',
        'type'        => 'text',
      ),array(
        'label'       => __( 'Engine', 'theme-text-domain' ),
        'id'          => 'engine',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Transmission', 'theme-text-domain' ),
        'id'          => 'transmission',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Drivetrain', 'theme-text-domain' ),
        'id'          => 'drivetrain',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Exaterion', 'theme-text-domain' ),
        'id'          => 'exaterion',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Interior', 'theme-text-domain' ),
        'id'          => 'interior',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Miles', 'theme-text-domain' ),
        'id'          => 'miles',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Doors', 'theme-text-domain' ),
        'id'          => 'doors',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Passengers', 'theme-text-domain' ),
        'id'          => 'passengers',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Vin#', 'theme-text-domain' ),
        'id'          => 'vin',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Fuel Mileage', 'theme-text-domain' ),
        'id'          => 'fuel',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Fuel Type', 'theme-text-domain' ),
        'id'          => 'fueltypes',
        'type'        => 'select',
        'choices'     => array(
            array(
              'label' => 'Select Warenty',
              'value' => '',
            ),
            array(
              'label' => 'Gasoline',
              'value' => 'Gasoline',
            ),
            array(
              'label' => 'Desel',
              'value' => 'Desel',
            ),
            array(
              'label' => 'Petrol',
              'value' => 'Petrol',
            ),
          ),
      ),array(
        'label'       => __( 'Condition', 'theme-text-domain' ),
        'id'          => 'condition',
        'type'        => 'select',
        'choices'     => array(
            array(
              'label' => 'Select Warenty',
              'value' => '',
            ),
            array(
              'label' => 'Brand New',
              'value' => 'Brand New',
            ),
            array(
              'label' => 'Re-Condition',
              'value' => 'Re-Condition',
            ),
          )
      ),array(
        'label'       => __( 'Owners', 'theme-text-domain' ),
        'id'          => 'owners',
        'type'        => 'select',
        'choices'     => array(
          array(
              'label' => 'Select Warenty',
              'value' => '',
            ),
          array(
              'label' => 'Owner',
              'value' => 'Owner',
            ),
          array(
              'label' => 'N/A',
              'value' => 'N/A',
            )
        ),
      ),array(
        'label'       => __( 'Wareanty', 'theme-text-domain' ),
        'id'          => 'wareanty',
        'type'        => 'select',
        'choices'     => array(
             array(
                'label'  => 'Select Warenty',
                'value'  => '',
              ),
            array(
                'label'  => '1 Year Warenty',
                'value'  => '1 Year Warenty',
              ),
            array(
                'label'  => '2 Year Warenty',
                'value'  => '2 Year Warenty',
              ),
            array(
                'label'  => '3 Year Warenty',
                'value'  => '3 Year Warenty',
              ),
            array(
                'label'  => '4 Year Warenty',
                'value'  => '4 Year Warenty',
              ),
            array(
                'label'  => '5 Year Warenty',
                'value'  => '5 Year Warenty',
              ),
        ),
      ),array(
        'label'       => __( 'Other Comments', 'theme-text-domain' ),
        'id'          => 'comments',
        'type'        => 'textarea'
      ),array(
        'label'       => __( 'Features & Options 1', 'theme-text-domain' ),
        'id'          => 'checkbox1',
        'type'        => 'checkbox',
        'choices'     => array(
             array(
                'label'  => 'Adaptive Cruise Control',
                'value'  => 'Adaptive Cruise Control',
              ),
             array(
                'label'  => 'Airbags',
                'value'  => 'Airbags',
              ),
             array(
                'label'  => 'Air Conditioning',
                'value'  => 'Air Conditioning',
              ),
             array(
                'label'  => 'Alarm System',
                'value'  => 'Alarm System',
              ),
             array(
                'label'  => 'Anti-theft Protection',
                'value'  => 'Anti-theft Protection',
              ),
             array(
                'label'  => 'Audio Interface',
                'value'  => 'Audio Interface',
              ),
             array(
                'label'  => 'Automatic Climate Control',
                'value'  => 'Automatic Climate Control',
              ),
             array(
                'label'  => 'Sound Package Plus',
                'value'  => 'Sound Package Plus',
              ),
             array(
                'label'  => 'Automatic Headlights',
                'value'  => 'Automatic Headlights',
              ),
             array(
                'label'  => 'Auto Start/Stop',
                'value'  => 'Auto Start/Stop',
              ),
            )
      ),array(
        'label'       => __( 'Features & Options 2', 'theme-text-domain' ),
        'id'          => 'checkbox2',
        'type'        => 'checkbox',
        'choices'     => array(
             array(
                'label'  => 'Bi-Xenon Headlights',
                'value'  => 'Bi-Xenon Headlights',
              ),
             array(
                'label'  => 'Audio Interface',
                'value'  => 'Audio Interface',
              ),
             array(
                'label'  => 'Bluetooth & Handset',
                'value'  => 'Bluetooth & Handset',
              ),
             array(
                'label'  => 'BOSE & Surround Sound',
                'value'  => 'BOSE & Surround Sound',
              ),
             array(
                'label'  => 'CD/DVD Autochanger',
                'value'  => 'CD/DVD Autochanger',
              ),
             array(
                'label'  => 'Cruise Control',
                'value'  => 'Cruise Control',
              ),
             array(
                'label'  => 'Power Steering',
                'value'  => 'Power Steering',
              ),
             array(
                'label'  => 'Leather Package',
                'value'  => 'Leather Package',
              ),
             array(
                'label'  => 'Voice Control System',
                'value'  => 'Voice Control System',
              ),
             array(
                'label'  => 'Seat Heating',
                'value'  => 'Seat Heating',
              ),
            )
      ),array(
        'label'       => __( 'Features & Options 3', 'theme-text-domain' ),
        'id'          => 'checkbox3',
        'type'        => 'checkbox',
        'choices'     => array(
             array(
                'label'  => 'Locking Rear Differential',
                'value'  => 'Locking Rear Differential',
              ),
             array(
                'label'  => 'Luggage Compartments',
                'value'  => 'Luggage Compartments',
              ),
             array(
                'label'  => 'Manual Transmission',
                'value'  => 'Manual Transmission',
              ),
             array(
                'label'  => 'Navigation Module',
                'value'  => 'Navigation Module',
              ),
             array(
                'label'  => 'Roll-over Protection',
                'value'  => 'Roll-over Protection',
              ),
             array(
                'label'  => 'Steering Wheel Heating',
                'value'  => 'Steering Wheel Heating',
              ),
             array(
                'label'  => 'Tire Pressure Monitoring',
                'value'  => 'Tire Pressure Monitoring',
              ),
             array(
                'label'  => 'Tire Pressure Monitoring',
                'value'  => 'Tire Pressure Monitoring',
              ),
             array(
                'label'  => 'Universal Audio Interface',
                'value'  => 'Universal Audio Interface',
              ),
             array(
                'label'  => 'Direct Fuel Injection',
                'value'  => 'Direct Fuel Injection',
              ),
            )
      ),array(
        'label'       => __( 'Layout / number of cylinders', 'theme-text-domain' ),
        'id'          => 'cylindernum',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Displacement', 'theme-text-domain' ),
        'id'          => 'displacement',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Engine Layout', 'theme-text-domain' ),
        'id'          => 'enginelayout',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Horespower', 'theme-text-domain' ),
        'id'          => 'horespower',
        'type'        => 'text'
      ),array(
        'label'       => __( '@ rpm', 'theme-text-domain' ),
        'id'          => 'rpm',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Torque', 'theme-text-domain' ),
        'id'          => 'torque',
        'type'        => 'text'
      ),array(
        'label'       => __( 'Compression ratio', 'theme-text-domain' ),
        'id'          => 'compressionratio',
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



