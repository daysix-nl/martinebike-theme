<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
 <main>
    <section class="mobile:h-[80vh] h-[30vh] md:h-[55vh] w-screen relative overflow-hidden">
    <img class="w-full h-full object-cover absolute top-0 right-0  image-full" src="https://martinsebike.com/wp-content/uploads/2023/02/MARTINS-E-BIKE-7237-scaled.jpg" alt="">
    <div class="container flex flex-col justify-center gap-3 z-2 h-full relative z-[2]">
        <h1 class=" text-white leading-35 text-35 md:leading-70 md:text-65 font-medium animation-title "><?php the_title(); ?></h1>
    </div>
    <div class="absolute right-0 top-0 w-full h-full bg-black opacity-[0.1] z-[0]"></div>
</section>
 <section class=" lg:my-10  relative">
    <div class=" lg:container grid grid-cols-2 gap-3 mb-12">
        <article class="col-span-3 lg:col-span-1 lg:sticky lg:top-8">
            <img  src="<?php echo get_field('product_image');?>" alt="<?php the_title();?>" />
        </article>
        <article class="col-span-3 lg:col-span-1 p-2 ">
            <h2 class="text-30 leading-40 lg:text-35 lg:leading-45 font-medium lg:font-medium text-black mb-2"><?php the_title() ?></h2>
            <div class="flex flex-row flex-wrap">
                <p class=" text-25 leading-28 font-normal mb-2 <?php echo((get_field("product_sale") === "yes") ? "line-through pr-1 text-[#B1B1B1]" : "text-oranje"); ?>">&#8364;<?php echo get_field('product_price'); ?></p> 
                <?php if(get_field("product_sale") === "yes"): ?>
                    <p class="text-oranje text-25 leading-28 font-medium mb-2">&#8364;<?php echo get_field('product_sale_price'); ?></p>
                <?php endif; ?> 
            </div>
           
            
            <div class="testride max-w-[400px]">
               <?php echo do_shortcode( '[gravityform id="3" title="false" ajax=“true”]' ); ?>
            </div>
            <div class="mt-3">
                
            
                <div class="">
                    <div class="accordion-item"> 
                        <button class="accordion text-20 leading-30 md:text-26 md:leading-36 font-medium py-4 px-2 md:px-4 flex items-center">Description</button>
                    <div class="panel px-2 md:px-4">
                       <div class="flex py-4">
                            <div class="text-black"><?php echo get_field('product_description') ?></div>
                          
                       </div>
                    </div>
                    </div>

                    <div class="accordion-item"> 
                        <button class="accordion text-20 leading-30 md:text-26 md:leading-36 font-medium py-4 px-2 md:px-4 flex items-center">Specifications</button>
                                       
                        <div class="panel px-2 md:px-4">
                       <div class="grid grid-cols-2 py-4 gap-2">
                            <?php

                            // Check rows existexists.
                            if( have_rows('specifications_repeater') ):

                                // Loop through rows.
                                while( have_rows('specifications_repeater') ) : the_row(); ?>

                                    <div class="col span-1 text-black font-bold"><?php echo get_sub_field('specifications_repeater_definition') ?></div>
                                    <div class="col span-1 text-black"><?php echo get_sub_field('specifications_repeater_specification') ?></div>

                                <?php
                                // End loop.
                                endwhile;

                            // No value.
                            else :
                                // Do something...
                            endif;
                            ?>
                
                          
                       </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </article>
    </div>
</section>
 </main>
<?php get_footer(); ?>