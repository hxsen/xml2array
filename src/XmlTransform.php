<?php

namespace Hxsen\Xml2Array;

class XmlTransform
{
    /**
     * 标准转换
     *
     * @param string $xml
     * @return array|string[]
     * @author houxin 2021/11/15 15:44
     */
    public function xmlToArray($xml)
    {
        $xmlNode = simplexml_load_string($xml);
        return xmlToArray($xmlNode);
    }

    /**
     * 正则匹配xml数据
     *
     * @param string $xml
     * @return array|string
     * @author houxin 2021/11/15 15:54
     */
    public function xmlToArrayPreg($xml)
    {
        return Xml2Array::xmlToArrayPreg($xml);
    }
}
