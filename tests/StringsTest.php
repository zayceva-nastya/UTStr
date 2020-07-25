<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Strings;

class StringsTest extends TestCase
{
    public function testreversStr()
    {
        $str = new Strings();

        $this->assertEquals(
            'olleH',
            $str->reversStr('Hello'));

        $this->assertIsString($str->reversStr('Good bye'));
    }

    public function testupperStr()
    {
        $str = new Strings();

        $this->assertEquals(
            'HELLO',
            $str->upperStr('hello'));

        $this->assertIsString($str->upperStr('Good bye'));
    }
}