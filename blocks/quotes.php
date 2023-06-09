<?php

$name = "eaw-".pathinfo(__FILE__, PATHINFO_FILENAME);;

$id = $name . "-". $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'eaw-feature has-slider wp-block-'.$name;
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if(is_admin()) {
    $className = 'is-admin '.$className;
}

?>
<section  id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php while(have_rows("zitate")): the_row(); ?>
            <div class="swiper-slide">
                <div class="quote">
                    <div class="quote__author">
                        <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.99674 35L0 30.0373C3.30076 27.8607 5.7329 25.51 7.29642 22.9851C8.9468 20.4602 9.77199 17.3259 9.77199 13.5821L8.33876 4.96269L13.6808 11.6231C12.899 12.4067 12.1173 12.9726 11.3355 13.3209C10.6406 13.6692 9.77199 13.8433 8.72964 13.8433C6.90554 13.8433 5.29859 13.2774 3.90879 12.1455C2.519 11.0137 1.8241 9.40299 1.8241 7.31343C1.8241 5.04975 2.47557 3.26493 3.7785 1.95896C5.08143 0.652985 6.73181 0 8.72964 0C11.3355 0 13.3333 1.04478 14.7231 3.13433C16.1998 5.13682 16.9381 8.05348 16.9381 11.8843C16.9381 17.1082 15.722 21.592 13.2899 25.3358C10.9446 29.1667 7.51357 32.3881 2.99674 35ZM26.0586 35L23.0619 30.0373C26.3627 27.8607 28.7948 25.51 30.3583 22.9851C32.0087 20.4602 32.8339 17.3259 32.8339 13.5821L31.4007 4.96269L36.7427 11.6231C35.9609 12.4067 35.1792 12.9726 34.3974 13.3209C33.7025 13.6692 32.8339 13.8433 31.7915 13.8433C29.9674 13.8433 28.3605 13.2774 26.9707 12.1455C25.5809 11.0137 24.886 9.40299 24.886 7.31343C24.886 5.04975 25.5375 3.26493 26.8404 1.95896C28.1433 0.652985 29.7937 0 31.7915 0C34.3974 0 36.3952 1.04478 37.785 3.13433C39.2617 5.13682 40 8.05348 40 11.8843C40 17.1082 38.7839 21.592 36.3518 25.3358C34.0065 29.1667 30.5755 32.3881 26.0586 35Z" fill="#9C1006"/></svg><span><?php the_sub_field("quelle"); ?></span>
                    </div>
                    <div class="quote__content">
                        <?php the_sub_field("zitat"); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
    </div>
    </div>
    <?php if(count(get_field("zitate"))>1):?>
    <div class="swiper-nav">
        <div class="swiper-button">
            <img src="<?php echo get_template_directory_uri();?>/images/Prev.svg" class="prev">
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button">
            <img src="<?php echo get_template_directory_uri();?>/images/Next.svg" class="next">
        </div>
    </div>
    <?php endif; ?>
</section>