<?php get_header(); ?>
<section id="services">
  <div class="center-box">

    <?php $servicetop = get_post(7)?>
    <h2 class="align-center"><?php echo $servicetop ->post_title; ?></h2>
    <p ><?php echo $servicetop ->post_content; ?></p>

    <div class="row">

      <?php
        $args = array('child_of' => 7);
        $services = get_pages($args);
        foreach ($services as $service) { ?>
          <div class="one-third">
            <div class="service">
              <?php echo get_the_post_thumbnail($service->ID) ?>
                <a href="<?php echo $service->post_name; ?>" class="button"><?php echo $service->post_title; ?></a>
              </div>
            </div>
          <?php } ?>
      </div>
  </div>
</section>
<section id="offer">
  <div class="center-box">
    <div id="offer-text">
      <?php dynamic_sidebar('Offer'); ?>
    </div>
  </div>
</section>
<section id="team">
  <div class="center-box">

    <?php $teamtop = get_post(9)?>
    <h2 class="align-center"><?php echo $teamtop ->post_title; ?></h2>
    <p class="align-center"><?php echo $teamtop ->post_content; ?></p>
    <!-- <div class="center-box"> -->
      <div class="row">

        <?php
          $args = array('child_of' => 9);
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

      </div>
    <!-- </div> -->
  </div>
</section>
  <section id="testimonial">
  <div id="testimonials">
    <?php dynamic_sidebar('Testimonial'); ?>
  </section>

  </div>
<?php get_footer(); ?>
