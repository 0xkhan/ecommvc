<?php

namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Mail
{

    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer;
        $this->setup();
    }

    public function setup()
    {
        $this->mail->isSMTP();
        $this->mail->Mailer = 'smtp';
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';

        $this->mail->Host = $_ENV['SMTP_HOST'];
        $this->mail->Port = $_ENV['SMTP_PORT'];

        // Set PHPMailer debug option
        $environment = $_ENV['APP_ENV'];
        if ($environment === 'local') {
            $this->mail->SMTPDebug = '';
        }

        // Set Auth info
        $this->mail->Username = $_ENV['EMAIL_USERNAME'];
        $this->mail->Password = $_ENV['EMAIL_PASSWORD'];

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;

        // Set sender info
        $this->mail->From = $_ENV['ADMIN_EMAIL'];
        $this->mail->FromName = $_ENV['APP_NAME'];
    }

    public function send($data)
    {
        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = make($data['view'], array('data' => $data['body']));

        return $this->mail->send();
    }

}
