<?php

namespace MohammedAlbalaawi\WeightPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MohammedAlbalaawi\WeightPackage\WeightPackage
 */
class WeightPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MohammedAlbalaawi\WeightPackage\WeightPackage::class;
    }
}
