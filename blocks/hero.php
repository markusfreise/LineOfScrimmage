<?php

$name = "eaw-".pathinfo(__FILE__, PATHINFO_FILENAME);;

$id = $name . "-". $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'wp-block-'.$name;
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if(is_admin()) {
    $className = 'is-admin '.$className;
}

?>
<section  id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div>
    <div class="inner" style="background-image: url(<?php the_field("bg");?>);">
        <?php $img = get_field("bild");?>
        <img src="<?php echo $img["url"];?>" alt="<?php echo $img["alt"];?>">
        <div>
            <h1><?php the_field("headline");?></h1>
            <h2><?php the_field("subline");?></h2>
        </div>
    </div>
</div>
 </section>