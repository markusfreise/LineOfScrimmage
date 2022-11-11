<?php

$name = "ff-".pathinfo(__FILE__, PATHINFO_FILENAME);;

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
 </section>