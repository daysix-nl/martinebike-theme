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
<!-- POPUP -->
    <?php if((!isset($_COOKIE["popup"]) || $_COOKIE["popup"] !== "yes") && get_field('actief', 'option') === 'active') { ?>
       <div class="pop_up fixed top-0 left-0 w-screen h-screen flex bg-[#000000]/20 z-[1000] justify-center items-center ">
            <div class="w-full max-w-[358px] md:max-w-[415px] bg-white m-auto rounded-[11px] overflow-hidden relative pop_up_inner">
                <button class="closePopUp top-2 right-2 absolute z-[100]">
                    <?php if (get_field('kleur_close_button', 'option') !== "button_zwart"): ?>   
                    <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                    <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#fff"/>
                    <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#fff"/>
                    </svg>
                    <?php endif; ?>
                    <?php if (get_field('kleur_close_button', 'option') !== "button_wit"): ?>   
                    <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                    <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#000"/>
                    <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#000"/>
                    </svg>
                    <?php endif; ?>
                </button>
                <?php
                $image = get_field('popup_afbeelding', 'option');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <?php if (get_field('popup_afbeelding', 'option')): ?>  
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full object-cover object-center h-[199px] md:h-[210px]">
                <?php endif; ?>
                <div class="pt-[40px] md:pt-[35px] lg:pt-[30px] pb-[35px] lg:pb-[30px] w-[269.54px] md:w-[334.8px] mx-auto">
                    <?php if (get_field('popup_titel', 'option')): ?>   
                    <h2 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 text-oranje font-medium pb-[15px] md:pb-[25px] xl:pb-2 mr-0 md:mr-[45px] xl:mr-[0px]"><?php echo get_field('popup_titel', 'option');?></h2>
                    <?php endif; ?>
                    <?php if (get_field('popup_tekst', 'option')): ?>   
                    <p class="text-black text-16 leading-26 font-normal pb-[30px] md:pb-[28px] lg:pb-2 xl:pb-[35px] mr-0 md:mr-[45px] xl:mr-[0px]"><?php echo get_field('popup_tekst', 'option');?></p>
                    <?php endif; ?>
                    <?php
                    $link = get_field('popup_link', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <?php if (get_field('popup_link', 'option')): ?>   
                    <a href="<?php echo $link_url; ?>" class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit mx-auto0" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <header id="header-desktop" class="fixed top-0 z-[5] left-0 right-0 w-screen">
        <section class="mx-2 md:px-3 grid grid-cols-3 py-1">
            <div class="col-span-1 flex justify-start items-center">
                
                <div id="weglot_here"></div>

                
            </div>
            <div class="col-span-1 flex justify-center h-[30px] md:h-[45px] my-[8px]">
                <a href="/">
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


