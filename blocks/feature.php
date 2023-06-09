<?php

$name = "eaw-".pathinfo(__FILE__, PATHINFO_FILENAME);;

$id = $name . "-". $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'eaw-feature wp-block-'.$name;
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if(have_rows("features")) {
    $className .= ' has-slider';
}
$className .= ' '.get_field("farbe");

if(is_admin()) {
    $className = 'is-admin '.$className;
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div>
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
            </div>
        </div>
        <?php if(have_rows("features")): ?>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php while(have_rows("features")): the_row(); ?>
                <div class="swiper-slide">
                    <div>
                        <h2 class="h3"><?php the_sub_field("headline");?></h2>
                        <?php the_sub_field("text"); ?>
                        <?php if($link = get_sub_field("link")):?>
                        <p class="link"><a href="<?php echo $link["url"];?>" target="<?php echo $link["target"];?>" class="button" >Weiterlesen</a></p>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php if(count(get_field("features"))>1): ?>
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
        <?php endif; ?>
    </div>
</section>
