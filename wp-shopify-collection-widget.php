<?php
/**
 * Plugin Name: Shopify Collection Widget
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Creates widgets with collections from Shopify
 * Version: 1.0
 * Author: Julio Menendez
 * Author URI: http://juliomenendez.com
 * License: GPL2
 */

define('SHOPIFY_COLLECTION_WIDGET_DIR', plugin_dir_path(__FILE__));
define('SHOPIFY_COLLECTION_WIDGET_URL', plugins_url('/', __FILE__));

require_once(SHOPIFY_COLLECTION_WIDGET_DIR . 'library/Shopify_Collection_Widget.php');

$shopify_collection_widget = new Shopify_Collection_Widget();