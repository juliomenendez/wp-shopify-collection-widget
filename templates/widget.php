<ul>
<?php foreach($products as $product): ?>
    <li>
        <a href="<?php echo sprintf($shopUrlFormat, $product->handle); ?>">
            <img src="<?php echo $product->images[0]->src; ?>" border="0" />
            <span><?php echo $product->title; ?></span>
        </a>
    </li>
<?php endforeach; ?>
</ul>
