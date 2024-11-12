<?php

//** * Template Name: About */

?>


<?php get_header(); ?>

    <!-- BANNER -->


      <!-- --------------------------------------------------------- -->
        <div
          class="wrapper w-[800px] mx-auto gap-2 grid grid-cols-[_1fr_3fr]"
        >
       <div></div>
          <div class="border-l border-primary px-3 py-6">
            <p
              class="postTitle uppercase text-primary font-oswald text-[25px] font-semibold mb-12"
            >
            
              <?php the_title(); ?>
            <nav>
              <?php the_content(); ?>
             </nav>
            </p>
            <div class="border-b border-primary border-dotted pb-4">
         
             
            </div>
          </div>
        </div>

<?php get_footer(); ?>