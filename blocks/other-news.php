<!-- OTHER-NEWS -->
<section class="my-8 md:my-10">
    <div class="container grid grid-cols-3 gap-3 gap-x-5">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                )
                );
                ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();?>
                <div class="col-span-3 sm:col-span-2 md:col-span-1">
                    <a href="<?php the_permalink(); ?>">
                        <img class="w-full h-auto aspect-video object-cover mb-1" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <p class="text-gray-500 mt-1"><?php the_date(); ?></p>
                        <h2 class="text-25 leading-35  font-medium md:font-normal text-darkblue"><?php the_title();?></h2>
                        <p class="text-green mt-1"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Read more<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Lees meer<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>consulte Mais informação<?php endif; ?></p>
                        </a>
                </div>
           <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

