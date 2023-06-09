<?php get_header(); ?>
<article id="copy" <?php post_class("article"); ?>>
    <?php
    if (have_posts()) :
        the_post(); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
    <?php
    else : ?>
        <h1>Seite ohne Inhalt …</h1>
    <?php endif; ?>
</article>
<?php get_footer(); ?>