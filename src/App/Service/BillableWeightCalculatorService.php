<?php

namespace App\Service;

class BillableWeightCalculatorService
{
    public function calculate(
        int $width,
        int $height,
        int $lenght,
        int $weight,
        int $dimDivisor
    ): int
    {
        if ($width <= 0 || $width > 80) {
            throw new \InvalidArgumentException('Invalid width');
        }
        if ($height <= 0 || $height > 70) {
            throw new \InvalidArgumentException('Invalid height');
        }
        if ($lenght <= 0 || $lenght > 70) {
            throw new \InvalidArgumentException('Invalid lenght');
        }
        if ($weight <= 0 || $weight > 50) {
            throw new \InvalidArgumentException('Invalid weight');
        }
        if ($dimDivisor <= 0) {
            throw new \InvalidArgumentException('Invalid dimDivisor');
        }
        $dimWeight = (int) round($width * $height * $lenght / $dimDivisor);
        return max($weight, $dimWeight);
    }
}