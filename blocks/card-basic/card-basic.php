<section class="<?php echo((get_field('margin')) ? " md:my-10 my-12 " : "") ?> <?php echo get_field('background-color') ?> <?php echo get_field('padding') ?>">
    <div class="container">
        <?php if( have_rows('card_basic') ): ?>
            <ul class="grid grid-cols-3 gap-[35px]">
            <?php while( have_rows('card_basic') ): the_row(); ?>
                <li class="col-span-3 lg:col-span-1 clip-path flex flex-col <?php echo((get_sub_field('background-color')) ? "bg-black" : "bg-roze") ?>">
                    <div class="grid gap-[35px] px-4 pt-4 pb-6   ">
                            <img src="/wp-content/themes/martinsebike-theme/img/icons-acf/<?php echo get_sub_field('icon');?>.svg"  />
                        <h3 class="text-white text-35 leading-40 font-bold"><?php echo get_sub_field('title'); ?></h3>
                        <p class="text-white text-16 leading-26"><?php echo get_sub_field('text'); ?></p>
                    </div>
                        <?php 
                        $link = get_sub_field('button');
                        if( $link || echo get_sub_field('button_true')): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="bg-roze text-white px-4 text-16 leading-26 h-[50px] flex items-center mt-auto" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?> 
    </div>
</section>