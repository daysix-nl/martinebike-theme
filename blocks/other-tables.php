<!-- OTHER-TABLES -->
<section class="my-8 md:my-10 relative bg-white">
<div class="container mb-3 md:mb-5">
    <h2 class="text-40 leading-50 font-medium text-oranje md:w-[90%]"><?php echo get_field('title');?></h2>
</div>
    <div class="container overflow-auto">
        <?php if( have_rows('tables') ): $count = 0; ?>
            <table>
            <?php while( have_rows('tables') ): the_row();  ?>
                <tr>
                <?php if( have_rows('inner_tables') ):  ?>
                    <?php while( have_rows('inner_tables') ): the_row();  ?>
                        <<?php echo(($count === 0) ?"th": "td") ?> class="text-oranje"><span class="flex flex-ro gap-1"><?php echo get_sub_field('text');?><?php if(get_sub_field('icon_image')): ?><img src="/wp-content/themes/martinsebike-theme/img/icons-acf/<?php echo get_sub_field('icon_image');?>.svg" alt=""> <?php endif; ?></span></<?php echo(($count == 1) ? "th": "td") ?>>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tr>
            <?php $count++; endwhile; ?>
            </table>
        <?php endif; ?>
    </div>
</section>