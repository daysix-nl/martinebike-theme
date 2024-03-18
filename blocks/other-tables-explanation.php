<!-- OTHER-TABLES-EXPLANATION -->
<section class="my-8 md:my-10 relative bg-white">
<div class="container mb-3 md:mb-5">
    <h2 class="text-40 leading-50 font-medium text-oranje md:w-[90%]"><?php echo get_field('title');?></h2>
</div>
    <div class="container grid grid-cols-3 gap-2">
        <?php if( have_rows('explanation') ): ?>
            <?php while( have_rows('explanation') ): the_row();  ?>
                <div class="col-span-3 md:col-span-1 p-2 bg-yellow flex items-center rounded-md">
                    <?php if(get_sub_field('icon_image')): ?><img class="h-2 img-icon" src="/wp-content/themes/martinsebike-theme/img/icons-acf/<?php echo get_sub_field('icon_image');?>.svg" alt=""> <?php endif; ?>
                    <p class="text-white font-medium text-16 leading-26"><?php echo get_sub_field('text'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>