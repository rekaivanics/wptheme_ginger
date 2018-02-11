<?php get_header(); ?>
<div class="center-box">
  <div class="row">
    <div class="two-third">
      <main>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <!-- <div class="row">
              <div class="one-half"> -->
              <div class="post-pic">
                <?php the_post_thumbnail(); ?>
                <?php the_date(); ?>
                
              </div>
            <!-- </div>
          <div class="one-half"> -->
            <?php the_content(); ?>
             <!-- </div>
           </div> -->
          <?php endwhile; ?>
        <?php endif; ?>
      </main>
    </div>
    <div class="one-third">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
