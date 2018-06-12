<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/css/main.css">
</head>
<body>


  <?php

  			if ( is_front_page() ) : ?>
          <header class="header" id="header">

            <?php if(get_field('header_bg')) : ?>
              <img class="header__bg" src="<?php the_field('header_bg'); ?>" alt="" />
            <?php endif; ?>

          <?php get_template_part( 'part/nav' ); ?>
          <div class="header__hero hero">
                  <?php if(get_field('header_title')) : ?>
                    <h1 class="hero__title"><?php the_field('header_title'); ?></h1>
                  <?php endif; ?>

                    <h2 class="hero__subtitle"><?php the_field('header_subtitle'); ?></h2>

                </div>

                <a class="header__hero__btn" href="#"><?php the_field('header_btn_text'); ?></a>
          </header>

  				<?php endif;
