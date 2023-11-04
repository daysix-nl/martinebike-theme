<section class="h-screen w-screen relative">
    <!-- <img class="w-full h-full object-cover absolute top-0 right-1 -z-10" src="https://martinsebike.com/wp-content/uploads/2021/02/180522_Klever_Bikes_B_Comfort_Blue_0546-1024x683.jpg" alt=""> -->
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10" autoplay="" loop="" muted="" playsinline  class="absolute left-0 top-0 -z-10 h-[80vh] md:h-full md:w-full object-cover">
        <source src="<?php the_field('video');?>#t=0.001" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container relative z-[2] h-full justify-center flex flex-col">
        <h1 class="text-oranje leading-35 text-35 md:leading-70 md:text-65 font-medium pb-3"><?php the_field('title');?></h1>
        <div class=" flex-row flex-wrap gap-2 md:gap-2 gap-y-2  flex h-fit"> 
            <a class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit hover:bg-white hover:text-oranje duration-300" href="<?php the_field('button_link_1');?>"><?php the_field('button_tekst_1');?></a>
            <a class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit hover:bg-white hover:text-oranje duration-300" href="<?php the_field('button_link_2');?>"><?php the_field('button_tekst_2');?></a>
            <a class="flex flex-row h-5  justify-center items-center bg-oranje py-1 px-3 rounded-[12px] text-white w-fit hover:bg-white hover:text-oranje duration-300" href="<?php the_field('button_link_3');?>"><?php the_field('button_tekst_3');?></a>
            <!-- <button class="flex flex-row h-5  justify-center items-center bg-white py-1 px-3 rounded-[12px] text-oranje w-fit button-contact-overlay"><?php the_field('button_tekst_3');?></button> -->
        </div>
    </div>
    <!-- <div class="absolute right-0 top-0 w-full h-full bg-black opacity-40 z-[0]"></div> -->
</section>