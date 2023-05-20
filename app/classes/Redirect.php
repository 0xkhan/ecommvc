<?php

namespace App\Classes;

class Redirect
{

    /**
     * Redirects to a specific page
     *
     * @param $page
     */
    public static function to($page)
    {
        header("location: $page");
    }

    /**
     * Redirects back
     */
    public static function back()
    {
        // returns URI name e.g ecommvc.test/admin -> /admin
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }

}
