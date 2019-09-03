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
          'title'     => __( 'Option Types', 'Shaccs ' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'Shaccs ' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'Shaccs ' ) . '</p>'
    ),
	
	//Option Section
	
    'sections'        => array( 
    
      
      array(
            'id'  => 'header',
            'title' => __( 'Header Section', 'Shaccs ' ),

            ),
   	
     

      array(
    		'id'  => 'footer',
    		'title' => __( 'Footer Section', 'Shaccs ' ),
    	    ), 
   
    		
    ),
	
	//Option Settings & Header section
	
    'settings'        => array( 
    
    
     array(
    		'id' => 'logo',
    		'label' => 'Logo',
    		'type' => 'tab',
    		'section' => 'header'
    ),


     array(
        'id'          => 'header_logo',
        'label'       => __( 'Header Main Logo', 'Shaccs ' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'header',
      ),
	  
      
      
 // Header Section 
        array(
      		'id' => 'header_id',
      		'label' => 'Header',
      		'type' => 'tab',
      		'section' => 'header'
      ),

     
      array(
      		'id' => 'headermenu1',
      		'label'=> 'Menu Header',
      		'type' => 'text',
      		'section' => 'header'
      ),
      
      array(
      		'id' => 'headerlink1',
      		'label' => 'Menu Link 1',
      		'type' => 'text',
      		'section' => 'header'
      ),
      
        
        array(
            'id' => 'headermenu2',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink2',
            'label' => 'Menu Link 2',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        
        array(
            'id' => 'headermenu3',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink3',
            'label' => 'Menu Link 3',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        
        array(
            'id' => 'headermenu4',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink4',
            'label' => 'Menu Link 4',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        array(
            'id' => 'headermenu5',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink5',
            'label' => 'Menu Link 5',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        array(
            'id' => 'headermenu6',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink6',
            'label' => 'Menu Link 6',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        array(
            'id' => 'headermenu7',
            'label'=> 'Menu Header',
            'type' => 'text',
            'section' => 'header'
        ),
        
        array(
            'id' => 'headerlink7',
            'label' => 'Menu Link 7',
            'type' => 'text',
            'section' => 'header'
        ),
        
        
        //Footer Section
        
     /*    array(
            'id' => 'footer_id',
            'lable' => 'Footer',
            'type' => 'tab',
            'section' => 'footer'
            ),
        array(
            'id' => 'footertitle',
            'lable' => 'Footer Title',
            'type' => 'text',
            'section' => 'footer'
        )
         */
        
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