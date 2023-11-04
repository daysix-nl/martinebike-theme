<section class="hamburger-overlay flex flex-col justify-between text-center z-[5]">
    <div class="z-[4] bg-white px-2 py-4 h-full">
        <nav class="flex flex-col justify-center items-center gap-[30px] pt-4 content-overlay my-auto">
                <?php if( have_rows('menu', 'option') ): ?>
                    <?php while( have_rows('menu', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button font-medium" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><p class="text-black text-28 leading-28 flex flex-row hover:opacity-60 duration-300 <?php if( have_rows('sub_link', 'option') ): ?><?php endif; ?>"><?php echo esc_html( $link_title ); ?></p></a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </nav>
            <div class="flex justify-center content-overlay pt-3 md:pt-4">
                <div class="flex flex-col gap-1 justify-center items-center flex-wrap">
                    <?php while( have_rows('menu_section_2', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit hover:bg-opacity-60 duration-300" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    <!-- <button class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit button-contact-overlay hover:bg-opacity-60 duration-300">Book a test ride</button> -->
                    <!-- <a class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit button-contact-overlay" href="tel:+351 289 098 603"><?php include get_template_directory() . '/img/icons/phone.php'; ?><p class="text-black text-14 leading-14">+351 289 098 603</p></a> -->
                </div>
            </div>
    </div>
    <div class="overlay-menu top-0 left-0 bg-black opacity-60 w-screen h-screen z-[3] fixed hidden"></div>
</section>

