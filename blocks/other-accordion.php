<!-- OTHER-ACCORDION -->
<article class="my-8 md:my-10 relative bg-white">
    <?php if(get_field('navigation_accordion')): ?>
        <section class="mb-5 md:mb-7">
            <div class="container">
                <h3 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-oranje md:w-[80%] mb-3"><?php the_field('text_navigation'); ?></h3>
            </div>
            <div class="container flex flex-row flex-wrap gap-1 md:gap-2">
                <?php if( have_rows('accordion_repeater') ): ?>
                    <?php while( have_rows('accordion_repeater') ): the_row(); 
                        $title = get_sub_field('title');
                        $titlenospaces = str_replace(' ','',$title ); 
                    ?>
                        <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-white  border-[2px] border-green py-1 px-3 rounded-[12px] text-black bor w-fit mt-auto hover:bg-oranje hover:text-white hover:transition-colors" href="#<?php echo $titlenospaces ?>"><?php the_sub_field('title'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class=" grid grid-cols-3 container gap-3 ">
            <?php if( have_rows('accordion_repeater') ): ?>
                <?php while( have_rows('accordion_repeater') ): the_row(); 
                        $title = get_sub_field('title');
                        $titlenospaces = str_replace(' ','',$title ); 
                ?>
                <section class="col-span-3 md:col-span-1">
                    <img class="w-full object-cover aspect-video h-[375px]" src="<?php the_sub_field("image") ?>" alt="">
                </section>
                <section class="col-span-3 md:col-span-2">
                    <div class="" id="<?php echo $titlenospaces; ?>">
                        <h2 class="text-30 leading-35 font-medium text-oranje mb-2"><?php the_sub_field('title') ?></h2>
                    </div>
                    <?php if( have_rows('accordions_repeater_sub') ): ?>
                        <div class="gap-2 flex flex-col accordion-div ">
                        <?php while( have_rows('accordions_repeater_sub') ): the_row(); ?>
                                <button class="accordion text-oranje text-22 leading-23 font-medium"><?php the_sub_field('title') ?></button>
                                <div class="panel px-2 md:px-4 mt-[-20px]">
                                    <div class="pb-3"><?php the_sub_field('text') ?></div>
                                </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-green py-1 px-3 rounded-[12px] text-white w-fit mt-2  mb-5 md:mb-0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                </section>
                <?php endwhile; ?>
            <?php endif; ?>
    </section>
</article>