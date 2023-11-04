<!-- CARD-BLOCKS -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="container grid gap-3 mb-3 md:mb-5">
        <?php if(get_field('title')): ?>
            <h3 class="text-35 leading-42 md:text-50 md:leading-60 font-medium text-oranje md:w-[70%]"><?php the_field('title'); ?></h3>
        <?php endif; ?>
        <?php if(get_field('text')): ?>
            <p class="text-black text-16 leading-26 font-normal mt-3"><?php the_field('text'); ?></p>
        <?php endif; ?>
        <?php if( have_rows('list') ): ?>
            <ul class="grid gap-2 grid-cols-2 loading-count">
            <?php while( have_rows('list') ): the_row();  ?>
                <li class="col-span-2 lg:col-span-1 bg-white grid grid-cols-3  overflow-hidden drop-shadow-md">
                    <?php 
                    $image = get_sub_field('image');
                    if( !empty( $image ) ): ?>
                        <img class="col-span-1 w-full h-full object-cover hidden md:block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="col-span-3 md:col-span-2 p-2 py-4 overflow-hidden">
                        <div class="flex flex-row">                       
                            <span class="counter-span text-25 leading-35 font-medium md:font-normal block text-yellow">.&nbsp;</span>
                            <h3 class="text-20 leading-30 md:text-25 md:leading-35 font-medium md:font-normal text-oranje md:w-[80%] mb-1"><?php the_sub_field('title'); ?></h3>
                        </div>
                        <p class="text-black text-16 leading-26 font-normal"><?php the_sub_field('text'); ?></p>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
</section>