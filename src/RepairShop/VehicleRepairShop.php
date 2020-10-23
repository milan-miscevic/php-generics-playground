<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\RepairShop;

/**
 * @template T of Vehicle
 */
abstract class VehicleRepairShop
{
    /**
     * @param T $vehicle
     */
    public function repair(Vehicle $vehicle): bool
    {
        return true;
    }
}
