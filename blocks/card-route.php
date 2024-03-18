<!-- CARD-ROUTE -->
<section id="route" class="my-8 md:my-10 relative bg-white">
    <div class="container mb-3 md:mb-5">
        <h2 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-oranje md:w-[70%] mb-2"><?php echo get_field('title') ?></h2>    
        <p class="text-black text-16 leading-26 font-normal md:w-[80%]"><?php echo get_field('text') ?></p>
    </div>

    <?php if( have_rows('list') ): ?>
        <div class="container grid grid-cols-2 gap-4 md:gap-y-6  loading-count">
        <?php while( have_rows('list') ): the_row(); ?>
            <div class="col-span-2 md:col-span-1 flex flex-col gap-1 md:gap-2">
                <span class="counter-span text-35 leading-40 font-medium md:font-normal block text-yellow">.</span>
                <h2 class="text-25 leading-35 md:text-30 md:leading-40 font-medium md:font-normal text-oranje md:w-[80%]"><?php echo get_sub_field('title') ?></h2>
                <div class="mt-auto">
                    <?php echo get_sub_field('iframe') ?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>

<section class="<?php echo((get_field('margin')) ? " md:my-[140px] my-[100px] " : "") ?>  relative h-screen overflow-hidden">
    <article class="relative h-fit w-full bg-gradient-grey">
        <div class="container flex flex-col justify-center bg-grey py-10 ">
            <div class="md:w-[70%] mx-auto flex flex-col gap-3">
                <h2 class="text-40 leading-50 md:text-50 md:leading-70 font-normal text-oranje  text-center md:text-start"><?php echo get_field('title_call'); ?></h2>
                <p class="text-black text-16 leading-26 font-normal md:pr-6 md:w-[100%] text-center md:text-start"><?php echo get_field('text_call') ?></p>
                <div class="flex flex-row gap-2 flex-wrap">
                    <?php 
                        $link = get_field('link_apple');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php include get_template_directory() . '/img/icons/apple.php'; ?>
                            </a>
                    <?php endif; ?>
                    <?php 
                        $link = get_field('link_google');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php include get_template_directory() . '/img/icons/googlestore.php'; ?>
                            </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>

    <img class="absolute top-10 right-0 w-full h-full -z-10 object-cover hidden md:block" src="<?php echo get_field('image_call');?>" alt="">
</section>