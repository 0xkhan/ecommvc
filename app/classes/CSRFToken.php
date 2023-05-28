<?php

namespace App\Classes;

use App\Classes\Session;

class CSRFToken
{

    /**
     * Generates token
     *
     * @return mixed
     */
    public static function _token()
    {
        if (!Session::has('token')) {
            $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
            Session::add('token', $randomToken);
        }

        return Session::get('token');
    }

    /**
     * Verifies CSRF token
     *
     * @param $requestToken
     * @param $regenerate
     * @return bool
     */
    public static function verifyCSRFToken($requestToken, $regenerate = true)
    {
        // return (
        //     Session::has('token') &&
        //     Session::get('token') === $requestToken
        // ) ? true : false;

        if (
            Session::has('token') &&
            Session::get('token') === $requestToken
        ) {
            if ($regenerate) {
                // After verification unset/remove token so upon new request a new token can be generated
                Session::remove('token');
            }
            return true;
        }

        return false;
    }

}
