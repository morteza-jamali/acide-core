<?php
    namespace ACIDECore\App;

    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7;
    use GuzzleHttp\Exception\GuzzleException;

    class File {
        public static function download($url , $save_as , $mode = 'w') {
            try {
                $client = new Client();
                $resource = fopen($save_as , $mode);
                $stream = Psr7\stream_for($resource);
                $client->request('GET', $url , ['save_to' => $stream]);
                fclose($resource);
            } catch (GuzzleException $ex) {
                echo $ex->getMessage();
                return false;
            }

            return true;
        }
    }
?>
