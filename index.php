<?php 
/**
 * The main template file
 * 
 * @package Day Six theme
 */


get_header(); ?>

<main>
<!-- <section class="bg-diepgrijs pb-4">
        <div class="container text-wit home-header-section flex flex-col justify-center">
            <h1 class="text-65 leading-65 md:text-100 md:leading-100 font-medium row-center">Oops you're too fast!</h1>
            <p class="text-22 leading-30 md:text-28 md:leading-38 font-light pr-4 mt-3">This page does not exist or is being created.</p>
        </div>
</section> -->
<?php
header(‘Location: https://martinsebike.com/’); 
?>
</main>
<?php get_footer(); ?>