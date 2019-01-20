<?php //admin settings page 

if(! defined ('ABSPATH')){

    exit;
  }

  
  function astrocustomizer_display_settings_page(){
    //check if user has adequate permissions
    if ( !current_user_can('manage_options')) return;

    ?>
	
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="wp-admin/options.php" method="post">
        
        <?php
        
        // output security fields
        settings_fields( 'astrocustomizer_options' );
        
        // output setting sections
        do_settings_sections( 'astro-customizer' );
        
        // submit button
        submit_button();
        
        ?>
        
      </form>
    </div>
    
    <?php
  }