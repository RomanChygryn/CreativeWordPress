<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package waxom
 */


?>
<?php get_header(); ?>

<div class="page__wrapper">
  <?php get_template_part( 'part/nav' ); ?>
  <div class="container">
    <div class="page__content">
      <?php
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
      <?php the_content(); ?>
      <div class="gallery">
        <?php

            $images = get_field('gallery');

            if( $images ): ?>
                <ul class="gallery__content">
                    <?php foreach( $images as $image ): ?>
                        <li class="gallery__content__item">
                            <a class="gallery__content__preview" href="<?php echo $image['url']; ?>">
                                 <img class="gallery__content__full" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

</div>
