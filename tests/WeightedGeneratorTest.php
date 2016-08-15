<?php

namespace Mufuphlex\Tests\Util\UAG;

use Mufuphlex\Util\UAG\Factory;

class WeightedGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerate()
    {
        $generator = Factory::make();
        $uag = $generator->generate();
        static::assertTrue(is_string($uag));
        static::assertStringStartsWith('Mozilla', $uag);
    }
}