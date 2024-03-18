<!-- SHOP -->
<?php $currentUrl = $_SERVER['REQUEST_URI']; ?>
<section class="mobile:h-[80vh] h-[30vh] md:h-[55vh] w-screen relative overflow-hidden bg-white">
    <img class="w-full h-full object-cover absolute top-0 right-0  image-full" src="https://martinsebike.com/wp-content/uploads/2023/02/MARTINS-E-BIKE-9194-scaled.jpg" alt="">
    <div class="container flex flex-col justify-center gap-3 z-2 h-full relative z-[2]">
        <?php $visible = false; if( have_rows('cpt_categorien', 'option') ): ?>
                <?php while( have_rows('cpt_categorien', 'option') ): the_row(); ?>
                    <?php if( get_row_layout() == 'cpt_categorien_repeater'): ?>
                        <?php
                            $showcategorie = get_sub_field('slug', 'option');
                            if (strpos($currentUrl, $showcategorie) !== false) { 
                                $showcategorieOk = get_sub_field('titel', 'option');
                                $visible = true; 
                            } ?>
                    <?php endif; ?>
                <?php endwhile; 
                if ($visible) { 
                    $visible = true;
                ?>
                
                   <h1 class=" text-white leading-35 text-35 md:leading-70 md:text-65 font-medium animation-title "><?= $showcategorieOk ?></h1>
                <?php } else { ?>
                       <h1 class=" text-white leading-35 text-35 md:leading-70 md:text-65 font-medium animation-title "><?php the_title(); ?></h1>
                <?php } ?>
            <?php endif; ?>

        
    </div>
    <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
</section>
<section class="container grid grid-cols-3 lg:grid-cols-4 gap-3 my-[50px] md:my-5">

    <article class="col-span-3 lg:col-span-1 h-full pr-4 hidden lg:block">
        <div class="md:p-2 sticky md:bg-white top-9">
           <?php echo do_shortcode("[fe_widget]"); ?>
        </div>
    </article>
    <div class="col-span-3 lg:hidden w-full flex justify-end"><?php echo do_shortcode("[fe_open_button]"); ?></div>
    <article class="col-span-3 md:col-span-3">
     
            <?php
                if( have_rows('cpt_categorien', 'option') ): ?>
                    <?php while( have_rows('cpt_categorien', 'option') ): the_row(); ?>
                        <?php if( get_row_layout() == 'cpt_categorien_repeater'): ?>
                            <?php
                                    $showcategorie = get_sub_field('slug', 'option');
                                        if (strpos($currentUrl, $showcategorie) !== false) { ?>
                    
                                            <div class="block-wysiwyg pt-2 max-w-[800px] pb-2"><?php the_sub_field('eerste_alinea', 'option');?></div>
                                     
                                            <?php
                                        } else {
                                        }
                                    ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
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
                        <a class="grid grid-cols-3 gap-2" href="<?php the_permalink(); ?>">
                        
                            <!-- <div class="col-span-3 md:col-span-3 max-h-[180px] flex items-end justify-start overflow-hidden">
                                <img class="mx-auto md:mx-[unset] w-auto h-full mix-blend-darken"  src="<?php the_field('product_image', $post_id);?>" alt="" />
                            </div> -->
                            <div class="col-span-3 md:col-span-3">
                                <img class="mix-blend-darken packshot"  src="<?php the_field('product_image', $post_id);?>" alt="" />
                            </div>
                       
                            <div class="col-span-3 md:col-span-3 mt-0">
                                <div class="pt-2 flex flex-row justify-between">
                                    <h2 class="text-20 leading-26 font-medium  text-black"><?php the_title();?></h2>
                                    
                                </div>
                                <div class="flex items-end flex-row mt-[8px]">
                                    <p class="text-20 leading-26 font-normal <?php echo((get_field("product_sale", $post_id) === "yes") ? "line-through pr-1 text-16 text-[#B1B1B1]" : "text-oranje"); ?>">&#8364;<?php the_field('product_price', $post_id); ?></p> 
                                    <?php if(get_field("product_sale", $post_id) === "yes"): ?>
                                        <p class="text-oranje text-20 leading-26 font-medium">&#8364;<?php the_field('product_sale_price', $post_id); ?></p>
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

 <?php $visible = false; if( have_rows('cpt_categorien', 'option') ): ?>
                <?php while( have_rows('cpt_categorien', 'option') ): the_row(); ?>
                    <?php if( get_row_layout() == 'cpt_categorien_repeater'): ?>
                        <?php
                            $showcategorie = get_sub_field('slug', 'option');
                            if (strpos($currentUrl, $showcategorie) !== false) { 
                                $showcategorieOk = get_sub_field('overige_teksten', 'option');
                                $visible = true; 
                            } ?>
                    <?php endif; ?>
                <?php endwhile; 
                if ($visible) { 
                    $visible = true;
                ?>

                                                <section class="relative bg-white">
                                                    <div class="container block-wysiwyg">
                                                            <?= $showcategorieOk ?>
                                                    </div>
                                                </section>
                
                 
                <?php } else { ?>
                        <section class="relative bg-white">
                                                 <div class="container block-wysiwyg">
                                                        <?php the_field('default_shop_tekst', 'option');?>
                                                 </div>
                                                </section>
                <?php } ?>
            <?php endif; ?>




            

