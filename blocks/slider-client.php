<!-- SLIDER-CLIENT -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="">
    <div class="container mb-3 md:mb-5">
        <?php if(get_field('title')): ?>
            <h3 class="text-25 leading-35 md:text-30 md:leading-40 font-normal text-oranje md:w-[50%] max-w-[400px]"><?php echo get_field('title'); ?></h3>
        <?php endif; ?>
        <?php if(get_field('text')): ?>
            <p class="text-black text-16 leading-26 font-normal md:w-[60%] mt-3 max-w-[500px]"><?php echo get_field('text'); ?></p>
        <?php endif; ?>
    </div>
    <div class="container gap-3 flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/2 bg-cream ">

            <?php if( have_rows('slider-client-repeater') ): ?>
                <div thumbsSlider="" class="swiper client-swiper  md:p-4">
                    <div class="swiper-wrapper grid-cols-3 grid justify-items-center gap-2">
                <?php while( have_rows('slider-client-repeater') ): the_row(); ?>
                        <div class="swiper-slide w-full m-0 flex justify-center items-center">
                            <?php 
                            $image = get_sub_field('image');
                            if( !empty( $image ) ): ?>
                                <img class="w-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
            <div class="w-full lg:w-1/2">
                <div class="bg-oranje py-6 px-4  h-full w-full">
                    <?php if( have_rows('slider-client-repeater') ): ?>
                        <div 
                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper client-swiper2 p-0"
                        >       
                            <div class="swiper-wrapper ">
                                <?php while( have_rows('slider-client-repeater') ): the_row();  ?>
                                    <div class="swiper-slide flex justify-center flex-col min-h-[200px] lg:h-auto gap-2 md:w-[80%]">
                                        <h3 class="text-25 leading-35 md:text-30 md:leading-40 font-medium md:font-normal text-white md:w-[90%]"><?php echo get_sub_field('title'); ?></h3>
                                        <p class="text-white text-16 leading-26 font-normal"><?php echo get_sub_field('text'); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script type="module">
      var swiperClient = new Swiper(".client-swiper", {
        loop: false,
        slidesPerView: 4,
        freeMode: false,
        watchSlidesProgress: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
      });
      var swiper2 = new Swiper(".client-swiper2", {
        loop: false,
        effect: "fade",
        slidesPerView: 1,
        thumbs: {
          swiper: swiperClient,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
      });
    document.querySelector(".client-swiper").addEventListener("mouseenter", () => {
        swiper2.autoplay.stop();
    });
    </script>
    



