<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    // $dirpath = dirname(__FILE__);
    $path = __DIR__."/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    $fullPath = str_replace('\\', '/', $fullPath);

    echo $fullPath."<br>";

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}
