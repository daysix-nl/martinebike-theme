<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */

 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://load.sst.martinsebike.com/estknhsm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2ZGG7K');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>    
    <?php wp_head(); ?>


</head>

<body <?php body_class( 'page-field ' ); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://load.sst.martinsebike.com/ns.html?id=GTM-P2ZGG7K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header id="header-desktop" class="fixed top-0 z-[5] left-0 right-0 w-screen">
        <section class="mx-2 md:px-3 grid grid-cols-3 py-1">
            <div class="col-span-1 flex justify-start items-center">
                <?php 
                // add "raw" key and save data to variable

                $langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 1, 'raw' => 1 ) );

                ?>


                <?php if ($langs_array) : ?>
                <div class="drop-block lang grid grid-cols-2 gap-1">
                    <?php foreach ($langs_array as $lang) : ?>
                    <a href="<?php echo $lang['url']; ?>" class="drop-block__lin col-span-1">
                        <img src="<?php echo $lang['flag']; ?>" alt="" class="object-center h-2 w-2 rounded-full">    
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-span-1 flex justify-center">
                <a href="<?php if(ICL_LANGUAGE_CODE=='en'): ?>/en<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>/nl<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>/pt<?php endif; ?>">
                <?php include get_template_directory() . '/img/logo.php'; ?>
                </a>
            </div>
            <div class="col-span-1 flex justify-end items-center cursor-pointer">

            </div>
        </section>
    </header>

    <button id="menuToggle" class="button-hamburger text-white fixed top-[25px] right-3 z-[6]">
        <span></span>
        <span></span>
        <span></span>
    </button>

 <?php include get_template_directory() . '/componenten/overlay-navigation.php'; ?>
 <?php include get_template_directory() . '/componenten/contact-overlay.php'; ?>


