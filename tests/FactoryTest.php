<?php

namespace Mufuphlex\Tests\Util\UAG;

use Mufuphlex\Util\UAG\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testMake()
    {
        $generator = Factory::make();
        static::assertInstanceOf('Mufuphlex\\Util\\UAG\\GeneratorInterface', $generator);
    }
}