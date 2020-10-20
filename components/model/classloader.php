<?php

spl_autoload_register('thisAutoloader');

function thisAutoloader($Class){
    $location = "components/model/";
    $extension = ".php";
    $path = $location . $Class . $extension;

    if(!file_exists($path)){
        return false;
    }
    include_once $path;

}