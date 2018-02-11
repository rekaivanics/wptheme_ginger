<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ) ?>/css/reset.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ) ?>/css/grid.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() ) ?>/css/typo.css" />
 <link href="https://fonts.googleapis.com/css?family=Allura|Merienda|Raleway&amp;subset=latin-ext" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
 <?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>




  <section id="top">
    <header <?php if (!is_front_page()) { echo 'class="inner-page"'; } ?>>
      <div class="center-box">
        <div id="navigation">
          <nav>
            <?php wp_nav_menu(); ?>
          </nav>
        </div>
        <div id="logo">
          <h1>Boszorkányos<br>
            mézeskalács</h1>
        </div>
      </div>
    </header>
    <?php if (is_front_page()) { ?>
      <div class="center-box">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php } ?>
  </section>
