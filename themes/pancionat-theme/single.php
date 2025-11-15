<?php
use PancionatTheme\Enums\Locale;

$lang = get_locale();

get_header(); ?>

<div class="px-4 py-8 flex flex-col lg:max-w-[70%]">
	<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" class="rounded-xl mb-5 max-w-[100%]" alt="blog-1">
	<h1 class="text-5xl font-semibold text-gray-700 max-w-[100%] mb-5">
		<?php echo wp_kses_post( Locale::RUSSIAN === $lang ? get_field( 'post_title_ru' ) : get_the_title() ); ?>
	</h1>
	<?php echo wp_kses_post( Locale::RUSSIAN === $lang ? get_field( 'post_text_ru' ) : get_the_content() ); ?>
</div>

<?php
get_footer();
