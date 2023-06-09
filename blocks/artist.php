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
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="artist" style="background-image: url(<?php the_sub_field("bg");?>)">
        <?php $img = get_field("bild");?>
        <img src="<?php echo $img["url"];?>" alt="<?php echo $img["alt"];?>">
        <div>
            <p><?php the_field("titel"); ?></p>
            <h2><?php the_field("name");?></h2>
            <p><?php the_field("text");?></p>
            <?php if($link = get_field("link")):?>
            <p class="link"><a href="<?php echo $link["url"];?>" target="<?php echo $link["target"];?>" class="button" style="background-color: <?php the_sub_field("farbe");?>"><?php echo $link["title"];?></a></p>
            <?php endif;?>
        </div>
    </div>
</div>
