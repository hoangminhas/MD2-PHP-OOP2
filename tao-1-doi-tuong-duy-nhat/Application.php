<?php

class Application
{
    private static $instance;

    private function __construct()
    {
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (self::$instance === null){
            self::$instance = new Application();
            echo "nice";
        }
        return self::$instance;
    }
}

$object1 = Application::getInstance();
echo $object1;
$object2 = Application::getInstance();
