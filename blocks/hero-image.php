<section class="mobile:h-[80vh] h-[30vh] md:h-[55vh] w-screen relative overflow-hidden bg-white">
    <img class="w-full h-full object-cover absolute top-0 right-0  image-full" src="<?php the_field('image'); ?>" alt="">
    <div class="container flex flex-col justify-center gap-3 z-2 h-full relative z-[2]">
        <h1 class=" text-white leading-50 text-50 md:leading-70 md:text-65 font-medium animation-title "><?php the_field('title'); ?></h1>
    </div>
    <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
</section>