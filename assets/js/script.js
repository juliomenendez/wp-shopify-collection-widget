(function(root, $) {
    $(document).ready(function() {
        $('.shopfy-collection-widget').flexslider({
            namespace: 'shopfy-collection-widget',
            animation: 'slide',
            selector: '.shopify-collection-widget-slides li',
            maxItems: 1,
            controlNav: false,
            directionNav: false
        });
    });
})(window, jQuery);