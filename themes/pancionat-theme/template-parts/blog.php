<?php
use PancionatTheme\Enums\Locale;

$blogs_title = $args['title'];
$lang        = $args['lang'];
$args        = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
);
$query       = new WP_Query( $args ); ?>

<div class="bg-[#118b501a] py-12 px-4">
	<h2 class="text-4xl mb-8 text-center font-semibold text-gray-700">
		<?php echo esc_html( $blogs_title ); ?>
	</h2>
	<div class="flex lg:flex-row justify-center flex-col lg:gap-6 gap-3">
		<?php
		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
			<article class="relative h-[673px] rounded-b-xl">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>">
						<?php
						the_post_thumbnail(
							'medium_large',
							array(
								'class' => 'lg:w-[350px] h-[253px] rounded-t-xl object-cover',
								'alt'   => esc_attr( get_the_title() ),
							)
						);
						?>
					</a>
				<?php endif; ?>

				<div class="h-[400px] lg:w-[350px] bg-white px-4 rounded-b-xl py-4 relative">
					<h3 class="text-3xl mb-4 font-semibold text-left text-gray-700">
						<a href="<?php the_permalink(); ?>" class="hover:text-[#BBB36A]">
							<?php
								$correct_title = Locale::RUSSIAN === $lang ? get_field( 'post_title_ru', get_the_ID() ) : get_the_title();
								echo esc_html( $correct_title );
							?>
						</a>
					</h3>

					<p class="text-xl font-semibold text-gray-400">
						<?php echo esc_html( wp_trim_words( get_the_excerpt(), 14, ' […]' ) ); ?>
					</p>

					<a href="<?php the_permalink(); ?>" class="text-[#A294F9] block mt-2 text-xl absolute bottom-8 font-semibold">
						<?php
							$button_name = Locale::RUSSIAN === $lang ? get_field( 'read_more_button_ru', get_the_ID() ) : get_field( 'read_more_button_ua', get_the_ID() );
							echo esc_html( $button_name );
						?>
					</a>
				</div>
			</article>
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</div>
