
<div class="news">
	<div class="container">
		<div class="wrapper" id="newsWrapper">
		<?php

		global $post;
		$args = array( 'posts_per_page' => 100);

		$myposts = get_posts( $args );

				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="news__item item">
					<div class="item__image"><?php  the_post_thumbnail() ?></div>
					<h2 class="item__title"><?php the_title(); ?></h2>
					<p class="item__content"><?php the_excerpt(); ?></p>
					</div>
				<?php endforeach;

		wp_reset_postdata();?>
		<a href="#" class="news__more" id="newsMore">Show more</a>
		</div>
	</div>
</div>
