<?php

namespace App;

use App\Exceptions\RouteNotFoundException;

class App
{

    /**
     * @param \App\Router $router
     */
    public function __construct( protected \App\Router $router, protected  array $request)
    {
    }

    public function run()
    {
        try {
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
        }catch(\App\Exceptions\RouteNotFoundException) {
            http_response_code(404);

            echo View::make('error/404');
        }
    }
}