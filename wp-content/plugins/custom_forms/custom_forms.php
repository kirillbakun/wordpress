<?php
    /*
    Plugin Name: Custom forms
    Description: Implementation of site custom forms functionality
    Version: 1.0
    Author: Kirill
    */

    define('CUSTOM_FORMS_DIR', plugin_dir_path(__FILE__));
    define('CUSTOM_FORMS_URL', plugin_dir_url(__FILE__));

    function custom_forms_load() {
        if(is_admin()) {
            require_once(CUSTOM_FORMS_DIR .'includes/admin.php');
        }

        require_once(CUSTOM_FORMS_DIR .'includes/core.php');
    }
    custom_forms_load();