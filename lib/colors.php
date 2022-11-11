<?php

$df_colors = array(
	array(
		'name' => 'Rot',
		'slug' => 'df-corporate',
		'color' => '#AF0D21',
	),
	array(
		'name' => 'Copy',
		'slug' => 'df-copy',
		'color' => '#37343D',
	),
	array(
		'name' => 'Fond',
		'slug' => 'df-fond',
		'color' => '#f3efeb',
	),
	array(
		'name' => 'Weiß',
		'slug' => 'df-weiss',
		'color' => '#ffffff',
	)
);

function df_setup_colors()
{
	global $df_colors;

	add_theme_support('editor-color-palette', $df_colors);
}

add_action('after_setup_theme', 'df_setup_colors');

function df_do_colors() {
	global $df_colors;

	echo '<style type="text/css">';
	foreach($df_colors as $c) { ?>
		.has-<?php echo $c["slug"];?>-background-color {
			background-color: <?php echo $c["color"];?>;
		}

		.has-<?php echo $c["slug"];?>-color {
			color: <?php echo $c["color"];?>;
		}
	<?php }
	echo '</style>';
}
add_action( 'wp_head', 'df_do_colors' );

/*******************************************/
/*
/*  Dump the property names in the code for easy copying
*/

$dump = false;

if ($dump) {
    foreach ($df_colors as $c) { ?> 
		--c-<?php echo str_replace("df", "", $c["slug"]);?>: <?php echo $c["color"]; ?>;
	<?php }
    };