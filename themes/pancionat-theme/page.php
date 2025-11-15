<?php
get_header();
?>

<main id="primary" class="site-main container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
				<header class="page-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>

				<div class="page-body">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'pancionat-theme' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			</article>

			<?php
		endwhile;
	else :
		?>
		<section class="no-results not-found">
			<h2><?php esc_html_e( 'Нічого не знайдено', 'pancionat-theme' ); ?></h2>
			<p><?php esc_html_e( 'На жаль, тут поки що немає контенту.', 'pancionat-theme' ); ?></p>
		</section>
		<?php
	endif;
	?>
</main>

<?php get_footer(); ?>
