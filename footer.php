<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="flex flex-col gap-5 mt-8 md:mt-10">

    <section>
        <div class="container grid grid-cols-4 gap-3">
            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col ">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_informatie', 'option'); ?></h3>
                <?php if( have_rows('repeater_informatie', 'option') ): ?>
                    <div class="flex flex-col gap-1">
                    <?php while( have_rows('repeater_informatie', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link_informatie', 'option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_legale_termen', 'option'); ?></h3>
                <?php if( have_rows('repeater_legale_termen', 'option') ): ?>
                    <div class="flex flex-col gap-1">
                    <?php while( have_rows('repeater_legale_termen', 'option') ): the_row(); ?>
                            <?php 
                            $link = get_sub_field('link', 'option');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-span-4 sm:col-span-2 md:col-span-1 flex flex-col ">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_contact', 'option'); ?></h3>
                <div class="flex flex-col gap-1">
                    <p><?php the_field('adres', 'option'); ?></p>
                    <a href="tel:+<?php the_field('Telefoonnummer', 'option'); ?>"><?php the_field('Telefoonnummer', 'option'); ?></a>
                    <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                </div>

                <h3 class="my-1 pt-1 text-14 leading-28 font-bold"><?php the_field('title_volg_ons', 'option'); ?></h3>
                <div class="flex flex-row flex-wrap gap-1">
                    <?php 
                    $link = get_field('facebook', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('instagram', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                        </a>
                    <?php endif; ?>
                 
                    <?php 
                    $link = get_field('tripadvisor', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/trustpilot.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('google', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php include get_template_directory() . '/img/icons/google.php'; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-span-4 sm:col-span-2 md:col-span-1">
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php the_field('title_maandelijkse_nieuwsbrief', 'option'); ?></h3>
                <?php if(ICL_LANGUAGE_CODE=='en'): ?><?php    echo do_shortcode( '[gravityform id="1" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='nl'): ?><?php    echo do_shortcode( '[gravityform id="8" title="false"]' ); ?><?php elseif(ICL_LANGUAGE_CODE=='pt'): ?><?php    echo do_shortcode( '[gravityform id="9" title="false"]' ); ?><?php endif; ?>
            </div>
        </div>
    </section>
    <section class="h-4 w-full bg-blue/20">
        <div class="container flex flex-col h-full justify-center">
            <p class="text-black text-14 leading-14"><?php the_field('slot', 'option'); ?></p>
        </div>
    </section>
</footer>
<!-- <section class="fixed bottom-0 bg-[#ff0000] left-0 right-0">
    <p class="text-white text-20 py-1 text-center z-[999]">-- THIS WEBSITE IS UNDER CONSTRUCTION -- </p>
 </section> -->

<style>/* COOKIE POPUP STYLES */



.cookie-popup {
  
    font-size: 0.875rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    position: fixed;
    bottom: -6.25rem;
    left: 1.25rem;
    right: 1.25rem;
    padding: 0.625rem 0.9375rem;
    box-shadow: 0 0 0.625rem 0 rgba(0,0,0, .15);
    line-height: 150%;
    transition: opacity .5s;
    opacity: 0;
    border-radius: 5px;
  }

  .cookie-popup p {
    font-size: 0.875rem;
    color: #fff;
  }

  .cookie-popup.hide {
      display:none !important;
  }
  .cookie-popup--short {
    right: none;
    width: 21.875rem; 
  }
  .cookie-popup--dark {
    background: #8ebf31;
    color: #fff;
  }
  .cookie-popup--not-accepted {
    opacity: 1;
    animation: cookie-popup-in .5s ease forwards;  
  z-index: 9;
  }
  .cookie-popup--accepted {
    opacity: 0;
  }
  .cookie-popup a {
    color: #fff;
  }
  .cookie-popup a:visited {
    color: #fff;
    text-decoration: none;
  }
  .cookie-popup-actions {
    flex: 1;
    text-align: right;
  }
  .cookie-popup-actions button {
    color: #fff;
    border: none;
    background: none;
    font-family: inherit;
    font-style: inherit;
    font-size: inherit;
    font-weight: bold;
    text-transform: uppercase;
    font-size:  0.75rem;
    padding: 0;
    cursor: pointer;
  }
  .cookie-popup-actions button:hover {
    text-decoration: underline;
  }
  
  @keyframes cookie-popup-in {
    from { bottom: -6.25rem; }
    to { bottom: 1.25rem; }
  }
  </style>


 <div class="cookie-popup cookie-popup--short cookie-popup--dark <?php the_field('tonen', 'option'); ?>">

    <div>
    <strong><?php the_field('popup_titel', 'option'); ?></strong><br>
    <p><?php the_field('popup_tekst', 'option'); ?></p>
    </div>
 
    <div class="cookie-popup-actions">
      <button>X</button>
    </div>
  </div>




 <script>
  
  /* common fuctions */
  function el(selector) { return document.querySelector(selector) }
  function els(selector) { return document.querySelectorAll(selector) }
  function on(selector, event, action) { els(selector).forEach(e => e.addEventListener(event, action)) }
  function cookie(name) { 
    let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name+'='))
    return c ? c.split('=')[1] : false; 
  }
  
  /* popup button hanler */
  on('.cookie-popup button', 'click', () => {
    el('.cookie-popup').classList.add('cookie-popup--accepted');
    document.cookie = `cookie-accepted=true`
  });
  
  /* popup init hanler */
  if (cookie('cookie-accepted') !== "true") {
    el('.cookie-popup').classList.add('cookie-popup--not-accepted');
  }
  
  
  /* page buttons handlers */
  
  function _reset() {
    document.cookie = 'cookie-accepted=false'; 
    document.location.reload();
  }
  
  function _switchMode(cssClass) {
    el('.cookie-popup').classList.toggle(cssClass);
  }
  </script>


<?php wp_footer(); ?>


</body>
</html>