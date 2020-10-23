<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\Tests;

use Mmm\PhpGenericsPlayground\Collection\Apple;
use Mmm\PhpGenericsPlayground\Collection\Collection;
use Mmm\PhpGenericsPlayground\Collection\Orange;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testCorrect(): void
    {
        /** @var Collection<Apple> */
        $appleBucket = new Collection();
        $appleBucket->add(new Apple());
        $this->assertSame(1, $appleBucket->count());

        /** @var Collection<Orange> */
        $orangeBucket = new Collection();
        $orangeBucket->add(new Orange());
        $this->assertSame(1, $orangeBucket->count());
    }

    public function testIncorrect(): void
    {
        /*
         * The code works and the tests pass, but static analysis fails.
         * You can not mix apples and oranges. :)
         */

        /** @var Collection<Apple> */
        $appleBucket = new Collection();
        $appleBucket->add(new Orange());
        $this->assertSame(1, $appleBucket->count());

        /** @var Collection<Orange> */
        $orangeBucket = new Collection();
        $orangeBucket->add(new Apple());
        $this->assertSame(1, $orangeBucket->count());
    }
}
