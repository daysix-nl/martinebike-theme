<?php
/**
 * Template name: Shop
 */


get_header(); 
?>
 
<main>


    <!-- <section class="container grid grid-cols-3 gap-3">

        <article class="col-span-1 h-full pr-4">
            <div class="p-2 bg-grey sticky top-0">
                <h2 class="text-18 leading-28 font-medium text-oranje mb-1">Brand</h2>
                <?php        
                    $args = [
                    'type'                     => 'post',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 1,
                    'hierarchical'             => 1,
                    'pad_counts'               => false 
                    ];
                    $categories = get_categories($args); 
                ?>

                <ul class="flex flex-col">
                    <?php foreach($categories as $category): ?>
                        <li <?php if(isset($_GET['group']) == $category->slug):  ?>class="bg-blue"<?php endif; ?>><a href="?group=<?= $category->slug; ?>"><?= $category->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </article>
        <article class="col-span-2">
            <div>
                <?php if(isset($_GET['group'])): ?>
                    <a class="underline font-medium" href="?">reset</a>
                <?php endif; ?>
            </div>
            <?php 
            $catSlug = isset($_GET['group']) ? $_GET['group'] : '';
            $product = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => -1,
                'category_name' => $catSlug,
                'order_by' => 'date',
                'order' => 'desc',
                'cache_results' => true,
            ]);
            ?>
            <?php if($product->have_posts()): ?>
                <ul class="grid grid-cols-3 gap-2">
                    <?php
                    while($product->have_posts()) : $product->the_post(); ?>
                        <li class="col-span-1 bg-grey flex flex-col overflow-hidden rounded-lg">
                            <div class="py-4 px-2 flex flex-col gap-1">
                                <img src="" alt="">
                                <h2 class="text-25 leading-35  font-medium  text-oranje md:w-[90%]"><?php the_title();?></h2>
                                <p class="text-goud text-18 leading-28 font-normal">fasd</p>
                            </div>
                            <a class="bg-oranje h-5 text-white mt-auto flex justify-center items-center" href="<?php the_permalink(); ?>">View Bike</a>
                        </li>
                    <?php
                    endwhile;
                    ?>
                </ul>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </article>

    </section> -->
</main>

<?php get_footer(); ?>