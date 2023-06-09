<?php

$name = "eaw-".pathinfo(__FILE__, PATHINFO_FILENAME);;

$id = $name . "-". $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'eaw-feature has-slider wp-block-'.$name.' '.get_field("type").' ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if(is_admin()) {
    $className = 'is-admin '.$className;
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="<?php the_field("type");?>">
        <?php if(get_field("type") == "swiper"):?>
        <div class="inner">
            <?php $img = get_field("bild");?>
            <img src="<?php echo $img["url"];?>" alt="<?php echo $img["alt"];?>">
            <div>
                <h1><?php the_field("eyebrow");?></h1>
                <h2><?php the_field("headline");?></h2>
                <?php the_field("text"); ?>
                <?php if($link = get_field("link")):?>
                <p class="link"><a href="<?php echo $link["url"];?>" target="<?php echo $link["target"];?>" class="button"><?php echo $link["title"];?></a></p>
                <?php endif;?>
                <img src="<?php echo $img["url"];?>" alt="<?php echo $img["alt"];?>">
            </div>
        </div>
        <?php endif; ?>
        <div class="<?php the_field("type");?>-container">
            <div class="<?php the_field("type");?>-wrapper">
                <?php while(have_rows("artists")): the_row(); ?>
                <div class="<?php the_field("type");?>-slide" style="background-image: url(<?php the_sub_field("bg");?>)">
                    <?php $img = get_sub_field("bild");?>
                    <img src="<?php echo $img["url"];?>" alt="<?php echo $img["alt"];?>">
                    <div>
                        <h2><?php the_sub_field("name");?></h2>
                        <h3><?php the_sub_field("titel"); ?></h3>
                        <?php if($link = get_sub_field("link")):?>
                        <p class="link"><a href="<?php echo $link["url"];?>" target="<?php echo $link["target"];?>" class="button" style="background-color: <?php the_sub_field("farbe");?>"><?php echo $link["title"];?></a></p>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php if(get_field("type") == "swiper"):?>
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
        </div>
    </div>
</section>
