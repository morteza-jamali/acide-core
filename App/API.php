<?php
	namespace AbriCoderCore\Core;

	class API {
		public static function init() {
			register_rest_route(
				Config::getDefault('rest.slug') . '/v' . Config::get('api_version'),
				'/controller/(?P<controller>\w+\@\w+)',
				array(
				'methods' => 'POST',
				'callback' => function($request) {
					$class = Config::getDefault('namespaces.controller') .
					         StringFactory::getStringBeforeToken($request['controller']);
					$function = StringFactory::getStringAfterToken($request['controller']);
					unset($request['controller']);

					return new \WP_REST_Response((new $class($request))->$function());
				}
			));
		}
	}
?>
