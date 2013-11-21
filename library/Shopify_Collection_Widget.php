<?php
if(!class_exists('Shopify_Collection_Widget')) {
    class Shopify_Collection_Widget
    {
        private $settings_page = 'general';
        private $settings_section = 'general_options_section';

        public function __construct()
        {
            add_action('admin_init', array(&$this, 'admin_init'));
        }

        public function admin_init()
        {
            add_settings_section($this->settings_section, 'Shopify Collection Widget Settings', array(&$this, '_admin_settings_section_callback'), $this->settings_page);

            add_settings_field('shopify_api_id', 'API Key', array(&$this, '_admin_settings_api_id_callback'), $this->settings_page, $this->settings_section, array());
            add_settings_field('shopify_api_secret', 'API Secret', array(&$this, '_admin_settings_api_secret_callback'), $this->settings_page, $this->settings_section, array());

            register_setting('general', 'shopify_api_id');
            register_setting('general', 'shopify_api_secret');
        }

        public function _admin_settings_section_callback()
        {
            include(sprintf('%s/templates/settings_section.php', SHOPIFY_COLLECTION_WIDGET_DIR));
        }

        public function _admin_settings_api_id_callback($args)
        {
            include(sprintf('%s/templates/settings_api_id.php', SHOPIFY_COLLECTION_WIDGET_DIR));
        }

        public function _admin_settings_api_secret_callback($args)
        {
            include(sprintf('%s/templates/settings_api_secret.php', SHOPIFY_COLLECTION_WIDGET_DIR));
        }
    }
}
