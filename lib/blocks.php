<?php

add_action('acf/init', 'df_blocks');

function df_blocks() {

    $blocks = [
        [
            "slug" => "slider",
            "name" => "Slider"
        ],
        [
            "slug" => "zitat",
            "name" => "Zitat"
        ],
        [
            "slug" => "contactform",
            "name" => "Kontaktformular"
        ],
    ];

    if( function_exists('acf_register_block_type') ) {

        foreach($blocks as $block) {
            acf_register_block_type(array(
                'name'              => 'df-'.$block["slug"],
                'mode' => isset($block["mode"])?$block["mode"]:'auto',
                'title'             => $block["name"],
                'render_template'   => 'blocks/'.$block["slug"].'.php',
                'category'          => 'df',
                'icon'              => '<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="10.5" cy="10.5" r="10.5" fill="#e41e0c"/></svg>',
                'supports'			=> array(
                    'mode' => true,
                    'jsx' => true
                ),
            ));
        }


   }

}