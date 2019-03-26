<?php get_header('blog'); ?>

    <div class="blog-wrap">
        <div class="main">
        <?php
           if(have_posts()):
            while(have_posts()): the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>class="blog-content">
                <div class="eyecatch">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('post-thumbnails');?>
            <?php endif; ?>
                    </div>
                <div class="post-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="post-info">
                    <p class="post-date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time></p>
                    <p class="post-cat">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/folder.svg" alt="">
                        <p class="cat-name"><?php the_category(); ?></p>
                    </p>
                </div>
                <section class="entry-content">
                    <?php the_content(); ?>                    
                </section>

                <nav class="post-nav">
                    <span class="prev">前の記事へ<?php previous_post_link() ?></span>
                    <span class="next">次の記事へ<?php next_post_link() ?></span>
                </nav>
            </article>
            <?php
              endwhile;
            endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
            
    </div>
<!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->
<?php get_footer(); ?>