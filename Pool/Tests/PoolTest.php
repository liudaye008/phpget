<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午2:54
 */

namespace DesignPatterns\Creational\Pool\Tests;
use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;
$autoLoadPath = dirname(__FILE__)."/../../vendor/autoload.php";
include($autoLoadPath);

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}
    $result = new PoolTest();
    $result = $result->testCanGetNewInstancesWithGet();
    var_dump(json_encode($result));