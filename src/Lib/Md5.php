<?php


namespace Bastphp\Sign\Lib;


use Bastphp\Sign\BaseSign;
use Bastphp\Sign\Signer;

class Md5 extends BaseSign implements Signer
{
    protected $sign_content;
    public function encode(): string
    {
        $sign_str = $this->sign_content . "&app_id=" . config('signer.md5.app_id') . "&key=" . config('signer.md5.secret_key');
        return md5($sign_str);
    }

    public function verify($sign): bool
    {
        return $this->encode() === $sign;
    }
}
