<!-- SLIDE-BLOCK -->
<section class="my-8 md:my-10 bg-white">
    <div class="container">

        <?php if( have_rows('slider-tabs-repeater') ): ?>
            <div
            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
            class="swiper mySwiper2"
            >
                <div class="swiper-wrapper md:min-h-[350px]">
                    <?php while( have_rows('slider-tabs-repeater') ): the_row(); ?>
                        <div class="swiper-slide px-4 py-6 bg-grey md:min-h-[350px] h-fit">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="col-span-2 md:col-span-1 md:pr-6">
                                    <?php if(get_sub_field('name')): ?>
                                        <h3 class="text-25 leading-35 md:text-30 md:leading-40 font-medium md:font-normal text-oranje md:w-[90%]"><?php the_sub_field('name'); ?></h3>
                                    <?php endif; ?>
                                </div>
                                <div class="col-span-2 md:col-span-1">
                                    <?php if(get_sub_field('text')): ?>
                                        <p class="text-black text-16 leading-26 font-normal"><?php the_sub_field('text'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if( have_rows('slider-tabs-repeater') ): ?>
            <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper  md:h-[50px] flex flex-row">
                    <?php while( have_rows('slider-tabs-repeater') ): the_row(); ?>
                        <div class="swiper-slide bg-oranje clip-path-tabs h-[50px] last-of-type:border-r-0 border-r-2 border-white">
                            <button class="text-white text-16 leading-28 h-5 pl-4"><?php the_sub_field('button_name'); ?></button>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
</section>