(function(root, $) {
    $(document).ready(function() {
        $('.shopify-collection-widget').flexslider({
            namespace: 'shopify-collection-widget',
            animation: 'slide',
            selector: '.shopify-collection-widget-slides li',
            maxItems: 1,
            controlNav: false,
            directionNav: false
        });
    });
})(window, jQuery);