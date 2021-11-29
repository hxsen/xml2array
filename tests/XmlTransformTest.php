<?php

namespace Hxsen\Xml2Array\Tests;

use Tests\TestCase;

class XmlTransformTest extends TestCase
{
    protected function getXml()
    {
        return '<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><GenerateAWBWithLabelResponse xmlns="http://smsaexpress.com/waybills/"><GenerateAWBWithLabelResult><Status>1</Status><AwbNumber>215081055118</AwbNumber><RouteCode>RUH</RouteCode><Parcels/><Messages><string>Air Waybill Number Generated Successfully!</string></Messages><Labels><SAWB><AwbNumber>215081055118</AwbNumber><AwbFile>JVBERi0xLjQKJeLjz9MKMSAwIG9iago8PC9UeXBlL1hPYmplY3QvU3VidHlwZS9JbWFnZS9XaWR0aCA2MC9IZWlnaHQgNjAvSW1hZ2VNYXNrIHRydWUvTGVuZ3RoIDE2Mi9CaXRzUGVyQ29tcG9uZW50IDEvRmlsdGVyL0NDSVRURmF4hyZWYKMTE1NjY2CiUlRU9GCg==</AwbFile></SAWB></Labels></GenerateAWBWithLabelResult></GenerateAWBWithLabelResponse></s:Body></s:Envelope>';
    }

    public function testXmlToArray()
    {
        $xml = $this->getXml();
        $actual = app('xmlTransform')->xmlToArray($xml);

        $this->assertIsArray($actual);
    }

    public function testXmlToArrayPreg()
    {

        $xml = $this->getXml();
        $actual = app('xmlTransform')->xmlToArrayPreg($xml);

        $this->assertIsArray($actual);
    }
}
