<section class="features" id="features" style="background: <?php the_field('bgc'); ?>">

      <div class="container">
        <div class="features__title title">
          <h2 class="title__content"><?php the_field('feature_title'); ?></h2>
          <p class="title__capital"><?php the_field('feature_capital'); ?></p>
        </div>

        <div class="features__item">

          <?php if(get_field('feature_item')): ?>



          	<?php while(has_sub_field('feature_item')): ?>
              <figure class="item">
                <div class="item__image" style="background:<?php the_field('icon_bgc'); ?>;">
                  <img class="item__image__content" src="<?php the_sub_field('item_icon'); ?>" />
                </div>
            		<figcaption class="item__title"><?php the_sub_field('item_title'); ?></figcaption>
                <p class="item__description"><?php the_sub_field('item_text'); ?></p>
              </figure>
          	<?php endwhile; ?>



          <?php endif; ?>

        </div>
      </div>

    </section>
