<?php
	namespace ACIDECore\App;

	class Response {
		private $response = null;

		public function __construct($response = null) {
			$this->response = $response;
		}

		public function success($values , $code =  200) {
			return new Response([
				'code' => $code ,
				'body' => [
					'type' => 'success' ,
					'message' => $values
				]
			]);
		}

		public function error($values , $code = 200) {
			return new Response([
				'code' => $code ,
				'body' => [
					'type' => 'error' ,
					'message' => $values
				]
			]);
		}

		public function returnMsg() {
			return $this->response;
		}
	}
?>
