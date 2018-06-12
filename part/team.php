<section class="team" id="team">
      <div class="container">

        <div class="wrapper" id="teamTitleWrapper">
          <h2 class="team__title"><?php the_field('team_title'); ?></h2>
          <p class="team__capital"><?php the_field('team_capital'); ?></p>
        </div>

        <p class="team__subtitle"><?php the_field('team_subtitle'); ?></p>

        <div class="team__content">


          <?php if(get_field('team_member')): ?>



            <?php while(has_sub_field('team_member')): ?>
              <figure class="team__content__item item">
                <div class="item__image">
                  <img class="item__image__content" src="<?php the_sub_field('member_photo'); ?>" />
                </div>
                <div class="item__description">
                  <h2 class="item__description__name"><?php the_sub_field('member_name'); ?></h2>
                  <p class="item__description__position"><?php the_sub_field('member_position'); ?></p>
                </div>
              </figure>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
        
      </div>
    </section>
