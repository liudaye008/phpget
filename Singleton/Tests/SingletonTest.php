<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午4:01
 */
namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}