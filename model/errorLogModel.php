<?php

class ErrorLog
{
    public $key;
    public $dateandTime;
    public $ip_exception;
    public $a_exception = [];


    public function __construct()
    {
    }

    public function collectErrorLog(object $exception)
    {
        $this->key = $this->generateKey();
        $this->dateandTime = date("d-m-Y h:i:s");
        $this->ip_exception = $_SERVER['REMOTE_ADDR'];

        array_push($this->a_exception, array(
            'key' => $this->key,
            'dateTime' => $this->dateandTime,
            'ip' => $this->ip_exception,
            'line' => $exception->getLine(),
            'file' =>  $exception->getFile(),
            'message' => $exception->getMessage()
        ));
        return $this->a_exception;
    }

    public  function generateKey()
    {
        $text ="0123456789ABCDEFGHIJKLMNOPQRSTOQXYZ";
        $lengthKey = strlen($text);
        $key = '';
        for ($i = 0; $i < 15; $i++) {
            $random_key =  $text[mt_rand(0, $lengthKey - 1)];
            $key .= $random_key;
        }
        return $key;
    }
}
