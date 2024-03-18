<menu class="button-hamburger-menu flex lg:hidden" id="button-hamburger-menu">
    <button class="button-hamburger h-[76px]">
        <?php include('wp-content/themes/day-six/img/icons/hamburger-close.php'); ?>
    </button>
</menu>

<div class="mobile-overlay bg-black">
    <div class="mobile-overlay__main bg-black pt-12 p-4 safari-padding-bottom flex flex-col justify-between overflow-scroll h-[100vh]">
        <nav class="flex justify-start gap-2 flex-col">
            <?php if(get_field('name_dedicated_teams', 'option')): ?>
                <a href="<?php echo get_field('url_dedicated_teams', 'option'); ?>" class="text-white text-34 leading-34 ">
                    <?php echo get_field('name_dedicated_teams', 'option'); ?>
                </a>
            <?php endif; ?>
            <button class="text-white text-34 leading-34 flex justify-between button-second-overlay button-aboutus">
                <?php echo get_field('name_about_us', 'option'); ?>
            </button>
            <button class="text-white text-34 leading-34 flex justify-between button-second-overlay button-insights">
                <?php echo get_field('name_stories', 'option'); ?>
            </button>
            <?php if(get_field('name_events', 'option')): ?>
                <a href="<?php echo get_field('url_name', 'option'); ?>" 
                    class="text-white text-34 leading-34 ">
                    <?php echo get_field('name_events', 'option'); ?>
                </a>
            <?php endif; ?>
            <?php if(get_field('name_careers', 'option')): ?>
                <a href="<?php echo get_field('url_careers', 'option'); ?>" class="text-white text-34 leading-34 ">
                    <?php echo get_field('name_careers', 'option'); ?>
                </a>
            <?php endif; ?>
            <?php if(get_field('name_contact', 'option')): ?>
                <a class="btn-transparant text-16 leading-16 font-hind font-light p-button rounded-[12px] transition ease-in duration-300 hover:ease-out w-fit h-[45px] items-center  flex justify-center mt-2"
                    href="<?php echo get_field('url_contact', 'option'); ?>">
                    <?php echo get_field('name_contact', 'option'); ?>
                </a>
            <?php endif; ?>
        </nav>
        <div class="pb-2 mt-8">
            <p class="text-18 text-white leading-26 mb-4 max-w-[260px]"><?php echo get_field('text', 'option') ?></p>
            <menu class="flex gap-2 md:gap-3 flex-col">

            </menu>
        </div>
    </div>
</div>

<div class="mobile-overlay__second bg-black p-4 pt-6">

    <div class="overlay-aboutus-mobile hidden">
        <button class="button-back mb-2 text-white text-18 leading-26">
            all
        </button>
        <h3 class="text-oranje text-34 leading-34 mb-3"><?php echo get_field('name_about_us', 'option'); ?></h3>
        <nav class="flex flex-col justify-start gap-2 items-start">
            <?php if( have_rows('about_us_repeater', 'option') ): ?>
                <?php while( have_rows('about_us_repeater', 'option') ): the_row(); ?>
                    <a href="<?php echo get_sub_field('url', 'option'); ?>" class="text-white text-24 leading-24">
                        <?php echo get_sub_field('name', 'option'); ?>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </nav>
    </div>

    <div class="overlay-insights-mobile hidden">
        <button class="button-back mb-2 text-white text-18 leading-26">
            all
        </button>
        <h3 class="text-oranje text-34 leading-34 mb-3"><?php echo get_field('name_stories', 'option'); ?></h3>
        <nav class="flex flex-col justify-start gap-2 items-start">
            <?php if( have_rows('stories_repeater', 'option') ): ?>
                <?php while( have_rows('stories_repeater', 'option') ): the_row(); ?>
                    <a href="<?php echo get_sub_field('url', 'option'); ?>" class="text-white text-24 leading-24">
                        <?php echo get_sub_field('name', 'option'); ?>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </nav>
    </div>
</div>

<div class="overlay-mobile-close hidden"></div>