<?php
require_once(SHOPIFY_COLLECTION_WIDGET_DIR . 'library/Shopify_Api_Client.php');

if(!class_exists('Shopify_Collection_Widget')) {
    class Shopify_Collection_Widget extends WP_Widget
    {
        private $apiClient;
        function __construct()
        {
            parent::__construct('shopify_collection_widget', 'Shopify Collection Widget', array('description' => 'A widget to display a collection from Shopify.'));

            $this->apiClient = new Shopify_Api_Client();
        }

        public function widget($args, $instance)
        {
            $response = $this->apiClient->get('products', array(
                'collection_id' => $instance['collection_id'],
                'published_status' => 'published'
            ));
            $products = $response->products;
            $shopUrlFormat = sprintf("https://%s/products/%%s", get_option('shopify_store_url', ''));
            include(sprintf('%s/templates/widget.php', SHOPIFY_COLLECTION_WIDGET_DIR));
        }

        public function form($instance)
        {
            $response = $this->apiClient->get('custom_collections');
            $collections = $response->custom_collections;
            $collection_id = $instance['collection_id'];
            include(sprintf('%s/templates/widget_options.php', SHOPIFY_COLLECTION_WIDGET_DIR));
        }

        public function update($new_instance, $old_instance)
        {
            $instance = array();

            $instance['collection_id'] = $new_instance['collection_id'];

            return $instance;
        }
    }
}