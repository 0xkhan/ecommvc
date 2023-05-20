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
     * @return bool
     */
    public static function verifyCSRFToken($requestToken)
    {
        // return (
        //     Session::has('token') &&
        //     Session::get('token') === $requestToken
        // ) ? true : false;

        if (
            Session::has('token') &&
            Session::get('token') === $requestToken
        ) {
            // After verification unset/remove token so upon new request a new token can be generated
            Session::remove('token');
            return true;
        }

        return false;
    }

}
