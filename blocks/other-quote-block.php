<!-- OTHER-QUOTE-BLOCK -->
<section class="my-8 md:my-10  relative">
    <div class="container flex flex-col justify-center <?php the_field('background-color') ?> <?php the_field('padding') ?>">
        <div class=" <?php the_field('padding') ?>">
            <h3 class="text-25 leading-30 font-normal text-[#84bd00] text-center md:text-start"><?php the_field('subtitle'); ?></h3>
            <h2 class="text-40 leading-50 md:text-50 md:leading-70 font-normal text-white md:w-[70%] mx-auto text-center md:text-start"><?php the_field('title'); ?></h2>
        </div>
    </div>
    <div class="<?php the_field('background-color') ?> absolute top-0 h-full right-0 w-1/2 -z-10"></div>
</section>