<section class="my-8 md:my-10 relative bg-white">
    <div class="container">
        <?php if(get_field('title')): ?>
            <h3 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-oranje md:w-[80%] mb-5"><?php the_field('title'); ?></h3>
        <?php endif; ?>
    </div>
    <div class="container grid grid-cols-2 gap-3 gap-y-5">
        <?php if( have_rows('card_list') ): ?>
            <?php while( have_rows('card_list') ): the_row(); ?>
                <div class="col-span-2 md:col-span-1 flex flex-col gap-2 md:pr-5">
                    <img class="h-[125px] w-fit " src="<?php the_sub_field('image'); ?>" alt="">
                    <p class="text-black text-16 leading-26 font-normal"><?php the_sub_field('text'); ?></p>
                    <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit mt-auto" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>