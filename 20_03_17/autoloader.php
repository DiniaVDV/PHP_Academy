<?php
@session_start();

function __autoload($name)
{
    $classPath = $_SERVER['DOCUMENT_ROOT'] . '/CW/9_03_17_in_class/classes/';

    $filename = $classPath . $name . '.php';
    if (file_exists($filename)) {
        require_once $filename;
    }else {
		var_dump($classPath . $name . '.php');
        die('Class not found');
    }
}