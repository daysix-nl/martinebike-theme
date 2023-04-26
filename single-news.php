<?php 
/**
 * The single news template file
 * 
 * @package Day Six theme
 */





 get_header(); ?>

 <main class=" flex flex-col">
    <section class="mobile:h-[80vh] h-[30vh] md:h-[55vh] w-screen relative overflow-hidden mb-8 md:mtb-10">
        <img class="w-full h-full aspect-video object-cover mb-1 absolute top-0 left-0 right-0" src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="container flex flex-col justify-center gap-3 z-2 h-full z-[2] relative">
            <h1 class=" text-white leading-50 text-50 md:leading-70 md:text-65 font-medium animation-title pr-10"><?php the_title(); ?></h1>
        </div>
        <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
    </section>
     <div class="container mx-auto custom-post-news pr-10">
        <p class="text-13 mb-1"><?php the_date(); ?></p>
        <?php the_content(); ?>
     </div>
     <section class="my-8 md:my-10">
    <div class="container mb-4 max-w-[800px]">
        <h3 class="mb-1 text-35 leading-42 md:text-50 md:leading-60 font-medium text-darkblue text-center mx-auto"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Last news<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Laatste nieuws<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>Últimas Novidades<?php endif; ?></h3>
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
                        <p class="text-13 mt-1"><?php the_date(); ?></p>
                        <h2 class="text-25 leading-35  font-medium md:font-normal text-darkblue pr-1"><?php the_title();?></h2>
                        <p class="text-green mt-1"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Read more<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Lees meer<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>consulte Mais informação<?php endif; ?></p>
                    </a>
                </div>
           <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
 </main>
<?php get_footer(); ?>