<!-- LIST-BLOCKS -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="container grid md:pr-[150px]">
        <?php if(get_field('title')): ?>
            <h3 class="text-25 leading-35 md:text-30 md:leading-40 font-normal text-oranje md:w-[70%] mb-3 "><?php echo get_field('title'); ?></h3>
        <?php endif; ?>
        <?php if(get_field('text')): ?>
            <p class="text-black text-16 leading-26 font-normal"><?php echo get_field('text'); ?></p>
        <?php endif; ?>
        <?php if( have_rows('list') ): ?>
            <ul class="grid gap-2 grid-cols-2">
            <?php while( have_rows('list') ): the_row();  ?>
                <li class="col-span-1 bg-white grid grid-cols-3 gap-1 p-2 rounded-2xl">
                    <?php 
                    $image = get_sub_field('image');
                    if( !empty( $image ) ): ?>
                        <img class="col-span-1 hidden md:block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="col-span-3 md:col-span-2">
                        <h3 class="text-20 leading-30 md:text-25 md:leading-35 font-medium md:font-normal text-oranje md:w-[80%] mb-1"><?php echo get_sub_field('title'); ?></h3>
                        <p class="text-black text-16 leading-26 font-normal"><?php echo get_sub_field('text'); ?></p>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
</section>