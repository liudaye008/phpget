<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/7/28
 * Time: 下午2:11
 */

namespace DesignPatterns\Creational\AbstractFactory;


use SebastianBergmann\CodeCoverage\Report\Text;

class Test
{
    public function test() {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');
        var_dump($text);
    }
}

(new Test())->test();