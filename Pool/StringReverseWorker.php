<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午2:53
 */

namespace DesignPatterns\Creational\Pool;


class StringReverseWorker
{
/**
 * @var \DateTime
 */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}