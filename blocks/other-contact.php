<!-- OTHER-CONTACT -->
<section class="my-8 md:my-10">
    <div class="container grid grid-cols-2 gap-5">

        <div class="col-span-2 md:col-span-1">
            <h2 class="text-30 leading-40 md:text-35 md:leading-45 font-medium md:font-medium text-darkblue mb-2"><?php the_field("title") ?></h2>
            <h3 class="text-20 leading-30 md:text-25 md:leading-35 font-medium md:font-normal text-darkblue md:w-[90%]"><?php the_field("text") ?></h3>
        </div>

        <div class="col-span-2 md:col-span-1">
            <div class="grid grid-cols-2 gap-2">
                <div class="ccol-span-2 md:ol-span-1">
                    <h3 class="mb-1 text-14 leading-28 font-bold text-darkblue"><?php the_field('title_contact', 'option'); ?></h3>
                    <div class="flex flex-col gap-0.75">
                        <p><?php the_field('adres', 'option'); ?></p>
                        <a href="tel:+<?php the_field('Telefoonnummer', 'option'); ?>"><?php the_field('Telefoonnummer', 'option'); ?></a>
                        <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                        <a class="pt-2" href="tel:+351926890243"><?php if(ICL_LANGUAGE_CODE=='en'): ?>Emergency number for rental clients: <?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>Noodnummer voor verhuurklanten: <?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>Número de emergência para clientes de aluguer: <?php endif; ?>+351 926 890 243</a>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <?php if( have_rows('items', 'option') ): ?>
                        <h3 class="mb-1 text-14 leading-28 font-bold text-darkblue"><?php the_field('title', 'option'); ?></h3>
                        <?php while( have_rows('items', 'option') ): the_row(); ?>
                            <p><?php the_sub_field('text', 'option'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
 
        <div class="col-span-2 md:col-span-1 contact-button">
            
            <?php if(ICL_LANGUAGE_CODE=='en'): ?><?php echo do_shortcode( '[gravityform id="2" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='nl'): ?><?php echo do_shortcode( '[gravityform id="6" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='pt'): ?><?php echo do_shortcode( '[gravityform id="7" title="false"]' ); ?><?php endif; ?>
        </div>
        <div class="col-span-2 md:col-span-1 min-h-[350px]">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d813634.9316190607!2d-8.22474!3d37.194019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ab3bc29b104ff%3A0x19e21b337abf9249!2sAv.%20Duarte%20Pacheco%2048%2C%208135-104%20Almancil%2C%20Portugal!5e0!3m2!1snl!2sus!4v1671532885363!5m2!1snl!2sus&amp;hl=en" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif(ICL_LANGUAGE_CODE=='nl'): ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d813634.9316190607!2d-8.22474!3d37.194019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ab3bc29b104ff%3A0x19e21b337abf9249!2sAv.%20Duarte%20Pacheco%2048%2C%208135-104%20Almancil%2C%20Portugal!5e0!3m2!1snl!2sus!4v1671532885363!5m2!1snl!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php elseif(ICL_LANGUAGE_CODE=='pt'): ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d813634.9316190607!2d-8.22474!3d37.194019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ab3bc29b104ff%3A0x19e21b337abf9249!2sAv.%20Duarte%20Pacheco%2048%2C%208135-104%20Almancil%2C%20Portugal!5e0!3m2!1snl!2sus!4v1671532885363!5m2!1snl!2sus&amp;hl=pt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endif; ?>
            
        </div>
    </div>
</section>