<!-- TEXT-BLOCK -->
<section class="my-8 md:my-10 relative text-block bg-white">
    <div class="container">
        <?php if(get_field('title')): ?>
            <h3 class="text-35 leading-42 md:text-50 md:leading-60 font-medium md:font-normal text-darkblue md:w-[70%]"><?php the_field('title'); ?></h3>
        <?php endif; ?>
        <?php if(get_field('text')): ?>
            <p class="text-black text-16 leading-26 font-normal mt-3 <?php echo((get_field('size_text_-_block')) ? " md:w-[80%] " : "md:w-[50%]") ?>  "><?php the_field('text'); ?></p>
        <?php endif; ?>
        <?php if( have_rows('icons') ): ?>
            <div class="container grid grid-cols-4 md:grid-cols-5 gap-6 justify-center items-center">
            <?php while( have_rows('icons') ): the_row();  ?>
                <?php 
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img class="col-span-2 md:col-span-1 max-w-[175px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>