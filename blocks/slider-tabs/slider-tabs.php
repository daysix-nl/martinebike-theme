<section class="<?php echo((get_field('margin')) ? " md:my-10 my-12 " : "") ?> <?php the_field('background-color') ?> <?php the_field('padding') ?>">
    <div class="container">

        <?php if( have_rows('slider-tabs-repeater') ): ?>
        <div
        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
        class="swiper mySwiper2"
        >
            <div class="swiper-wrapper md:h-[350px]">
            <?php while( have_rows('slider-tabs-repeater') ): the_row(); ?>
                <div class="swiper-slide px-4 py-6 bg-black md:h-[350px]">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="col-span-2 md:col-span-1 md:pr-6">
                            <h3 class="text-white text-28 leading-38 font-bold"><?php the_sub_field('name'); ?></h3>
                            <h4 class="text-roze text-22 leading-32 font-medium"><?php the_sub_field('company'); ?></h4>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <p class="text-white text-16 leading-26"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if( have_rows('slider-tabs-repeater') ): ?>
            <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper bg-[#222222] clip-path-slider md:h-[50px] flex flex-col md:flex-row">
                    <?php while( have_rows('slider-tabs-repeater') ): the_row(); ?>
                        <div class="swiper-slide clip-path-tabs h-[50px]">
                            <button class="text-[#999999] text-16 leading-28 h-5"><?php the_sub_field('button_name'); ?></button>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>