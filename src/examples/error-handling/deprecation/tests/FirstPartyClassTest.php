<?php declare(strict_types=1);
namespace example;

use PHPUnit\Framework\TestCase;
use vendor\ThirdPartyClass;

final class FirstPartyClassTest extends TestCase
{
    public function testOne(): void
    {
        $this->assertTrue((new FirstPartyClass)->method());
    }

    public function testTwo(): void
    {
        $this->assertTrue((new ThirdPartyClass)->anotherMethod());
    }
}
