<!-- TEXT-IMAGE -->
<section class="my-8 md:my-10 relative">
    <div class="container grid grid-cols-2 gap-3">
        <div class="order-1 md:order-0 col-span-2 md:col-span-1">
            <?php if(get_field('title')): ?>
                <h3 class="text-25 leading-35 md:text-30 md:leading-40 font-normal text-darkblue mb-2 md:mb-3 md:w-[60%]"><?php the_field('title'); ?></h3>
            <?php endif; ?>
            <?php if(get_field('text')): ?>
                <p class="text-black text-16 leading-26 font-normal md:w-[80%]"><?php the_field('text'); ?></p>
            <?php endif; ?>
            <?php 
            $link = get_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="flex flex-row gap-1 w-[200px] justify-center items-center bg-darkblue py-1 px-3 rounded-full text-white mt-3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="order-0 md:order-1 col-span-2 md:col-span-1 md:pl-10">
            <?php 
            $image = get_field('image');
            if( !empty( $image ) ): ?>
            <img class="w-full object-cover aspect-video md:aspect-square rounded-2xl " src="<?php the_field('image'); ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
</section>