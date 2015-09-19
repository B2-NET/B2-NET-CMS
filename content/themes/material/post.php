<article id ="post-<?php echo $ID; ?>" class="mbd-layout-post">
<?php if(has_thumbnail($ID)): ?>
    <div class="mbd-layout-post-header thumbnail">
<?php else: ?>
    <div class="mbd-layout-post-header">
<?php endif; ?>
        <h2><?php get_post_title($ID); ?></h2>
    </div>
    <div class="mbd-layout-post-content">
        <?php get_post_preview($ID) ?>
    </div>
    <div class="mbd-layout-post-meta">
        <img src="<?php get_user_image_url(get_autor_id($ID)); ?>" class="mbd-layout-post-meta-image"/>
        <p class="mbd-layout-post-meta-autor"><?php get_user_name(get_autor_id($ID)); ?></p>
        <p class="mbd-layout-post-meta-date"><?php get_post_date($ID); ?></p>
    </div>
</article>