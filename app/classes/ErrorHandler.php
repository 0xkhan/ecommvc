<?php

namespace App\Classes;

class ErrorHandler
{

    /**
     * Handles the errors - sends an email to admin when in production if in development shows an error using Whoops.
     *
     * @param $error_number
     * @param $error_message
     * @param $error_file
     * @param $error_line
     */
    public function handleErrors($error_number, $error_message, $error_file, $error_line)
    {
        $error = "[{$error_number}] An error occurred in file {$error_file} on line {$error_line}: {$error_message}";

        $environment = $_ENV['APP_ENV'];

        if ($environment === 'local') {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        } else {
            $data = [
                'to'        => $_ENV['ADMIN_EMAIL'],
                'subject'   => 'System Error',
                'view'      => 'Errors',
                'name'      => 'Admin',
                'body'      => $error
            ];

            // Send email to admin AND display a generic error to user
            ErrorHandler::emailAdmin($data)->outputFriendlyError();
        }
    }

    /** Displays a generic error to the user */
    public function outputFriendlyError()
    {
        ob_end_clean();
        view('errors/generic');
        exit;
    }

    /**
     * Send email to admin when there are errors instead of showing them to the user
     *
     * @param array $data An array of the error data
     * @return A static object
     */
    public static function emailAdmin($data)
    {
        $mail = new Mail;
        $mail->send($data);

        return new static;
    }

}
