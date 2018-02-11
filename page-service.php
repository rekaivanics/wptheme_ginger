<?php /*Template Name: Service */ ?>


<?php get_header(); ?>
<div class="center-box">
      <main>
          <h2><?php the_title(); ?></h2>

        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>

            <?php $currentpage = $post->ID;
            $args = array('child_of' => $currentpage);
            $services = get_pages($args);
            foreach ($services as $service) { ?>
              <div class="one-third">
                <div class="service">
                  <?php echo get_the_post_thumbnail($service->ID) ?>
                  <a href="<?php echo $service->post_name; ?>" class="button"><?php echo $service->post_title; ?></a>
                </div>
              </div>
            <?php }  ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </main>
</div>
<?php get_footer(); ?>
