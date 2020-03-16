<?php 
    namespace ACIDECore\App;

    class View {
        public static function display($path , $parameters = []) {
            \Phug::displayFile(Config::get('path.views') . $path . '.pug' , $parameters);
        }

	    public static function render($path , $parameters = []) {
		    return \Phug::renderFile(Config::get('path.views') . $path . '.pug' , $parameters);
        }

        public static function getScripts($names) {
        	$src = [];

        	foreach ($names as $name) {
	            array_push($src , "<script src='" .
	                              Config::get("scripts.$name") . "'></script>");
	        }

        	return $src;
        }

	    public static function getStyles($names) {
		    $href = [];

		    foreach ($names as $name) {
			    array_push($href , "<link href='" .
			                      Config::get("styles.$name") . "' rel='stylesheet' type='text/css'>");
		    }

		    return $href;
	    }

	    public static function getImage($name) {
        	return Config::get('url.img') . $name;
	    }
    }
?>