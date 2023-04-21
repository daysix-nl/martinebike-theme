<!-- OTHER-NEWS -->
<section class="my-8 md:my-10">
    <div class="container mb-4 max-w-[800px]">
        <h3 class="mb-1 text-35 leading-42 md:text-50 md:leading-60 font-medium text-darkblue text-center mx-auto"><?php the_field('title'); ?></h3>
        <p class="text-black text-16 leading-26 font-normal text-center md:px-3"><?php the_field('text'); ?></p>
        <!-- <div class="flex flex-row flex-wrap gap-1">
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
                    $link = get_field('twitter', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/twitter.php'; ?>
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
                </div> -->
    </div>
    <div class="container grid grid-cols-3 gap-3 gap-x-5">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                )
                );
                ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>
                <div class="col-span-3 sm:col-span-2 md:col-span-1">
                    <a href="<?php the_permalink(); ?>">
                        <img class="w-full h-auto aspect-video object-cover mb-1" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <h2 class="text-25 leading-35  font-medium md:font-normal text-darkblue pr-1"><?php the_title();?></h2>
                        <p class="text-green mt-1"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Read more<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Lees meer<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>consulte Mais informação<?php endif; ?></p>
                    </a>
                </div>
           <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="container flex mt-4">
        <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-darkblue py-1 px-3 rounded-full text-white w-fit mx-auto" href="<?php the_field('button'); ?>"><?php the_field('button_name'); ?></a>
    </div>
</section>