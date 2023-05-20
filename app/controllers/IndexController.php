<?php

namespace App\Controllers;

use App\Classes\Mail;

class IndexController extends BaseController
{

    public function show()
    {
        echo "Inside Homepage from IndexController";

        // $mail = new Mail();
        // $data = [
        //     'to' => 'test@example.com',
        //     'subject' => 'Welcome to store',
        //     'view' => 'welcome', // view file name
        //     'name' => 'John Doe',
        //     'body' => 'Testing email template'
        // ];

        // if ($mail->send($data)) {
        //     echo 'email sent successfully!';
        // } else {
        //     echo 'email sending failed';
        // }
    }

}
