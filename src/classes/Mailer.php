<?php
namespace Cellar\Classes;
class Mailer
{
    public function mail($recipient, $content)
    {
        echo 'Dear ' . $recipient . ': ' . $content;
    }
}
