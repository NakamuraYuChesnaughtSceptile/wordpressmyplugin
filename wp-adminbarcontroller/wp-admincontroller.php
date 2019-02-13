<?php
/*
Plugin Name: Admin bar controller
Plugin URI: https://nakamurascep.hatenablog.com/
Description: プレビュー時にadmin barを表示、非表示にするプラグインです。
Author: scepnakamura
Version: 1.0
Author URI: https://github.com/NakamuraYuChesnaughtSceptile
*/


/*  Copyright 2019 scepnakamura email:reshoniga.nakamura@gmail.com
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function adminbar_controller(){
  $url = get_option('siteurl');
  $url1 = $url . '/wp-content/plugins/wp-adminbarcontroller/wp-admin.css';
  $url2 = $url . '/wp-content/plugins/wp-adminbarcontroller/wp-adminmenubutton.js';
  $url = $_SERVER['REQUEST_URI'];
  if(!strstr($url,'wp-admin')){
    echo '<link rel="stylesheet" type="text/css" href="' . $url1 . '" />';
    echo '<script src="'. $url2 .'"></script>';
  }
}
add_action('admin_bar_menu', 'adminbar_controller', 9999);

?>

