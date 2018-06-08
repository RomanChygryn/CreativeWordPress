<div class="header__navbar navbar">

  <div class="container navbar__content">

    <a href="<?php echo get_home_url(); ?>" class="navbar__logo">
      <?php if(get_field('header_logo')) : ?>
        <img src="<?php the_field('header_logo'); ?>" alt="logo" />
      <?php endif; ?>
    </a>

    <nav class="navbar__nav">
      <?php wp_nav_menu( array('theme_location' => 'header_menu')); ?>
    </nav>

  </div>

</div>
