<?php

namespace Elbgoods\LaravelUnitConverter\Units\Temperature;

use Elbgoods\LaravelUnitConverter\Contracts\InternationalSystemOfUnits;
use Elbgoods\LaravelUnitConverter\Units\Length;
use Elbgoods\LaravelUnitConverter\Units\Temperature;
use PhpUnitConversion\System\Metric;
use PhpUnitConversion\Traits\BaseUnit;

class Kelvin extends Temperature implements InternationalSystemOfUnits
{
    use BaseUnit;

    public const SYMBOL = 'K';
    public const LABEL = 'kelvin';
}
