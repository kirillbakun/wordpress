<?php
    /*
    Plugin Name: Get content
    Description: Plugin to get content from database
    Version: 1.0
    Author: Kirill
    */

    define('GET_CONTENT_DIR', plugin_dir_path(__FILE__));
    define('GET_CONTENT_URL', plugin_dir_url(__FILE__));

    function get_content_load() {
        if(is_admin()) {
            require_once(GET_CONTENT_DIR .'includes/admin.php');
        }

        require_once(GET_CONTENT_DIR .'includes/core.php');
    }
    get_content_load();