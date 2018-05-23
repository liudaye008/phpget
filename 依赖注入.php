<?php

interface Mail
{
    public function send();
}

class Email implements Mail()
{
    public function send()
    {
        //发送Email
    }
}

class SmsMail implements Mail()
{
    public function send()
    {
        //发送短信
    }
}

class Register
{
    private $_mailObj;

    public function __construct(Mail $mailObj)
    {
        $this->_mailObj = $mailObj;
    }

    public function doRegister()
    {
        /*这里是如何注册*/
        $this->_mailObj->send();//发送信息
    }
}

/* 此处省略若干行 */
$reg = new Register();
$emailObj = new Email();
$smsObj = new SmsMail();

$reg->doRegister($emailObj);//使用email发送
$reg->doRegister($smsObj);//使用短信发送
/* 你甚至可以发完邮件再发短信 */
