<?php

namespace App;

use AltoRouter;

class RouteDispatcher
{
    // Properties
    /** Used for match method in AltoRouter */
    protected $match;
    /** The controller itself */
    protected $controller;
    /** The method inside controller assigned to controller */
    protected $method;

    /**
     * Sets the object's properties using the values supplied
     *
     * @param assoc The property values
     */
    public function __construct(AltoRouter $router) {
        $this->match = $router->match();

        if ($this->match) {
            // The attribute 'target' is the one returned by router's match method along with other attributes in an array.
            // Use var_dump($this->match) to see them
            list($controller, $method) = explode('@', $this->match['target']);
            $this->controller = $controller;
            $this->method = $method;

            // Check if the controller is a valid class and the method is a valid method
            if (is_callable(array(new $this->controller, $this->method))) {
                call_user_func_array(
                    array(new $this->controller, $this->method),
                    array($this->match['params'])
                );
            } else {
                echo "The method {$this->method} is not defined in {$this->controller}";
            }
        } else {
            header($_SERVER['SERVER_PROTOCOL']."404 Not Found");
            view('errors/404');
        }
    }
}
