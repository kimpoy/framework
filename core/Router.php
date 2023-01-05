<?php
class Router
{
    public function getMethod()
    {
        # code...
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        // *make it as associative array

        $path = [
            '/' => 'controllers/path/sign_in.path.php',
            '/sign_up' => 'controllers/path/sign_up.path.php',
        ];

        if (array_key_exists($uri, $path)) {
            #var_dump($path[$uri]);
            require $path[$uri];
        } else {
            echo "not found!";
        }
    }
}
