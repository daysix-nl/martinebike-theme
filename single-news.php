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
            <h1 class="text-white leading-50 text-50 md:leading-70 md:text-65 font-medium animation-title pr-10 hidden md:block"><?php the_title(); ?></h1>
        </div>
        <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
    </section>
     <div class="container mx-auto  pr-10">
        <h1 class="text-oranje leading-50 text-50 md:leading-70 md:text-65 font-medium mb-3 md:hidden"><?php the_title(); ?></h1>
        <p class="text-14 mb-1 text-goud"><?php echo get_the_date(); ?></p>
        <div class="block-wysiwyg">
            <?php the_content(); ?>
        </div>
     </div>
     <section class="my-8 md:my-10">
    <div class="container mb-4 max-w-[800px]">
        <h3 class="mb-1 text-35 leading-42 md:text-50 md:leading-60 font-medium text-oranje text-center mx-auto">Lastest news</h3>
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
                        <p class="text-13 text-grijs  mt-1"><?php echo get_the_date(); ?></p>
                        <h2 class="text-25 leading-35  font-medium md:font-normal text-oranje pr-1"><?php the_title();?></h2>
                        <p class="text-oranje border-oranje border-[1px] rounded-[12px] h-[43px] flex items-center justify-center w-fit min-w-[136px] hover:bg-oranje hover:text-white duration-300 px-3 mt-3">Read more</p>
                    </a>
                </div>
           <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
 </main>
<?php get_footer(); ?>
