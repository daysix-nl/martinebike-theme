<!-- Navbar desktop -->
<div id="navbar-desktop" class="nav hidden lg:flex text-wit px-4 py-2 justify-between items-center ">
    <div class="logo z-50"><a href="/"><?php include('wp-content/themes/day-six/img/icons/logo.php'); ?></a>
    </div>
    <nav class="menu items-center gap-4 flex z-50">
        <button 
            class="text-16 font-medium text-white show-modal-about drophidden relative">
            <?php echo get_field('name_diensten', 'option'); ?>
        </button>
        <?php if(get_field('name_over_ons', 'option')): ?>
            <a href="<?php echo get_field('url_over_ons', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php echo get_field('name_over_ons', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_werkwijze', 'option')): ?>
            <a href="<?php echo get_field('url_werkwijze', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php echo get_field('name_werkwijze', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_cases', 'option')): ?>
            <a href="<?php echo get_field('url_cases', 'option'); ?>"
                class="text-16 font-medium text-white nodrop-service">
                <?php echo get_field('name_cases', 'option'); ?>
            </a>
        <?php endif; ?>
        <?php if(get_field('name_contact', 'option')): ?>
            <a class="ml-auto mt-auto button-contact" href="<?php echo get_field('url_contact', 'option'); ?>"><div class="border clip-path-button h-[50px]"><span class="outer bg-white text-white px-3 text-16 leading-24 font-medium h-[50px] flex items-center "><?php echo get_field('name_contact', 'option'); ?></span></div></a>
        <?php endif; ?>
    </nav>
</div>
<div class="border-header hidden lg:block"></div>