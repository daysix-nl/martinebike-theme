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
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php echo get_field('title_informatie', 'option'); ?></h3>
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
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php echo get_field('title_legale_termen', 'option'); ?></h3>
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
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php echo get_field('title_contact', 'option'); ?></h3>
                <div class="flex flex-col gap-1">
                    <p><?php echo get_field('adres', 'option'); ?></p>
                    <a href="tel:+<?php echo get_field('Telefoonnummer', 'option'); ?>"><?php echo get_field('Telefoonnummer', 'option'); ?></a>
                    <a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
                </div>

                <h3 class="my-1 pt-1 text-14 leading-28 font-bold"><?php echo get_field('title_volg_ons', 'option'); ?></h3>
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
                <h3 class="mb-1 text-14 leading-28 font-bold"><?php echo get_field('title_maandelijkse_nieuwsbrief', 'option'); ?></h3>
               <?php    echo do_shortcode( '[gravityform id="1" title="false"]' ); ?>
            </div>
        </div>
    </section>
    <section class="h-4 w-full bg-lichtgrijs">
        <div class="container flex flex-col h-full justify-center">
            <p class="text-black text-14 leading-14"><?php echo get_field('slot', 'option'); ?></p>
        </div>
    </section>
</footer>

<a href="https://wa.me/351927567498" class="fixed right-2 bottom-2 lg:hidden h-[60px] w-[60px] bg-[#25D366] rounded-full flex justify-center items-center shadow-xl shadow-[#2929291c] z-[9999]" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 60 60">
  <path id="whatsapp" d="M51.013,40.719A29.742,29.742,0,0,0,4.219,76.6L0,92l15.763-4.138a29.642,29.642,0,0,0,14.21,3.616h.013A29.543,29.543,0,0,0,51.013,40.719ZM29.987,86.469A24.668,24.668,0,0,1,17.4,83.027l-.9-.536L7.152,84.942l2.491-9.121-.589-.937A24.76,24.76,0,1,1,54.978,61.746,24.988,24.988,0,0,1,29.987,86.469ZM43.54,67.96c-.737-.375-4.393-2.17-5.076-2.411s-1.179-.375-1.674.375-1.915,2.411-2.357,2.92-.871.563-1.607.188c-4.366-2.183-7.232-3.9-10.112-8.839-.763-1.312.763-1.219,2.183-4.058a1.377,1.377,0,0,0-.067-1.3c-.187-.375-1.674-4.031-2.29-5.518-.6-1.446-1.219-1.246-1.674-1.272-.429-.027-.924-.027-1.42-.027a2.752,2.752,0,0,0-1.982.924,8.348,8.348,0,0,0-2.6,6.2c0,3.656,2.665,7.192,3.027,7.688s5.237,8,12.7,11.223c4.714,2.036,6.562,2.21,8.92,1.862,1.433-.214,4.393-1.795,5.009-3.536a6.213,6.213,0,0,0,.429-3.536C44.772,68.509,44.277,68.321,43.54,67.96Z" transform="translate(0 -32)" fill="#fff"/>
</svg>


</a>
<!-- <section class="fixed bottom-0 bg-[#ff0000] left-0 right-0">
    <p class="text-white text-20 py-1 text-center z-[999]">-- THIS WEBSITE IS UNDER CONSTRUCTION -- </p>
 </section> -->

<!-- <style>/* COOKIE POPUP STYLES */



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
    background: #F9BC02;
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
  </style> -->


 <!-- <div class="cookie-popup cookie-popup--short cookie-popup--dark <?php echo get_field('tonen', 'option'); ?>">

    <div>
    <strong><?php echo get_field('popup_titel', 'option'); ?></strong><br>
    <p><?php echo get_field('popup_tekst', 'option'); ?></p>
    </div>
 
    <div class="cookie-popup-actions">
      <button>X</button>
    </div>
  </div>
 -->


<!-- 
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
  </script> -->


<?php wp_footer(); ?>


</body>
</html>