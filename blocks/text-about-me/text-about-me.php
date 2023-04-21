<section class="<?php echo((get_field('margin')) ? " md:my-10 my-12 " : "") ?> bg-about-me ">
    <div class="container grid grid-cols-2 gap-3">
        <div class="col-span-1 flex-col hidden md:flex">
        <?php 
        $image = get_field('image');
        if( !empty( $image ) ): ?>
            <img class="w-full max-w-[800px] mt-auto"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
        <div class="col-span-2 md:col-span-1 py-4 md:py-6">
            <?php include get_template_directory() . '/img/icons/aanhalingsteken.php'; ?>
            <p class="text-16 leading-26 font-normal text-white">
            <?php the_field('text'); ?></p>
            <h3 class="text-28 leading-28 font-bold text-white pt-4 pb-2"><?php the_field('name'); ?></h3>
            <h4 class="text-22 leading-32 font-medium text-roze"><?php the_field('function'); ?></h4>
        </div>
    </div>
</section>