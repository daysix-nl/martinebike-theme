<!-- TEXT-WYSIWYG -->
<style>

    h3 {
        color: #FF6800;
        font-size: 40px;
        line-height: 50px;
        font-weight: 500;
    }
    h4 {
        color: #FF6800;
        font-size: 25px;
        line-height: 35px;
        font-weight: 500;
    }
    p {
        color: #000;
        font-size: 18px;
        line-height: 28px;
        font-weight: 400;
    }
</style>

<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>

<section class="my-8 md:my-10 relative bg-white">
    <div class="container flex flex-col gap-3  block-wysiwyg">
        <?php echo get_field('wysiwyg'); ?>
        <?php if (get_field('button')): ?> 
        <div class="flex w-full <?php echo get_field('button_align');?>">
        <a class="flex flex-row gap-1 min-w-[200px] justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
