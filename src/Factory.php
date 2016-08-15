<?php

namespace Mufuphlex\Util\UAG;

/**
 * Class Factory
 * @package Mufuphlex\Util\UAG
 */
class Factory
{
    /**
     * @return GeneratorInterface
     */
    public static function make()
    {
        return new WeightedGenerator();
    }
}