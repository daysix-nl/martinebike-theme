<!-- TEXT-WYSIWYG -->
<style>

    h3 {
        color: #003054;
        font-size: 40px;
        line-height: 50px;
        font-weight: 500;
    }
    h4 {
        color: #003054;
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

<section class="my-8 md:my-10 relative">
    <div class="container flex flex-col gap-3  block-wysiwyg">
        <?php the_field('wysiwyg'); ?>
    </div>
</section>