<?php


namespace Bastphp\Sign;


class BaseSign
{
    protected $app_id;
    protected $key;

    public function getSignContent(array $content)
    {
        if (!isset($content['app_id'])){
            $content['app_id'] = $this->app_id;
        }
        ksort($content);
        $array = [];
        foreach ($content as $key => $item) {
            if (is_array($item)){
                $item = json_encode($item);
            }
            $array[] = $key . '=' . $item;
        }
        return implode('&', $array);
    }

    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
}
