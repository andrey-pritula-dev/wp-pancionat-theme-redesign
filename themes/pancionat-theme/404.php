<?php get_header(); ?>

<main class="container text-center py-20 mt-6 mb-6">
	<h2><?php esc_html_e( '404 — Сторінку не знайдено', 'pancionat' ); ?></h2>
	<p><?php esc_html_e( 'На жаль, запитана сторінка відсутня або була видалена.', 'pancionat' ); ?></p>
	<a href="<?php echo esc_url( home_url() ); ?>" class="btn"><?php esc_html_e( 'Повернутись на головну', 'pancionat' ); ?></a>
</main>

<?php get_footer(); ?>
