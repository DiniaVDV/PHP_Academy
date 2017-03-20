<?php

trait MailSender
{
    public function sendEmail($to = '', $subject = '', $message = '')
    {
        return 'Email to: ' . $to . ' has been created.';
    }
}