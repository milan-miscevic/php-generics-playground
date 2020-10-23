<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\Tests;

use Mmm\PhpGenericsPlayground\RepairShop\Car;
use Mmm\PhpGenericsPlayground\RepairShop\CarRepairShop;
use Mmm\PhpGenericsPlayground\RepairShop\Tractor;
use Mmm\PhpGenericsPlayground\RepairShop\TractorRepairShop;
use PHPUnit\Framework\TestCase;

class RepairShopTest extends TestCase
{
    public function testCorrect(): void
    {
        $carRepairShop = new CarRepairShop();
        $result = $carRepairShop->repair(new Car());
        $this->assertSame(true, $result);

        $tractorRepairShop = new TractorRepairShop();
        $result = $tractorRepairShop->repair(new Tractor());
        $this->assertSame(true, $result);
    }

    public function testIncorrect(): void
    {
        /*
         * The code works and the tests pass, but static analysis fails.
         * You can not repair a car in a tractor shop and vice versa.
         */

        $carRepairShop = new CarRepairShop();
        $result = $carRepairShop->repair(new Tractor());
        $this->assertSame(true, $result);

        $tractorRepairShop = new TractorRepairShop();
        $result = $tractorRepairShop->repair(new Car());
        $this->assertSame(true, $result);
    }
}
