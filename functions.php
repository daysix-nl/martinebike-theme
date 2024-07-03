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
    // Lees de versie uit het bestand
    $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.2, true);
     wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.2, true);
    
    // Voeg CSS-bestanden toe aan de queue met een versienummer
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), $version);
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwindcss-styles/style.css', array(), $version);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $version);
    
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
      wp_enqueue_style( 'gutenberg',  'https://hostdashboard.nl/devdocs/css/gutenberg.css');
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
                'name'              => 'text-empty',
                'title'             => __('Empty space'),
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
                'name'              => 'other-form-newsletter',
                'title'             => __('Newsletter - Block'),
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
                'name'              => 'other-client-logo',
                'title'             => __('Client Logo'),
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

        acf_add_options_sub_page(array(
		'page_title' 	=> 'Pop-up',
		'menu_title'	=> 'Pop-up',
		'parent_slug'	=> 'options',
	));

       acf_add_options_sub_page(array(
		'page_title' 	=> 'Categorie teksten',
		'menu_title'	=> 'Categorie teksten',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Client logos',
		'menu_title'	=> 'Client logos',
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

// function custom_post_type_polylang_support() {
//     pll_register_string('Post Type Label', 'news', 'Custom Post Type Label');
//     pll_register_string('Post Type Singular Label', 'news', 'Custom Post Type Singular Label');
// }
// add_action('init', 'custom_post_type_polylang_support');


/*
|--------------------------------------------------------------------------
| Add an dublicate knop
|--------------------------------------------------------------------------
|
| 
| 
|
*/


/*
 * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
 */
function rd_duplicate_post_as_draft(){
  global $wpdb;
  if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
    wp_die('No post to duplicate has been supplied!');
  }
  /*
   * Nonce verification
   */
  if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
    return;
  /*
   * get the original post id
   */
  $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
  /*
   * and all the original post data then
   */
  $post = get_post( $post_id );
  /*
   * if you don't want current user to be the new post author,
   * then change next couple of lines to this: $new_post_author = $post->post_author;
   */
  $current_user = wp_get_current_user();
  $new_post_author = $current_user->ID;
  /*
   * if post data exists, create the post duplicate
   */
  if (isset( $post ) && $post != null) {
    /*
     * new post data array
     */
    $args = array(
      'comment_status' => $post->comment_status,
      'ping_status'    => $post->ping_status,
      'post_author'    => $new_post_author,
      'post_content'   => $post->post_content,
      'post_excerpt'   => $post->post_excerpt,
      'post_name'      => $post->post_name,
      'post_parent'    => $post->post_parent,
      'post_password'  => $post->post_password,
      'post_status'    => 'draft',
      'post_title'     => $post->post_title,
      'post_type'      => $post->post_type,
      'to_ping'        => $post->to_ping,
      'menu_order'     => $post->menu_order
    );
    /*
     * insert the post by wp_insert_post() function
     */
    $new_post_id = wp_insert_post( $args );
    /*
     * get all current post terms ad set them to the new post draft
     */
    $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
    foreach ($taxonomies as $taxonomy) {
      $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
      wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
    }
    /*
     * duplicate all post meta just in two SQL queries
     */
    $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
    if (count($post_meta_infos)!=0) {
      $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
      foreach ($post_meta_infos as $meta_info) {
        $meta_key = $meta_info->meta_key;
        if( $meta_key == '_wp_old_slug' ) continue;
        $meta_value = addslashes($meta_info->meta_value);
        $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
      }
      $sql_query.= implode(" UNION ALL ", $sql_query_sel);
      $wpdb->query($sql_query);
    }
    /*
     * finally, redirect to the edit post screen for the new draft
     */
    wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
    exit;
  } else {
    wp_die('Post creation failed, could not find original post: ' . $post_id);
  }
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
  if (current_user_can('edit_posts')) {
    $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
  }
  return $actions;
}
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );


/*
|--------------------------------------------------------------------------
| REMOVE GUTENBERG CSS
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function remove_gutenberg_container_img_css() {
    // Voeg hier de naam van het CSS-bestand van Gutenberg toe waarin de class .block-editor__container img wordt gedefinieerd.
    $gutenberg_css_handle = 'wp-block-library';

    // Verwijder het Gutenberg CSS-bestand.
    wp_dequeue_style( $gutenberg_css_handle );
    wp_deregister_style( $gutenberg_css_handle );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'admin_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'enqueue_block_editor_assets', 'remove_gutenberg_container_img_css', 100 );


  
    
/*
|--------------------------------------------------------------------------
| Wordpress menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function customize_dashboard_menu() {
    global $menu;

    // Vervang "super admin" door de gebruikersnaam die je wilt tonen.
    $allowed_user = 'kevin';

    // Haal de huidige ingelogde gebruiker op.
    $current_user = wp_get_current_user();
    $current_user_login = $current_user->user_login;

    // Verberg specifieke menu-onderdelen voor alle gebruikers behalve "kevin".
    if ($current_user_login !== $allowed_user) {
        // Hier kun je de volledige URL/querystrings vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_url = array(
            // 'edit.php',
            'edit.php?post_type=acf-field-group',
            'edit-comments.php',
            'themes.php',
            // 'plugins.php',
            // 'users.php',
            'options-general.php',
            'tools.php',
            'admin.php?page=ai1wm_export'
            // Voeg hier andere URL's/querystrings toe van de items die je wilt verbergen op basis van de URL.
        );

        // Hier kun je de classes vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_class = array(
            'toplevel_page_wppusher', 
            'toplevel_page_ai1wm_export',
            'menu-top toplevel_page_mlang',
            // 'toplevel_page_rank-math',
            // Voeg hier andere classes toe van de items die je wilt verbergen op basis van de class.
        );

        foreach ($menu as $key => $item) {
            // Verberg op basis van URL/querystring.
            if (in_array($item[2], $hidden_menu_items_by_url)) {
                unset($menu[$key]);
            }

            // Verberg op basis van class.
            foreach ($hidden_menu_items_by_class as $class) {
                if (strpos($item[4], $class) !== false) {
                    unset($menu[$key]);
                    break;
                }
            }
        }
    }
}

add_action('admin_menu', 'customize_dashboard_menu');


/*
|--------------------------------------------------------------------------
| Wordpress topbar
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function add_custom_admin_bar_styles() {
    // Controleren of de gebruiker is ingelogd
    if (is_user_logged_in()) {
        // Gebruiker met de gebruikersnaam "xxx" uitsluiten
        $user = wp_get_current_user();
        if ($user->user_login === 'xxx') {
            return;
        }

        // Voeg hier de CSS-styling toe voor de menu-items die je wilt aanpassen
        $custom_styles = "
            #wp-admin-bar-comments { display: none !important; }
            #wp-admin-bar-customize { display: none !important; }
            #wp-admin-bar-new-content { display: none !important; }
            #wp-admin-bar-rank-math { display: none !important; }
            #dashboard_primary { display: none !important; }
            #dashboard_quick_press { display: none !important; }
            #dashboard_activity  { display: none !important; }
            #welcome-panel { display: none !important; }
            #dashboard_site_health { display: none !important; }
            #rg_forms_dashboard { display: none !important; }
	    #wp-admin-bar-updates { display: none !important; }
     	    // #toplevel_page_edit-post_type-filter-set { display: none !important; }
	  #rank_math_dashboard_widget { display: none !important; }
            /* Voeg hier meer CSS-styling toe indien nodig */
        ";

        // Voeg de CSS-styling toe aan zowel de front-end als het WordPress-dashboard
        echo '<style type="text/css">' . $custom_styles . '</style>';
        echo '<style type="text/css" id="custom-admin-bar-styles">' . $custom_styles . '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_styles');
add_action('admin_head', 'add_custom_admin_bar_styles');



/*
|--------------------------------------------------------------------------
| Wordpress footer
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function vervang_dashboard_footer_tekst() {
    echo 'Day Six Digitale Communicatie B.V.';
}

add_filter('admin_footer_text', 'vervang_dashboard_footer_tekst');



/*
|--------------------------------------------------------------------------
| Wordpress admin URL
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Functie voor het doorverwijzen van "/backend" naar "/wp-login.php"
function redirect_backend_to_wp_login() {
    if ($_SERVER['REQUEST_URI'] == '/backend') {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('init', 'redirect_backend_to_wp_login');



/*
|--------------------------------------------------------------------------
| E-mailadres verzenden van mails
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_wp_mail_from($original_email_address) {
    // Vervang 'jouw@emailadres.com' door het gewenste specifieke e-mailadres
    return 'noreply@martinsebike.com';
}

function custom_wp_mail_from_name($original_email_from) {
    // Vervang 'Jouw Naam' door de gewenste afzender naam
    return 'Martins E-bike';
}

add_filter('wp_mail_from', 'custom_wp_mail_from');
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');


/*
|--------------------------------------------------------------------------
| Hide Super Admin
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function exclude_user_kevin_from_users_list($query) {
    if (!is_admin()) {
        return; // We voeren deze actie alleen uit in de backend
    }

    $current_user = wp_get_current_user();

    // Controleer of de huidige gebruiker "super admin" is
    if ($current_user->user_login === 'kevin') {
        return; // "super admin" kan zijn eigen gebruikersgegevens zien
    }

    // Haal de huidige gebruiker op
    $current_user_id = $current_user->ID;

    // Haal de gebruiker "super admin" op
    $kevin_user = get_user_by('login', 'kevin');

    // Controleer of "super admin" bestaat en niet dezelfde is als de huidige gebruiker
    if ($kevin_user && $current_user_id !== $kevin_user->ID) {
        // Voeg een voorwaarde toe aan de gebruikersquery om "super admin" te verbergen voor andere gebruikers
        $query->query_vars['exclude'] = array($kevin_user->ID);
    }
}
add_action('pre_get_users', 'exclude_user_kevin_from_users_list');



/*
|--------------------------------------------------------------------------
| Hide auteur
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function verwijder_auteur_kolom($columns) {
    // Controleer of de 'auteur' kolom aanwezig is in de array van kolommen
    if (isset($columns['author'])) {
        // Verwijder de 'auteur' kolom uit de array
        unset($columns['author']);
    }
    return $columns;
}
add_filter('manage_posts_columns', 'verwijder_auteur_kolom');
add_filter('manage_pages_columns', 'verwijder_auteur_kolom');
// Voeg indien nodig filters toe voor aangepaste posttypes, bijv. 'book' => 'manage_book_columns'




add_filter( 'pll_rel_hreflang_attributes', function( $hreflangs ) {
	$hreflangs['x-default'] = $hreflangs['en'];
	return $hreflangs;
} );




/* Start code to add in the functions.php */
add_filter( 'wpc_mobile_width', 'my_custom_wpc_mobile_width' );
function my_custom_wpc_mobile_width( $width ) {
    // Screen width in px when Filters widget should become mobile
    $width = 1024; 
    return $width;
}
/* End code to add in the functions.php  */


add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );