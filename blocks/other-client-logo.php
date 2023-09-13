<section class=" my-8 md:my-10">
    <div class="container grid grid-cols-6 gap-5">
        <?php if( have_rows('logos', 'option') ): ?>
            <?php while( have_rows('logos', 'option') ): the_row();  ?>
                <div class="col-span-2 md:col-span-1 flex justify-center">
                    <?php 
                    $image = get_sub_field('logo', 'option');
                    if( !empty( $image ) ): ?>
                        <img class="w-full h-auto aspect-[3/2] object-contain " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>  
</section>