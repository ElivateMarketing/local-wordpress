<?php
/**
 * Plugin Name: Test Plugin
 * Plugin URI: https://example.com
 * Description: A test plugin for demonstration purposes.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 */

// Include the Composer autoload file at this entrypoint.
// This will allow the plugin to use the classes from the PhpSpreadsheet library.
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

// Include the ExcelReader class. We created this class for this demonstration.
use Test\Includes\ExcelReader;

/**
 * Adds a menu item to the admin menu.
 */
add_action('admin_menu', function() {
    add_menu_page('Excel Reader', 'Excel Reader', 'manage_options', 'excel-reader', function() {
        $filePath = plugin_dir_path(__FILE__) . 'example.xlsx';
        $reader = new ExcelReader();
        $data = $reader->readExcelFile($filePath);
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    });
});
