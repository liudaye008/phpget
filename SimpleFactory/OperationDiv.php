<?php
namespace Factory;
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/7/28
 * Time: 下午12:17
 */
class OperationDiv extends Operation{
    public function getValue($num1,$num2){
        try {
            if ($num2==0){
                throw new \Exception("除数不能为0");
            }else {
                return $num1/$num2;
            }
        }catch (\Exception $e){
            echo "错误信息：".$e->getMessage();
        }
    }
}
