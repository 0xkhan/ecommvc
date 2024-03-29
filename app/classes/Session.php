<?php

namespace App\Classes;

class Session
{

    /**
     * Adds new session
     *
     * @param $name
     * @param $value
     * @return mixed
     * @throws \Exception
     */
    public static function add($name, $value)
    {
        if ($name != '' && !empty($name) &&
            $value != '' && !empty($value))
        {
            return $_SESSION[$name] = $value;
        }

        throw new \Exception('Name and value required');
    }
    
    /**
     * Gets the value from the session
     *
     * @param $name
     * @return mixed
     */
    public static function get($name)
    {
        return $_SESSION[$name];
    }

    /**
     * Checks if session exist
     *
     * @param $name
     * @return bool
     * @throws \Exception
     */
    public static function has($name)
    {
        if ($name != '' && !empty($name))
        {
            return isset($_SESSION[$name]) ? true: false;
        }

        throw new \Exception('Name is required');
    }

    /**
     * Removes a session
     *
     * @param $name
     */
    public static function remove($name)
    {
        if (self::has($name)) {
            unset($_SESSION[$name]);
        }
    }

}
