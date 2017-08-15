<?php
namespace Factory;
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/7/28
 * Time: 下午12:17
 */
class OperationAdd extends Operation{
    public function getValue($num1,$num2)
    {
        return $num1 + $num2;
    }
}
