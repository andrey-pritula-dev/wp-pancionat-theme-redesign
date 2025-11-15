<?php
use PancionatTheme\Enums\Locale;

$viber_group    = get_theme_mod( 'pancionat_header_viber_text', null );
$telegram_group = get_theme_mod( 'pancionat_header_telegram_text', null );
$menu_location  = ( Locale::RUSSIAN === get_locale() ) ? array( 'primary_ru', 'mobile_ru' ) : array( 'primary_ua', 'mobile_ua' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Google Tag Manager -->
	<?php // phpcs:disable WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>



	<?php // phpcs:enable WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="py-3 text-white text-lg text-center tracking-widest font-semibold w-[100%] bg-[#118B50]">
		<?php esc_html_e( 'Caring for people 24/7', 'pancionat-theme' ); ?>
	</div>
	<header class="flex items-center pr-4 justify-between">
		<div class="flex justify-center logo-box py-6 px-4 lg:px-[60px]">
			<?php
			if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
				?>
			<a href="<?php echo esc_url( home_url() ); ?>"> <?php the_custom_logo(); ?> </a>
				<?php
			} else {
				echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
			}
			?>
		</div>
		<div class="flex lg:hidden items-center gap-3">
			<a href="viber://chat?number=<?php echo esc_html( $viber_group ? $viber_group : '' ); ?>">
				<svg width="39" height="44" viewBox="0 0 39 44" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d_2_45)">
						<path
							d="M17.3073 27.9385C17.3073 27.9385 13.7718 32.4132 12.6723 33.575C12.3123 33.9525 11.9178 33.9175 11.9238 33.1684C11.9238 32.6766 11.9508 27.0539 11.9508 27.0539C5.0313 25.0411 5.4393 17.4709 5.5143 13.5108C5.5893 9.54911 6.30331 6.30455 8.40931 4.11969C13.2678 -0.504292 26.9734 0.52952 30.4654 3.86086C34.7344 7.70225 33.2149 18.555 33.2239 18.925C32.3464 26.3459 27.1744 26.8163 26.2234 27.1376C25.8169 27.2746 22.0444 28.2597 17.3073 27.9385Z"
							fill="#9169AF"></path>
					</g>
					<path
						d="M19.4642 8C19.0489 8 19.0489 8.65868 19.4642 8.66417C22.6862 8.68942 25.3398 10.975 25.3689 15.1676C25.3689 15.61 26.0054 15.6045 26 15.1621H25.9989C25.9644 10.6446 23.067 8.02525 19.4642 8Z"
						fill="white"></path>
					<path
						d="M23.7023 14.4726C23.6926 14.9095 24.328 14.9304 24.3334 14.488C24.3862 11.9971 22.8772 9.94527 20.0413 9.729C19.626 9.69826 19.5828 10.3624 19.9971 10.3932C22.4565 10.5831 23.752 12.2913 23.7023 14.4726Z"
						fill="white"></path>
					<path
						d="M23.0229 17.3061C22.49 16.9921 21.9474 17.1876 21.723 17.496L21.2538 18.1141C21.0154 18.4281 20.5699 18.3864 20.5699 18.3864C17.3188 17.5114 16.4493 14.0489 16.4493 14.0489C16.4493 14.0489 16.4094 13.5802 16.7071 13.3288L17.2939 12.8348C17.5874 12.5976 17.7729 12.0268 17.4741 11.4658C16.6759 9.99804 16.1398 9.49195 15.8668 9.10333C15.5799 8.73776 15.1484 8.65543 14.6997 8.90243H14.69C13.7569 9.45792 12.7354 10.4975 13.0623 11.5679C13.6199 12.6964 14.6447 16.2939 17.911 19.0121C19.4459 20.2976 21.8751 21.615 22.9064 21.9191L22.9161 21.9345C23.9322 22.2792 24.9203 21.1989 25.4477 20.2208V20.2131C25.6818 19.7399 25.6041 19.292 25.2622 18.9989C24.656 18.3973 23.7413 17.7332 23.0229 17.3061Z"
						fill="white"></path>
					<path
						d="M20.4857 12.1796C21.5223 12.241 22.025 12.7921 22.0789 13.924C22.0984 14.3664 22.7294 14.3356 22.71 13.8932C22.6409 12.4156 21.8837 11.5922 20.5202 11.5154C20.1049 11.4901 20.0661 12.1543 20.4857 12.1796Z"
						fill="white"></path>
					<defs>
						<filter id="filter0_d_2_45" x="0.484375" y="1" width="37.9951" height="42.8105"
							filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix"
								values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="5"></feOffset>
							<feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
							</feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_45"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_45" result="shape">
							</feBlend>
						</filter>
					</defs>
				</svg>
			</a>
			<a href="https://t.me/<?php echo esc_html( $viber_group ? $viber_group : '' ); ?>">
				<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d_2_42)">
						<circle cx="20" cy="15" r="15" fill="#6DA9D6"></circle>
					</g>
					<path
						d="M11.6984 14.3669L25.001 9.06489C25.6184 8.83432 26.1576 9.22059 25.9576 10.1857L25.9587 10.1845L23.6937 21.2151C23.5259 21.9972 23.0763 22.1874 22.4474 21.8189L18.9982 19.1911L17.3345 20.8479C17.1505 21.0381 16.9953 21.1985 16.6389 21.1985L16.8838 17.57L23.2764 11.6C23.5546 11.3469 23.2143 11.2042 22.8475 11.4562L14.9476 16.5977L11.5421 15.4995C10.8028 15.2571 10.7867 14.7353 11.6984 14.3669Z"
						fill="white"></path>
					<defs>
						<filter id="filter0_d_2_42" x="0" y="0" width="40" height="40" filterUnits="userSpaceOnUse"
							color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feColorMatrix in="SourceAlpha" type="matrix"
								values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
							<feOffset dy="5"></feOffset>
							<feGaussianBlur stdDeviation="2.5"></feGaussianBlur>
							<feComposite in2="hardAlpha" operator="out"></feComposite>
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0">
							</feColorMatrix>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_42"></feBlend>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_42" result="shape">
							</feBlend>
						</filter>
					</defs>
				</svg>
			</a>
		</div>

		<!-- Desktop Menu -->
		<nav class="flex hidden lg:flex text-gray-700 lg:mr-8 text-xl font-semibold flex-row items-center gap-6">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => $menu_location[0],
						'container'      => false,
						'items_wrap'     => '%3$s',
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
		</nav>

		<!-- Language Switcher -->
		<div class="text-2xl hidden lg:flex font-semibold gap-2 text-black lang-switcher">
			<span class="lang-option <?php echo ( get_locale() === Locale::UKRAINIAN ? 'active' : '' ); ?>"
				data-lang="<?php echo esc_html( Locale::UKRAINIAN ); ?>"
				style="cursor:pointer;color:<?php echo ( get_locale() === Locale::UKRAINIAN ? 'rgb(17, 139, 80)' : '#000' ); ?>">
				Укр
			</span>
			/
			<span class="lang-option <?php echo ( get_locale() === Locale::RUSSIAN ? 'active' : '' ); ?>"
				data-lang="<?php echo esc_html( Locale::RUSSIAN ); ?>"
				style="cursor:pointer;color:<?php echo ( get_locale() === Locale::RUSSIAN ? 'rgb(17, 139, 80)' : '#000' ); ?>">
				Рус
			</span>
		</div>
		<div id="nav-icon1" class="lg:hidden ">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>
	<!-- Mobile Menu -->
	<nav class="hidden mobile-menu open">
		<div class="w-[75%] bg-gray-900 absolute right-0 h-full">
			<ul class="flex flex-col text-left text-white text-xl font-semibold h-full">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => $menu_location[1],
							'container'      => false,
							'items_wrap'     => '%3$s',
							'link_before'    => '',
							'link_after'     => '',
							'fallback_cb'    => false,
						)
					);
					?>
			</ul>

			<div class="text-2xl absolute left-8 bottom-[200px] font-semibold gap-2 flex text-white">
				<span class="lang-option <?php echo ( get_locale() === Locale::UKRAINIAN ? 'active' : '' ); ?>"
					data-lang="<?php echo esc_html( Locale::UKRAINIAN ); ?>"
					style="cursor:pointer;color:<?php echo ( get_locale() === Locale::UKRAINIAN ? 'rgb(17, 139, 80)' : 'white' ); ?>">
					Укр
				</span>
				/
				<span class="lang-option <?php echo ( get_locale() === Locale::RUSSIAN ? 'active' : '' ); ?>"
					data-lang="<?php echo esc_html( Locale::RUSSIAN ); ?>"
					style="cursor:pointer;color:<?php echo ( get_locale() === Locale::RUSSIAN ? 'rgb(17, 139, 80)' : 'white' ); ?>">
					Рус
				</span>
			</div>
		</div>
	</nav>
