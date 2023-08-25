<!-- IMAGE-TEXT -->
<?php $count = count(get_field('text_-_image')); ?>
<section class="<?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> <?php the_field('margin_top');?> <?php the_field('margin-bottom');?> relative bg-white">
    <div  class="w-screen md:w-[50vw] h-full md:min-h-[550px] overflow-hidden md:absolute top-0  aspect-video md:aspect-[unset] <?php echo((get_field('left__right')) ? (($count === 1) ? "left-0 px-2 md:px-0" : "left-[20px] px-2 md:pr-2") : (($count === 1) ? "right-0 px-2   md:px-0" : "right-[20px] px-2 md:pr-0 md:pl-2")) ?>    z-0">
        <div class="relative grid  <?php echo(($count === 1) ? " col-span-1" : "grid-cols-2") ?> gap-2 h-full ">
            <?php if( have_rows('text_-_image') ): ?>
                <?php $count = count(get_field('text_-_image')); ?>
                <?php $i = 1 ?>

                <?php while( have_rows('text_-_image') ): the_row();  ?>
                    <img class="overflow-hidden w-full object-cover object-center md:min-h-[550px] h-full <?php echo(($i === 1) ? " image-full" : "image-full-left") ?>  col-span-1" src="<?php the_sub_field('image'); ?>" alt="">
                    <?php $i++ ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="container grid grid-cols-2 z-2 relative gap-4 md:gap-[120px] pt-2 md:py-5 md:min-h-[550px]">
        <?php if( have_rows('text_-_image') ): ?>
                <?php while( have_rows('text_-_image') ): the_row();  ?>

                <?php if(get_field('left__right')): ?>
                    <div class="hidden md:block col-span-1"></div>
                <?php endif; ?>

                <div class="col-span-2 md:col-span-1 md:flex flex-col justify-center h-full gap-2 md:pr-4">
                    <?php if (get_sub_field('title')): ?>   
                    <h2 class="text-25 leading-35 md:text-30 md:leading-40 font-normal text-darkblue md:w-[90%]"><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>
                    <div class="text-black text-16 leading-26 font-normal block-wysiwyg">
                        <?php the_sub_field('text'); ?>
                    </div>
                    <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-darkblue py-1 px-3 rounded-full text-white w-fit" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <?php if(!get_field('left__right')): ?>
                    <div class="hidden md:block col-span-1"></div>
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>