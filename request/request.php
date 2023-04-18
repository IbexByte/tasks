<?php

class Request
{
    public static function uri()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH );
        $uri = str_replace('/tasks/', '', $uri);
        return $uri ;
    }

    public static function get($key, $defult= null){
        return  $_GET[$key] ?? $_POST[$key] ?? $defult ;
    }

    public static function method(){
       return strtolower($_SERVER['REQUEST_METHOD']);
    } 
}
