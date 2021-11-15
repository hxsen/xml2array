### 一、升级xml数据转换json插件

本插件基于 [tamlyn/xml2json](https://github.com/tamlyn/xml2json) 的二次开发。
使其能更好的兼容laravel的框架。

感谢tamlyn团队的开源支持

使用示例如下：
```php
    $xml = '<b>hello world</b>';

    $result = app('xml2array')->xmlToArray($xml);
```

### 二、提供了一个正则方式解析xml的方法
使用示例如下：
```php
    $xml = '<b>hello world</b>';

    $result = app('xml2array')->xmlToArrayPreg($xml);
```
