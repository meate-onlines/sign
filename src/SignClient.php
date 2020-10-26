<?php


namespace Bastphp\Sign;
use Bastphp\Sign\Lib\Md5;

class SignClient
{
    protected static $drive_array = [
        'md5' => Md5::class,
    ];
    public static function client($way = 'md5')
    {
       return new self::$drive_array[$way](config("signer.$way"));
    }


}
