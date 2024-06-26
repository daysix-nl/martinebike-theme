<!-- OTHER-CONTACT -->
<section class="my-8 md:my-10 bg-white">
    <div class="container grid grid-cols-2 gap-5">

        <div class="col-span-2 md:col-span-1">
            <h2 class="text-30 leading-40 md:text-35 md:leading-45 font-medium md:font-medium text-oranje mb-2"><?php echo get_field("title") ?></h2>
            <h3 class="text-20 leading-30 md:text-25 md:leading-35 font-medium md:font-normal text-oranje md:w-[90%]"><?php echo get_field("text") ?></h3>
        </div>

        <div class="col-span-2 md:col-span-1">
            <div class="grid grid-cols-2 gap-2">
                <div class="ccol-span-2 md:ol-span-1">
                    <h3 class="mb-1 text-14 leading-28 font-bold text-oranje"><?php echo get_field('title_contact', 'option'); ?></h3>
                    <div class="flex flex-col gap-0.75">
                        <p><?php echo get_field('adres', 'option'); ?></p>
                        <a href="tel:+<?php echo get_field('Telefoonnummer', 'option'); ?>"><?php echo get_field('Telefoonnummer', 'option'); ?></a>
                        <a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
                        <a class="pt-2" href="tel:+351927567498‬">Emergency number for rental clients: +351 927 567 498‬</a>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <?php if( have_rows('items', 'option') ): ?>
                        <h3 class="mb-1 text-14 leading-28 font-bold text-oranje"><?php echo get_field('title', 'option'); ?></h3>
                        <?php while( have_rows('items', 'option') ): the_row(); ?>
                            <p><?php echo get_sub_field('text', 'option'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
 
        <div class="col-span-2 md:col-span-1 contact-button">
            
            <?php echo do_shortcode( '[gravityform id="2" title="false"]' ); ?>
        </div>
        <div class="col-span-2 md:col-span-1 min-h-[350px]">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d813634.9316190607!2d-8.22474!3d37.194019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ab3bc29b104ff%3A0x19e21b337abf9249!2sAv.%20Duarte%20Pacheco%2048%2C%208135-104%20Almancil%2C%20Portugal!5e0!3m2!1sen!2sus!4v1671532885363!5m2!1sen!2sen" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            
        </div>
    </div>
</section>
