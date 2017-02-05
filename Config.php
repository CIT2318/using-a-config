<?php
namespace FrontController;

class Config {
    private static $config = [];
    static function setConfig($path)
    {
        self::$config = require_once($path);
    }
    static function get($configItem)
    {
        return self::$config[$configItem];
    }
}

?>