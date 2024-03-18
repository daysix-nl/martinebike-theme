<!-- LIST-SCROLL -->
<section class="my-8 md:my-10 relative bg-white">
    <div class="container grid grid-cols-2">
        <div class="col-span-2 md:col-span-1 <?php echo (get_field('list_sticky') ? "md:h-screen md:sticky md:top-0" : ""); ?> ">
            <div class="w-full h-full relative scroll-list <?php echo (get_field('list_sticky') ? "md:pt-10" : ""); ?> ">
                <?php if(get_field('title')): ?>
                    <h3 class="text-black text-30 leading-40 font-bold mb-2 md:mb-3 "><?php echo get_field('title'); ?></h3>
                <?php endif; ?>
                <?php if(get_field('text')): ?>
                    <p class="text-black text-16 leading-26 font-normal"><?php echo get_field('text'); ?></p>
                <?php endif; ?>

                <?php if( have_rows('list') ): ?>
                    <?php while( have_rows('list') ): the_row();  ?>
                        <div class=" animation-<?php echo get_sub_field('name'); ?>">
                        <?php if( have_rows('image_animation') ): ?>
                            <div class="swiper mySwiperAnimation mt-2 hidden md:block">
                                <div class="swiper-wrapper">
                                    <?php while( have_rows('image_animation') ): the_row();  ?>
                                    <div class="swiper-slide w-full">
                                            <img class="w-auto h-[250px] mr-auto mb-2" src="<?php echo get_sub_field('image');?>" alt="img">
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="swiper-pagination mx-auto"></div>
                            </div>
                        <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-span-2 md:col-span-1">
            <?php if( have_rows('list') ): ?>
                <ul class="list md:flex flex-col gap-2 <?php echo (get_field('list_sticky') ? " md:pt-10" : ""); ?> grid grid-cols-2">
                <?php while( have_rows('list') ): the_row();  ?>
                    <li class="mx-auto col-span-1">
                        <?php 
                        $image = get_sub_field('image');
                        if( !empty( $image ) ): ?>
                           <div id="<?php echo get_sub_field('name'); ?>" class="h-[170px] flex justify-center items-center scroll-list-div">
                                <img class="w-full md:w-[250px] h-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                           </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>