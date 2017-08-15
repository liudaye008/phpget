<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午5:04
 */
namespace DesignPatterns\Creational\Multiton;
final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';
    /**
     * @var Multiton[]
     */
    private static $instances = [];

    /**
     * this is private to prevent from creating arbitrary instances
     */
    private function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }

    /**
     * prevent instance from being cloned
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized
     */
    private function __wakeup()
    {
    }
}