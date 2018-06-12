<section class="about" id="about">
      <img src="<?php the_field('about_bg'); ?>" alt="About background" class="about__bg" />
      <div class="container">

        <div class="about__hero hero">
          <h2 class="hero__title"><?php the_field('about_title'); ?></h2>
          <p class="hero__description"><?php the_field('about_description'); ?></p>

          <div class="hero__specs specs">
            <div class="specs__item specs__item--design">
              <p class="specs__item__content"><?php the_field('first_skill_text'); ?></p>
            </div>
            <div class="specs__item specs__item--code">
              <p class="specs__item__content"><?php the_field('second_skill_text'); ?></p>
            </div>
            <div class="specs__item specs__item--layout">
              <p class="specs__item__content"><?php the_field('third_skill_text'); ?></p>
            </div>
          </div>

        </div>

        <div class="about__image">

          <img src="<?php the_field('about_side_image'); ?>" alt="Phone image" class="about__image__content">
        </div>
      </div>

    </section>
