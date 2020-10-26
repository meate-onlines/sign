<?php


namespace Bastphp\Sign;


interface Signer
{
    /**
     * 加密
     * @param array $content
     * @return string
     */
    public function encode(array $content) :string ;

    /**
     * @param array $content
     * @param $sign string 待解密的加密串
     * @return bool
     */
    public function verify(array $content,string $sign) :bool ;
}
