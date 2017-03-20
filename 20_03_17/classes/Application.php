<?php

class Application
{
    public $templates = '';
    private $user;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->templates = $_SERVER['DOCUMENT_ROOT'] . '/CW/9_03_17_in_class/templates/';
        $this->user = new User("admin", "admin@mail.ru");
    }

    public function request()
    {
        return $_REQUEST;
    }

    public function view($filename = '')
    {
        $filePath = $this->templates . $filename . '.php';
        if ($filename == '') {
            require $this->templates . 'index.php';
        } else {
            if (file_exists($filePath)) {
                require $filePath;
            }
        }
    }

    public function getUser()
    {
        return $this->user;
    }


}