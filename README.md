
###Require

illuminate/support >= 5.0

###Usage

暂时仅仅支持MD5的加密和验证

####安装方法

composer require bastphp/sign 
LARAVEL框架
 php artisan vendor:publish --provider=Bastphp\Sign\SignProvider 
 LUMEN框架要先安装vendor:publish扩展然后在bootstrap.php文件内添加下面两行代码
 $app->register(Bastphp\Sign\SignProvider::class);
$app->configure('signer');
然后在运行php artisan vendor:publish --provider=Bastphp\Sign\SignProvider 

``` 
<?php


namespace App\Http\Controllers;

use Bastphp\Sign\SignClient;

class TestController extends Controller
{
    public function test()
    {
        $signObj = SignClient::client();//默认MD5做驱动
        $signObj->setAppId('123456');//设置加密的APPid
        $signObj->setKey('123123123');//设置加密的key
        $signObj->encode(['a'=>1,'b'=>2]);//生成签名
        //$sign = SignClient::client()->encode(['a'=>1,'b'=>2]);
        $sign = 'fb017403af19713cd9f94c21f2691803';
       $res = $signObj->verify(['a'=>1,'b'=>2],$sign);//验证签名
        
       var_dump($res);
    }

}
``` 

###Waring

请求时要把app_id加入到请求体中.

如果不指定APPID和key会使用设置里面默认配置的
