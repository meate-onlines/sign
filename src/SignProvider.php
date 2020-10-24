<?php


namespace Bastphp\Sign;

use Illuminate\Support\ServiceProvider;

class SignProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/signer.php' => config_path('signer.php'),
        ]);
    }
}
