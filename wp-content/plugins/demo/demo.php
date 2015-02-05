<?php
/*
Plugin Name: Demo
Description: Demo wordpress plugin
Version: 1.0
Author: Me
Author URI: http://uri.com/
Plugin URI: http://uri.com/demo-plugin-info
*/

define('DEMO_DIR', plugin_dir_path(__FILE__));
define('DEMO_URL', plugin_dir_url(__FILE__));

function demo_load() {
    if(is_admin()) {
        require_once(DEMO_DIR .'includes/admin.php');
    }

    require_once(DEMO_DIR .'includes/core.php');
}
demo_load();