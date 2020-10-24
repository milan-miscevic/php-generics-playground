<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\Tests;

use Mmm\PhpGenericsPlayground\ServiceContainer\Father;
use Mmm\PhpGenericsPlayground\ServiceContainer\ServiceContainer;
use Mmm\PhpGenericsPlayground\ServiceContainer\Son;
use PHPUnit\Framework\TestCase;

class ServiceContainerTest extends TestCase
{
    public function testCorrect(): void
    {
        $serviceContainer = new ServiceContainer();

        $father = $serviceContainer->get(Father::class);
        $this->assertInstanceOf(Father::class, $father);

        $son = $serviceContainer->get(Son::class);
        $this->assertInstanceOf(Son::class, $son);
    }

    public function testIncorrect(): void
    {
        $serviceContainer = new ServiceContainer();

        /*
         * This fails in every case, but static analysis can detect before the first run.
         */
        $serviceContainer->get('Foo');
    }
}
