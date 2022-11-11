<h1><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Weblog</a></h1>
<?php
if (is_category()) :
?>
    <p class="category">
        Alles zu <?php echo single_cat_title(); ?>
    </p>
<?php
elseif (is_author()) :
?>
    <p class="category">
        Alles zu <?php echo get_the_author(); ?>
    </p>
<?php
endif;
?>