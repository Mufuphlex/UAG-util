<?php

namespace Mufuphlex\Util\UAG;

/**
 * Class WeightedGenerator
 * @package Mufuphlex\Util\UAG
 */
class WeightedGenerator extends GeneratorAbstract
{
    /** @var array */
    private static $weightedSequence = null;

    /** @var array */
    private static $userAgentsValues;

    /**
     * @return string
     */
    public function generate()
    {
        $sequence = static::getWeightedSequence();
        return static::$userAgentsValues[$sequence[array_rand($sequence)]];
    }

    /**
     * @return array
     */
    private static function getWeightedSequence()
    {
        if (static::$weightedSequence === null) {
            static::makeWeightedSequence();
        }

        return static::$weightedSequence;
    }

    /**
     * @param void
     * @return void
     */
    private static function makeWeightedSequence()
    {
        static::$weightedSequence = array();
        static::$userAgentsValues = array_keys(static::$userAgents);
        $keyByValue = array_flip(static::$userAgentsValues);

        foreach (static::$userAgents as $agent => $weight) {
            for ($i = 1; $i <= $weight; $i++) {
                static::$weightedSequence[] = $keyByValue[$agent];
            }
        }
    }
}