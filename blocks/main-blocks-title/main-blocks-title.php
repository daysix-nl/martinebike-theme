<section class="<?php echo((get_field('margin')) ? " md:my-10 my-12 " : "") ?> <?php the_field('background-color') ?> <?php the_field('padding') ?>">
    <div class="container mb-[-70px] grid grid-cols-2 gap-3">
        <div class="col-span-2 md:col-span-1">
            <h2 class="text-55 leading-55 font-bold text-black mb-3"><?php the_field('title'); ?></h2>
            <h3 class="test-22 leading-32 font-medium text-roze uppercase"><?php the_field('subtitle'); ?></h3>
        </div>
        <?php 
        $link = get_field('button');
        if( $link || the_field('text__button')): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="ml-auto mt-auto button-black-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><div class="border clip-path-button h-[50px]"><span class="outer bg-white text-black px-4 text-16 leading-24 font-medium h-[50px] flex items-center "><?php echo esc_html( $link_title ); ?></span></div></a>
        <?php endif; ?>

        <?php 
        if( !the_field('text__button')): ?>
                <p class="text-16 leading-26 font-normal text-black col-span-2 md:col-span-1">
        <?php the_field('text'); ?></p>
        <?php endif; ?>
    </div>
</section>