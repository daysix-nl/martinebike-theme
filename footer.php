<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="flex flex-col gap-5 mt-8 md:mt-10">

    <section>
        <div class="container grid grid-cols-4 gap-3">
            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col ">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_informatie', 'option'); ?></h3>
                <?php if( have_rows('repeater_informatie', 'option') ): ?>
                    <div class="flex flex-col gap-1">
                    <?php while( have_rows('repeater_informatie', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link_informatie', 'option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_legale_termen', 'option'); ?></h3>
                <?php if( have_rows('repeater_legale_termen', 'option') ): ?>
                    <div class="flex flex-col gap-1">
                    <?php while( have_rows('repeater_legale_termen', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link', 'option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col ">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_contact', 'option'); ?></h3>
                <div class="flex flex-col gap-1">
                    <p><?php the_field('adres', 'option'); ?></p>
                    <a href="tel:+<?php the_field('Telefoonnummer', 'option'); ?>"><?php the_field('Telefoonnummer', 'option'); ?></a>
                    <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                </div>

                <h3 class="my-1 pt-1 text-14 leading-28 font-bold"><?php the_field('title_volg_ons', 'option'); ?></h3>
                <div class="flex flex-row flex-wrap gap-1">
                    <?php 
                    $link = get_field('facebook', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('instagram', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                        </a>
                    <?php endif; ?>
                 
                    <?php 
                    $link = get_field('tripadvisor', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/trustpilot.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('google', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php include get_template_directory() . '/img/icons/google.php'; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-span-4 sm:col-span-2 md:col-span-1">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_maandelijkse_nieuwsbrief', 'option'); ?></h3>
                <?php if(ICL_LANGUAGE_CODE=='en'): ?><?php    echo do_shortcode( '[gravityform id="1" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='nl'): ?><?php    echo do_shortcode( '[gravityform id="8" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='pt'): ?><?php    echo do_shortcode( '[gravityform id="9" title="false"]' ); ?><?php endif; ?>
            </div>
        </div>
    </section>
    <section class="h-4 w-full bg-blue/20">
        <div class="container flex flex-col h-full justify-center">
            <p class="text-black text-14 leading-14"><?php the_field('slot', 'option'); ?></p>
        </div>
    </section>
</footer>
<!-- <section class="fixed bottom-0 bg-[#ff0000] left-0 right-0">
    <p class="text-white text-20 py-1 text-center z-[999]">-- THIS WEBSITE IS UNDER CONSTRUCTION -- </p>
 </section> -->
<?php wp_footer(); ?>


</body>
</html>