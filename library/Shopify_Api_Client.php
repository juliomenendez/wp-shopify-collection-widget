<?php
if(!class_exists('Shopify_Api_Client')) {
    class Shopify_Api_Client
    {
        private $urlPrefix;

        public function __construct()
        {
            $apiKey = get_option('shopify_api_id', '');
            $apiSecret = get_option('shopify_api_secret', '');
            $storeUrl = get_option('shopify_store_url', '');
            $this->urlPrefix = sprintf('https://%s:%s@%s', $apiKey, $apiSecret, $storeUrl);
        }

        public function getUrl($endpoint, $queryData=array())
        {
            $url = sprintf('%s/admin/%s.json', $this->urlPrefix, $endpoint);
            $query = http_build_query($queryData);
            if(strlen($query) > 0) {
                $url = sprintf('%s?%s', $url, $query);
            }
            return $url;
        }

        public function get($endpoint, $queryData)
        {
            $session = curl_init();
            $url = $this->getUrl($endpoint, $queryData);

            curl_setopt($session, CURLOPT_URL, $url);
            curl_setopt($session, CURLOPT_HTTPGET, 1);
            curl_setopt($session, CURLOPT_HEADER, false);
            curl_setopt($session, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
            curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($session, CURLOPT_SSL_VERIFYPEER,false);

            $response = curl_exec($session);
            curl_close($session);

            $json = json_decode($response);
            return $json;
        }
    }
}
