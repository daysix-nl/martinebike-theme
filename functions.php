<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );
/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,           
    [
        'slug'  => 'styling',
        'title' => 'styling',
        'icon'  => null
    ],  
    [
        'slug'  => 'main-blocks',
        'title' => 'main-blocks',
        'icon'  => null
    ],
    [
        'slug'  => 'hero',
        'title' => 'hero',
        'icon'  => null
    ],
    [
        'slug'  => 'card',
        'title' => 'card',
        'icon'  => null
    ],
    [
        'slug'  => 'list',
        'title' => 'list',
        'icon'  => null
    ],
    [
        'slug'  => 'Text',
        'title' => 'Text',
        'icon'  => null
    ],
    [
        'slug'  => 'Image',
        'title'  => 'Image',
        'icon'  => null
    ],
    [
        'slug'  => 'slider',
        'title'  => 'Slider',
        'icon'  => null
    ],
    [
        'slug'  => 'post',
        'title'  => 'post',
        'icon'  => null
    ],
    [
        'slug'  => 'other',
        'title'  => 'Other',
        'icon'  => null
    ],
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/



add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        $blocks = [
            [
                'name'              => 'hero-home',
                'title'             => __('Hero - Home'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-image',
                'title'             => __('Hero - Image'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-contact',
                'title'             => __('Hero - Contact'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-text-image',
                'title'             => __('Hero - text & Image'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'text-block',
                'title'             => __('Text - Block'),
                'description'       => __('A custom text block'),
                'category'          => 'Text',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'text-wysiwyg',
                'title'             => __('Text wysiwyg'),
                'description'       => __('A custom wysiwyg block'),
                'category'          => 'Text',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'Text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'text-wysiwyg-image',
                'title'             => __('Text - Image & wysiwyg'),
                'description'       => __('A custom wysiwyg block'),
                'category'          => 'Text',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'Text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'list-information',
                'title'             => __('List - Information'),
                'description'       => __('A custom list block'),
                'category'          => 'list',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'list'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'list-blocks',
                'title'             => __('List - Blocks'),
                'description'       => __('A custom list block'),
                'category'          => 'list',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'list'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'text-image',
                'title'             => __('Text - Image'),
                'description'       => __('A custom text block'),
                'category'          => 'Text',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-block',
                'title'             => __('Slider - Block'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-client',
                'title'             => __('Slider client'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'image-navigation',
                'title'             => __('Image - Navigation'),
                'description'       => __('A custom image block'),
                'category'          => 'Image',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'image-text',
                'title'             => __('Image - Text'),
                'description'       => __('A custom image block'),
                'category'          => 'Image',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'text'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-contact',
                'title'             => __('Contact - Block'),
                'description'       => __('A custom image block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-tables',
                'title'             => __('Tables'),
                'description'       => __('A custom tables block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-tables-explanation',
                'title'             => __('Tables - explanation'),
                'description'       => __('A custom tables explanation block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-news-featured',
                'title'             => __('News featured'),
                'description'       => __('A custom news block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-news',
                'title'             => __('News'),
                'description'       => __('A custom news block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
                   [
                'name'              => 'other-onderhoud',
                'title'             => __('Onderhoud'),
                'description'       => __('A custom news block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-quote-basic',
                'title'             => __('Quote - Basic'),
                'description'       => __('A custom quote block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_quote_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-quote-block',
                'title'             => __('Quote - Block'),
                'description'       => __('A custom image block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-call-to-action',
                'title'             => __('Call to Action'),
                'description'       => __('A custom call to action block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-accordion',
                'title'             => __('Accordion'),
                'description'       => __('A custom accordion block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-tripadvisor',
                'title'             => __('Tripadvisor'),
                'description'       => __('A custom tripadvisor block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-shop',
                'title'             => __('Shop'),
                'description'       => __('A custom Shop block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
              [
                'name'              => 'other-test-ride',
                'title'             => __('Test ride'),
                'description'       => __('A custom Shop block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'other-shop-post',
                'title'             => __('Shop - Post'),
                'description'       => __('A custom post block'),
                'category'          => 'other',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'other'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-blocks',
                'title'             => __('Card - Blocks'),
                'description'       => __('A custom image block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-information',
                'title'             => __('Card - Information'),
                'description'       => __('A custom image block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-faq',
                'title'             => __('Card - FAQ'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-route',
                'title'             => __('Card - Route'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
        ];

        foreach ($blocks as $block) {
            acf_register_block_type([
                'name'              => $block['name'],
                'title'             => $block['title'],
                'description'       => $block['description'],
                'render_template'   => 'blocks/'.$block['name'].'.php',
                'category'          => $block['category'],
                'icon'              => $block['icon'],
                'keywords'          => $block['keywords'],
                'supports'          => $block['supports'] ?? [],
                'example'           => $block['example'] ?? [],
            ]);
        }

        add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) use ($blocks) {
            if ($editor_context->name !== 'core/edit-post') {
                return $allowed_blocks;
            }

           $acf_blocks = []; 
            foreach ($blocks as $block) { 
                $acf_blocks[] = 'acf/' . $block['name'];
            }

            $core_blocks = [
                // 'core/paragraph',
                // 'core/heading',
            ];

            return array_merge($acf_blocks, $core_blocks);
        }, 10, 2);
    }
}, 10);

/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}


/*
|--------------------------------------------------------------------------
| Shortcode
|--------------------------------------------------------------------------
|
| 
| 
|
*/

add_shortcode('orange', function ($atts, $content = null) {
	return '<span class="text-orange">' . $content . '</span>';
});

add_shortcode('roze', function ($atts, $content = null) {
	return '<span class="text-roze">' . $content . '</span>';
});

add_shortcode('text-left', function ($atts, $content = null) {
	return '<div class="par-text-left">' . $content . '</div>';
});

add_shortcode('text-right', function ($atts, $content = null) {
	return '<div class="par-text-right">' . $content . '</div>';
});

add_shortcode('first-word', function ($atts, $content = null) {
	return '<span class="first-word">' . $content . '</span>';
});


add_filter('acf/format_value/type=text', 'do_shortcode');


/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Options - MENU
|--------------------------------------------------------------------------
|
| 
| 
|
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Opening Hours',
		'menu_title'	=> 'Opening Hours',
		'parent_slug'	=> 'options',
	));
}


/*
|--------------------------------------------------------------------------
| Post shop
|--------------------------------------------------------------------------
|
| 
| 
|
*/

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Shop';
        $labels->singular_name = 'Shop';
        $labels->add_new = 'Add Product';
        $labels->add_new_item = 'Add Product';
        $labels->edit_item = 'Edit Product';
        $labels->new_item = 'Product';
        $labels->view_item = 'View Product';
        $labels->search_items = 'Search Product';
        $labels->not_found = 'No Product found';
        $labels->not_found_in_trash = 'No Product found in Trash';
        $labels->all_items = 'All Product';
        $labels->menu_name = 'Shop';
        $labels->name_admin_bar = 'Shop';
}

add_action('init', 'init_remove_editor',100);

 function init_remove_editor(){
  $post_type = 'post';
  remove_post_type_support( $post_type, 'editor');
 }

/*
|--------------------------------------------------------------------------
| Post news
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function register_news_post_type_labels() {
    // Define de labels voor de custom posttype in de verschillende talen
    $labels = array(
        'name' => __('News', 'text-domain'),
        'singular_name' => __('News', 'text-domain'),
        'menu_name' => __('News', 'text-domain'),
        'name_admin_bar' => __('News', 'text-domain'),
        'add_new' => __('Add New', 'text-domain'),
        'add_new_item' => __('Add New News Item', 'text-domain'),
        'new_item' => __('New News Item', 'text-domain'),
        'edit_item' => __('Edit News Item', 'text-domain'),
        'view_item' => __('View News Item', 'text-domain'),
        'all_items' => __('All News Items', 'text-domain'),
        'search_items' => __('Search News Items', 'text-domain'),
        'not_found' => __('No News Items found', 'text-domain'),
        'not_found_in_trash' => __('No News Items found in trash', 'text-domain'),
        'parent_item_colon' => __('Parent News Item', 'text-domain'),
        'archives' => __('News Archives', 'text-domain'),
        'attributes' => __('News Attributes', 'text-domain'),
        'insert_into_item' => __('Insert into News Item', 'text-domain'),
        'uploaded_to_this_item' => __('Uploaded to this News Item', 'text-domain'),
        'featured_image' => __('Featured Image', 'text-domain'),
        'set_featured_image' => __('Set featured image', 'text-domain'),
        'remove_featured_image' => __('Remove featured image', 'text-domain'),
        'use_featured_image' => __('Use as featured image', 'text-domain'),
        'filter_items_list' => __('Filter News Items list', 'text-domain'),
        'items_list_navigation' => __('News Items list navigation', 'text-domain'),
        'items_list' => __('News Items list', 'text-domain'),
        'item_published' => __('News Item published', 'text-domain'),
        'item_published_privately' => __('News Item published privately', 'text-domain'),
        'item_reverted_to_draft' => __('News Item reverted to draft', 'text-domain'),
        'item_scheduled' => __('News Item scheduled', 'text-domain'),
        'item_updated' => __('News Item updated', 'text-domain'),
    );
    // Registreer de labels voor de custom posttype
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'exclude_from_search' => true,  
        'show_in_nav_menus' => false,
        'query_var' => true,
        'rewrite' => array('slug' => 'news'),
        'show_in_rest' => false,
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-insert',
        'supports' => array('title', 'thumbnail', 'editor' ),
    );
    register_post_type('news', $args);
}
add_action('init', 'register_news_post_type_labels');

function custom_post_type_polylang_support() {
    pll_register_string('Post Type Label', 'news', 'Custom Post Type Label');
    pll_register_string('Post Type Singular Label', 'news', 'Custom Post Type Singular Label');
}
add_action('init', 'custom_post_type_polylang_support');
