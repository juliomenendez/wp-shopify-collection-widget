<div class="shopfy-collection-widget">
    <div class="shopify-collection-widget-slider-wrapper">
        <div class="shopify-collection-widget-slides">
            <ul>
            <?php foreach($products as $product): ?>
                <li>
                    <a class="product" href="<?php echo sprintf($shopUrlFormat, $product->handle); ?>">
                        <img src="<?php echo $product->images[0]->src; ?>" border="0" />
                        <span><?php echo $product->title; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="shopify-collection-widget-controls">
        </div>
    </div>
</div>