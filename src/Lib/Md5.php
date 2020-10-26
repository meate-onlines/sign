<?php


namespace Bastphp\Sign\Lib;


use Bastphp\Sign\BaseSign;
use Bastphp\Sign\Signer;

class Md5 extends BaseSign implements Signer
{
    protected $sign_content;
    protected $app_id;
    protected $key;

    public function __construct($options)
    {
       $this->app_id = $options['app_id'];
       $this->key    = $options['key'];
    }

    public function encode(array $content): string
    {
        $sign_str = $this->getSignContent($content) . "&key=" . $this->key;
        return md5($sign_str);
    }

    public function verify(array $content, string $sign): bool
    {
        return $this->encode($content) === $sign;
    }
}
