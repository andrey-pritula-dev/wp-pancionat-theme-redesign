<?php
namespace PancionatTheme\Enums;

final class Locale {
	public const UKRAINIAN = 'uk_UA';
	public const RUSSIAN   = 'ru_RU';
	public const ENGLISH   = 'en_US';

	public static function all(): array {
		return array(
			self::UKRAINIAN,
			self::RUSSIAN,
		);
	}
}
