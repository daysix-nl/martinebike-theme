<!-- LIST-INFORMATION -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="container grid gap-3 md:pr-[150px]">
        <?php if(get_field('title')): ?>
            <h3 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-oranje md:w-[90%]"><?php the_field('title'); ?></h3>
        <?php endif; ?>
        <?php if(get_field('text')): ?>
            <p class="text-black text-16 leading-26 font-normal"><?php the_field('text'); ?></p>
        <?php endif; ?>
        <?php if( have_rows('list') ): ?>
            <ul class="flex flex-col gap-1 list-inside">
            <?php while( have_rows('list') ): the_row();  ?>
                <li class="text-black text-16 leading-26 font-normal">
                    <?php the_sub_field('list_item'); ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php if( have_rows('text_repeater') ): ?>

            <?php while( have_rows('text_repeater')): the_row(); ?>
                    <p class="text-black text-16 leading-26 font-normal"><?php the_sub_field('text'); ?></p>
            <?php endwhile; ?>

        <?php endif; ?>
</section>