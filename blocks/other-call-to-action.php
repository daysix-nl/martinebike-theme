<!-- OTHER-CALL-TO-ACTION -->
<section class="mt-8 md:mt-10 relative md:h-screen overflow-hidden">
    <article class="relative h-fit w-full bg-gradient-grey">
        <div class="container flex flex-col justify-center bg-grey py-10 ">
            <div class="md:w-[70%] mx-auto flex flex-col gap-3">
                <h2 class="text-40 leading-50 md:text-50 md:leading-70 font-normal text-oranje  text-center md:text-start"><?php the_field('title'); ?></h2>
                <p class="text-black text-16 leading-26 font-normal md:pr-6 md:w-[60%] text-center md:text-start"><?php the_field('text') ?></p>
                <?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="flex flex-row gap-1 justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white mx-auto md:mx-[unset] w-fit" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </article>

    <img class="absolute top-10 right-0 w-full h-full -z-10 object-cover hidden md:block" src="<?php the_field('image');?>" alt="">
</section>
<div class="pb-[1px] md:pb-[1px]"></div>