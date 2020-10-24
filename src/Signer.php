<?php


namespace Bastphp\Sign;


interface Signer
{
    /**
     * 加密
     * @return string
     */
    public function encode() :string ;

    /**
     * @param $sign string 待解密的加密串
     * @return bool
     */
    public function verify($sign) :bool ;
}
