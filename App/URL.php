<?php
    namespace ACIDECore\App;

    use League\Url\UrlImmutable;

    class URL {
        public static function getBaseURL() {
            $URL = UrlImmutable::createFromServer($_SERVER);

            if($_SERVER['HTTP_HOST'] == 'localhost') {
                return $URL->getBaseUrl() . '/acide/';
            }
            return $URL->getBaseUrl() . '/';
        }
    }
?>
