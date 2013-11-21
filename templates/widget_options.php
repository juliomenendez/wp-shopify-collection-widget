<p>
    <label for="<?php echo $this->get_field_id('collection_id'); ?>">Collection:</label>
    <select class="widefat" id="<?php echo $this->get_field_id('collection_id'); ?>" name="<?php echo $this->get_field_name('collection_id'); ?>">
    <?php foreach($collections as $collection): ?>
        <option value="<?php echo $collection->id; ?>" <?php if($collection->id == $collection_id): ?>selected="selected"<?php endif; ?>><?php echo $collection->title; ?></option>
    <?php endforeach; ?>
    </select>
</p>