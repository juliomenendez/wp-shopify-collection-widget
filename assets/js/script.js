(function(root, $) {
    $(document).ready(function() {
        $('.shopfy-collection-widget').flexslider({
            animation: 'slide',
            selector: '.shopify-collection-widget-slides ul > li',
            maxItems: 1,
            controlsContainer: $(this).find('.shopify-collection-widget-controls')
        });
    });
})(window, jQuery);