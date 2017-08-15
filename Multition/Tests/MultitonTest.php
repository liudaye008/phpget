<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午5:05
 */
namespace DesignPatterns\Creational\Multition\Tests;
use DesignPatterns\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;
class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
    public function testUniquenessForEveryInstance()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertInstanceOf(Multiton::class, $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
    }
}