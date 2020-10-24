<?php


namespace Bastphp\Sign;


class BaseSign
{
    protected $sign_content;
    public function setSignContent(array $content)
    {
        ksort($content);
        $array = [];
        foreach ($content as $key => $item) {
            if (is_array($item)){
                $item = json_encode($item);
            }
            $array[] = $key . '=' . $item;
        }
        $this->sign_content = implode('&', $array);
        return $this;
    }
}
