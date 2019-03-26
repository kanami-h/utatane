<?php get_header('top'); ?>
   
    <div class="wrap">
    <?php
           if(have_posts()):
            while(have_posts()): the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page-custom'); ?>>
            <h1 class="page-title"><?php the_title(); ?></h1>
              <?php the_content(); ?>                              
            </article>
            <?php
              endwhile;
            endif;
            ?>
    </div>
      
        
            
<!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->
<?php get_footer(); ?>