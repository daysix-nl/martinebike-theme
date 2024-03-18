
<!-- Dropdown About -->
<div class="dropdown-about drophidden">
    <div class="bordermenu border-t-2 border-lichtgrijs"></div>
    <nav class="container pt-4 pb-6 grid grid-cols-4 gap-5">

            <?php if( have_rows('diensten_repeater', 'option') ): ?>
                <div class="content col-span-1">
                <?php while( have_rows('diensten_repeater', 'option') ): the_row(); ?>
                    <a href="<?php echo get_sub_field('url', 'option'); ?>">
                        <p class="text-16 leading-32 text-wit font-normal"><?php echo get_sub_field('name', 'option'); ?></p>
                    </a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if( have_rows('diensten_repeater_2', 'option') ): ?>
                <div class="content col-span-1">
                <?php while( have_rows('diensten_repeater_2', 'option') ): the_row(); ?>
                    <a href="<?php echo get_sub_field('url', 'option'); ?>">
                        <p class="text-16 leading-32 text-wit font-normal"><?php echo get_sub_field('name', 'option'); ?></p>
                    </a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if( have_rows('diensten_repeater_3', 'option') ): ?>
                <div class="content col-span-1">
                <?php while( have_rows('diensten_repeater_3', 'option') ): the_row(); ?>
                    <a href="<?php echo get_sub_field('url', 'option'); ?>">
                        <p class="text-16 leading-32 text-wit font-normal"><?php echo get_sub_field('name', 'option'); ?></p>
                    </a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>


    </nav>
</div>
<!-- Overlays -->
<div class="overlay-service drophidden"></div>
<div class="overlay-about drophidden"></div>