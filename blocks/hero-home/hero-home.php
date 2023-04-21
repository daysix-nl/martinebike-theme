<section class="bg-hero-home h-[100vh] relative">
    <div class="container flex justify-center flex-col h-full">
        <div class="w-full sm:w-2/3 xl:w-1/2">
            <h1 class="text-75 leading-75 text-white font-bold"><?php the_title() ?></h1>
            <p class="text-22 leading-32 text-white font-normal pr-5 my-6"><?php the_field('subtitle'); ?></p>
            <a href="/">Start de wedstrijdbespreking</a>
        </div>
    </div>
    <?php 
    $image = get_field('image');
    if( !empty( $image ) ): ?>
        <img class="absolute right-0 bottom-0 hidden xl:flex max-w-[9000px] w-[60vw] h-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="absolute right-0 bottom-0 triangle"></div>
</section>