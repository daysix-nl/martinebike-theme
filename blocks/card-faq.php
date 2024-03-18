<!-- CARD-FAQ -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="container mb-3 md:mb-5">
        <h2 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-oranje md:w-[70%]"><?php echo get_field('title') ?></h2>    
    </div>

    <?php if( have_rows('list') ): ?>
        <div class="container grid grid-cols-2 gap-4 md:gap-y-6  loading-count">
        <?php while( have_rows('list') ): the_row(); ?>
            <div class="col-span-2 md:col-span-1 flex flex-col gap-1 md:gap-2">
                <span class="counter-span text-35 leading-40 font-medium md:font-normal block text-yellow">.</span>
                <h2 class="text-25 leading-35 md:text-30 md:leading-40 font-medium md:font-normal text-oranje md:w-[80%]"><?php echo get_sub_field('title') ?></h2>
                <p class="text-black text-16 leading-26 font-normal md:pr-6"><?php echo get_sub_field('text') ?></p>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>