<?php
/* Plugin Name: AstroCustomizer 
   Description: A dashboard customization plugin for wordpress
   Plugin URI: https://astronushub.com
   Author: Kofi Cypher
   Version: 1.0
   License: GPL v2 or later
   License URI: https://www.gnu.org/licenses/gpl-2.0.txt

   This program is free software; you can redistribute it and/or
   modify it under the terms of the GNU General Public License
   as published by the Free Software Foundation; either version 
   2 of the License, or (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   with this program. If not, visit: https://www.gnu.org/licenses/
 */

  //exits if the file is called directly
  if(! defined ('ABSPATH')){

    exit;
  }

// check if admin area
  if ( is_admin() ){

    	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin_menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings_page.php';

  }

  