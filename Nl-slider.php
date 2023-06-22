<?php
// Plugin Name: Nl-accordion
// Plugin URI: http://noleemits.agency
// Description: This is a plugin that creates an accordion
// Version: 1.0
// Author: Noleemits
// Author URI: http://noleemits.agency
// License: GPL2
// Path: Nl-accordion.php
// text domain: nl-accordion


if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('NL_Accordion')) {
    class NL_Accordion
    {
        function __construct()
        {
            $this->define_constants();
            require_once(NL_ACCORDION_PATH . 'post-types/class.NL-accordion-cpt.php');
            $NL_Accordion_Post_Type = new NL_Accordion_Post_Type();
        }
        //define constants
        public function define_constants()
        {
            define('NL_ACCORDION_PATH', plugin_dir_path(__FILE__));
            define('NL_ACCORDION_URL', plugin_dir_url('', __FILE__));
            define('NL_ACCORDION_VERSION', '1.0');
        }
        public static function activate()
        {
            update_option('rewrite_rules', '');
        }
        public static function deactivate()
        {
            flush_rewrite_rules();
        }
        public static function uninstall()
        {
            flush_rewrite_rules();
        }
    }
}

if (class_exists('NL_Accordion')) {
    register_activation_hook(__FILE__, array('NL_Accordion', 'activate'));
    register_deactivation_hook(__FILE__, array('NL_Accordion', 'deactivate'));
    register_uninstall_hook(__FILE__, array('NL_Accordion', 'uninstall'));
    $nl_accordion = new NL_Accordion();
}
