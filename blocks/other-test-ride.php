<section class="mobile:h-[80vh] h-[30vh] md:h-[55vh] w-screen relative overflow-hidden">
    <img class="w-full h-full object-cover absolute top-0 right-0  image-full" src="https://martinsebike.com/wp-content/uploads/2023/02/MARTINS-E-BIKE-9194-scaled.jpg" alt="">
    <div class="container flex flex-col justify-center gap-3 z-2 h-full relative z-[2]">
        <h1 class="text-white leading-50 text-50 md:leading-70 md:text-65 font-medium animation-title"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Test ride<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Proefrit<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>Passeio de teste<?php endif; ?></h1>
        <p class="text-white leading-20 text-20 md:leading-28 md:text-28 font-medium animation-title"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Choose a bike and book a test ride<?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Kies een fiets en boek een proefrit<?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>Escolha uma bicicleta e marque um test ride<?php endif; ?></p>
    </div>
    <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
</section>
<section class="container grid grid-cols-3 gap-3 my-[50px] md:my-5">

    <article class="col-span-3 md:col-span-1 h-full pr-4">
        <div class="md:p-2 md:bg-grey sticky top-9">
            <h2 class="text-20 leading-30 font-bold text-darkblue mb-1 hidden md:block">Bikes</h2>
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

            <ul class="flex flex-col gap-1 overflow-scroll">
                <?php foreach($categories as $category): ?>
                    <li class=" p-1 md:p-0  <?php echo(isset($_GET['group']) == $category->slug) ?"bg-darkblue text-white md:bg-transparent  md:text-darkblue md:underline md:underline-offset-4 md:decoration-1 md:decoration-darkblue md:underline-darkblue": "bg-grey text-black md:hover:underline md:hover:underline-offset-4 md:hover:decoration-1 md:hover:decoration-black md:hover:underline-black" ?> " ><a href="?group=<?= $category->slug; ?>"><?= $category->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </article>
    <article class="col-span-3 md:col-span-2">

            <?php if(isset($_GET['group'])): ?>
                <div class="mb-2">
                    <a class=" font-medium bg-grey p-1 mb-4 flex flex-col justify-center items-center w-fit" href="?">Reset filter</a>
                </div>
            <?php endif; ?>

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
            <ul class="grid grid-cols-3 gap-3">
                <?php
                while($product->have_posts()) : $product->the_post(); $post_id = get_the_ID(); ?>
                    <li class="col-span-3 md:col-span-1 flex flex-col p-1 pt-2 hover:scale-105 duration-300">
                        <a class="grid grid-cols-3 gap-2" href="<?php the_permalink(); ?>/?id=id<?php the_field('product_id', $post_id); ?>">
                        
                                <div class="col-span-1 md:col-span-3 h-[150px] flex flex-col border-[#e6e6e6]">
                                    <img class="max-w-[500px] h-auto w-full mx-auto my-auto"  src="<?php the_field('product_image', $post_id);?>" alt="" />
                                </div>
                       
                            <div class="col-span-2 md:col-span-3 md:border-t-[1px] md:border-[#e6e6e6] ">
                                <div class="pt-2 flex flex-row justify-between">
                                    <h2 class="text-16 leading-26 font-medium  text-darkblue"><?php the_title();?></h2>
                                    
                                </div>
                                <div class="flex flex-row">
                                    <p class=" text-16 leading-26 font-normal <?php echo((get_field("product_sale", $post_id) === "yes") ? "line-through pr-1 text-darkblue/20" : "text-green"); ?>">&#8364;<?php the_field('product_price', $post_id); ?></p> 
                                    <?php if(get_field("product_sale", $post_id) === "yes"): ?>
                                        <p class="text-green text-16 leading-26 font-normal">&#8364;<?php the_field('product_sale_price', $post_id); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                        </div>
                        </a>
                    </li>
                <?php
                endwhile;
                ?>
            </ul>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </article>

</section>