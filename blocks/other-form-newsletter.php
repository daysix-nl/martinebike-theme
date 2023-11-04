<section class="my-8 md:my-10 relative bg-white">
    <div class="container flex justify-center items-center flex-col">
        <h3 class="mb-3 text-25 leading-35 md:text-30 md:leading-40  font-medium md:font-normal text-oranje text-center mx-auto"><?php the_field('title_maandelijkse_nieuwsbrief', 'option'); ?></h3>
        <div class="max-w-[350px] w-full">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?><?php    echo do_shortcode( '[gravityform id="1" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='nl'): ?><?php    echo do_shortcode( '[gravityform id="8" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='pt'): ?><?php    echo do_shortcode( '[gravityform id="9" title="false"]' ); ?><?php endif; ?>
        </div>
    </div>
</section>