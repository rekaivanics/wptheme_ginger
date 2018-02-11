

<?php /*Template Name: Team */ ?>
<?php get_header(); ?>
<div class="center-box">
      <main>
          <h2 class="align-center"><?php the_title(); ?></h2>

        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
                  <?php the_post_thumbnail(); ?>
                  <p>
                    <?php the_content(); ?>
                  </p>

                  <?php $currentpage = $post->ID;
                    $args = array('child_of' => $currentpage);
                    $team = get_pages($args);
                    foreach ($team as $member) { ?>

                      <div class="one-half">
                        <div class="team-member align-center">
                          <?php echo get_the_post_thumbnail($member->ID) ?>
                          <div class="team-text">
                            <h3><?php echo $member->post_title; ?></h3>

                            <?php
                            $content = get_post_field( 'post_content', $member->ID );
                            $content_parts = get_extended( $content );
                            echo wpautop( $content_parts['main']); ?>
                          </div>
                          <a href="<?php echo $member->post_name; ?>" class="button"><?php echo $member->post_title; ?></a>
                        </div>
                      </div>
                      <?php } ?>









          <?php endwhile; ?>
        <?php endif; ?>
      </main>
</div>
<?php get_footer(); ?>
