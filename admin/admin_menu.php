<?php //admin menu configuration

if(! defined ('ABSPATH')){

    exit;
  }

function astrocustomizer_add_top_level_menu()
{

  add_menu_page(
   'Astrocustomizer Settings',
   'Astrocustomizer',
   'manage_options',
   'astro-customizer',
   'astrocustomizer_display_settings_page',
   'dashicons-admin-generic',
   null
 );

 }

 add_action('admin_menu', 'astrocustomizer_add_top_level_menu');