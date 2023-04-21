<!-- IMAGE-NAVIGATION -->
<section class="mt-6 md:mt-8 mb-8 md:mb-10">
    <div class="container md:w-[60%]">
        <h1 class="text-center text-black text-40 leading-50 md:text-50 md:leading-60 font-bold mb-2 md:mb-3 "><?php the_field('title'); ?></h1>
    </div>
    <div class="container grid grid-cols-4 md:grid-rows-2 gap-2 mt-5 md:mt-6 h-[1000px] sm:h-[700px] md:h-[600px]">
        <a href="<?php the_field('link_1'); ?>" class="col-span-4 sm:col-span-2 md:col-span-2 md:row-span-2 relative  overflow-hidden card-navigation">
            <div class="overlay-card"></div>
            <img class="w-full h-full object-cover" src="<?php the_field('image_1'); ?>" alt="<?php the_field('text_1'); ?>">
            <h4  class="text-card-overlay"><?php the_field('text_1'); ?></h4>
        </a>
        <a href="<?php the_field('link_2'); ?>" class="col-span-4 sm:col-span-2 md:col-span-2 relative  overflow-hidden  card-navigation">
            <div class="overlay-card"></div>
            <img class="w-full h-full object-cover" src="<?php the_field('image_2'); ?>" alt="<?php the_field('text_2'); ?>">
            <h4  class="text-card-overlay"><?php the_field('text_2'); ?></h4>
        </a>
        <a href="<?php the_field('link_3'); ?>" class="col-span-4 sm:col-span-2 md:col-span-1 relative  overflow-hidden  card-navigation">
            <div class="overlay-card"></div>
            <img class="w-full h-full object-cover" src="<?php the_field('image_3'); ?>" alt="<?php the_field('text_3'); ?>">
            <h4  class="text-card-overlay"><?php the_field('text_3'); ?></h4>
        </a>
        <a href="<?php the_field('link_4'); ?>" class="col-span-4 sm:col-span-2 md:col-span-1 relative  overflow-hidden  card-navigation">
            <div class="overlay-card"></div>
            <img class="w-full h-full object-cover" src="<?php the_field('image_4'); ?>" alt="<?php the_field('text_4'); ?>">
            <h4  class="text-card-overlay"><?php the_field('text_4'); ?></h4>
        </a>
    </div>
</section>