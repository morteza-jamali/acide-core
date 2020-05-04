<?php
	namespace ACIDECore\App;

	class StringFactory {
		public static function getStringBeforeToken($string , $token = "@") {
			return strtok($string , $token);
		}

		public static function getStringAfterToken($string , $token = "@") {
			strtok($string , $token);
			return strtok('');
		}

		public static function lastReplace($search, $replace, $subject) {
			$pos = strrpos($subject, $search);

			if($pos !== false) {
				$subject = substr_replace($subject, $replace, $pos, strlen($search));
			}

			return $subject;
		}
	}
?>
