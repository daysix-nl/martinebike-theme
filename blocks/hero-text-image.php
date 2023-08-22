<section class="h-[70vh] w-screen relative md:mt-5 bg-white">
    <div  class="w-screen md:w-[50vw] h-[70vh] overflow-hidden absolute top-0 right-0 z-0">
        <div class="relative">
            <div class="w-full h-full absolute bg-black opacity-40 z-[1] md:hidden"></div>
            <img class="w-full h-[70vh] object-cover image-full" src="<?php the_field('image'); ?>" alt="">
        </div>

    </div>
    <div class="container grid grid-cols-2 z-2 relative">
        <div class="col-span-2 md:col-span-1 flex flex-col justify-center h-[70vh]">
            <h3 class="text-25 leading-30 font-normal text-[#84bd00] mb-2"><?php the_field('subtitle'); ?></h3>
            <h2 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-white md:text-darkblue md:w-[90%]"><?php the_field('title'); ?></h2>
        </div>
    </div>
</section>