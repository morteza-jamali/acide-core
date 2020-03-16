<?php
	namespace ACIDECore\App;

	use Noodlehaus\Config as NDConfig;
	use ACIDE\Config as DefConfig;

	class Config {
		public static function get($key) {
			return (new DefConfig([]))->get($key);
		}
	}
?>
