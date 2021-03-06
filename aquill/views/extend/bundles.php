<?php partial('partials/header'); ?>
<div class="container one-column">
    <?php echo $messages; ?>

    <div class="wrap">
        <article><h1>Bundles</h1></article>
        <?php foreach ($bundles as $bundle) : ?>
        <div class="bundle">
            <form class="bundleform" method="post" action="<?php echo url('admin/bundles/'.$bundle->view) ; ?>">

                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="bundle" value="<?php echo $bundle->view; ?>">

                <div class="bundle-info">
                    <h1 class="bundle-name"><?php echo $bundle->name; ?>
                        <label><input <?php echo in_array($bundle->view, $activation) ? 'checked' : ''; ?> type="checkbox" name="bundles" value="<?php echo $bundle->view; ?>"></label></h1>
                    <p class="bundle-author"><?php _e('global.bundle_author', array('author' => $bundle->author())); ?></p>
                    <p class="bundle-version"><?php _e('global.bundle_version'); ?><?php echo $bundle->version; ?></p>
                    <?php if ($bundle->description) : ?>
                    <p class="bundle-description"><?php _e('global.bundle_description'); ?><?php echo $bundle->description ; ?></p>
                    <?php endif; if ($bundle->tags) : ?>
                    <p class="bundle-tags"><?php _e('global.bundle_tags'); ?><?php echo $bundle->tags ; ?></p>
                    <?php endif; ?>
                    <p><button class="bundle-button"><?php in_array($bundle->view, $activation) ? _e('global.deactivate') : _e('global.activate') ;?></button></p>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php partial('partials/footer'); ?>
