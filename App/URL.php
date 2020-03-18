<?php
    namespace ACIDECore\App;

    use League\Url\UrlImmutable;

    class URL {
        public static function getAbsolutePath() {
            return StringFactory::getStringBeforeToken(UrlImmutable::createFromServer($_SERVER) , '?');
        }
    }
?>
