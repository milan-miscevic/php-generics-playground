<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\Tests;

use Mmm\PhpGenericsPlayground\Car;
use Mmm\PhpGenericsPlayground\CarRepairShop;
use Mmm\PhpGenericsPlayground\Tractor;
use Mmm\PhpGenericsPlayground\TractorRepairShop;
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
         * The code works and the tests pass
         * But, static analysis fails
         */

        $carRepairShop = new CarRepairShop();
        $result = $carRepairShop->repair(new Tractor());
        $this->assertSame(true, $result);

        $tractorRepairShop = new TractorRepairShop();
        $result = $tractorRepairShop->repair(new Car());
        $this->assertSame(true, $result);
    }
}