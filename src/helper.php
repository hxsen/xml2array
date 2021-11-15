<?php

if (!function_exists('xmlToArrayPreg')) {
    /**
     * 获取当前请求的用户id
     * @param string $default
     * @return string
     * @author wangju 2020/12/10 2:45 下午
     */
    function xmlToArrayPreg($xml){
        $reg = "/<(\\w+)[^\/>]*?>([\\x00-\\xFF]*?)<\\/\\1>/";
        if(preg_match_all($reg, $xml, $matches)){
            $count = count($matches[0]);
            $arr = array();
            for($i = 0; $i < $count; $i++){
                $key= $matches[1][$i];
                $val = xmlToArrayPreg( $matches[2][$i] );  // 递归
                if(array_key_exists($key, $arr)){
                    if(is_array($arr[$key])){
                        if(!array_key_exists(0,$arr[$key])){
                            $arr[$key] = array($arr[$key]);
                        }
                    }else{
                        $arr[$key] = array($arr[$key]);
                    }
                    $arr[$key][] = $val;
                }else{
                    $arr[$key] = $val;
                }
            }
            return $arr;
        }else{
            return $xml;
        }
    }
}
