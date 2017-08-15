<?php

namespace Factory;

$autoLoadPath = dirname(__FILE__)."/../vendor/autoload.php";
include($autoLoadPath);

    /**
      * 工程类，主要用来创建对象
      * 功能：根据输入的运算符号，工厂就能实例化出合适的对象
      *
     */
class Factory {
    public static function createObj($operate){
        switch ($operate){
            case '/':
                return new OperationDiv();
                break;
            case '+':
                return new OperationAdd();
                break;
        }
    }
}
 $test=Factory::createObj('+');
 $result=$test->getValue(23,2);
 echo $result;
?>
