<!-- TEXT-WYSIWYG-IMAGE -->
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

<section class="my-8 md:my-10 relative bg-white">
    <div class="container mb-3 md:mb-5">
        <h2 class="text-40 leading-50 font-medium text-oranje md:w-[60%]"><?php echo get_field('title');?></h2>
    </div>  
    <div class="container grid grid-cols-3 gap-6 block-wysiwyg">
       <div class="col-span-2 md:col-span-1">
            <img src="<?php echo get_field('image'); ?>" alt="">
       </div>
       <div class="col-span-3 md:col-span-2 flex flex-col gap-2 md:w-[80%] ">
            <?php echo get_field('wysiwyg'); ?>
       </div>
    </div>
</section>