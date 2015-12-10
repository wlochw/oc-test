<?php

namespace Tests;

use Jkan\Component\Password\Encoder;
use Jkan\Component\Password\Method\Md5Encoding;

class EncodingMethodTest extends \PHPUnit_Framework_TestCase
{
    const PASSWORD = 'JakubKanclerz';

    public function testMd5Encoding()
    {
        $method = new Md5Encoding();
        $encoder = new Encoder($method);

        $this->assertEquals(
            'b9f68093fb2c77ffe0ce847bdc179e9a',
            $encoder->encodePassword(self::PASSWORD)
        );
    }

    public function testSha1Encoding()
    {
        //
        // encoder should be initialized properly HERE
        //

        $this->assertEquals(
            '2181b2633e7ae8c3e964317dbd591eee51ab7a6d',
            $encoder->encodePassword(self::PASSWORD)
        );
    }
}