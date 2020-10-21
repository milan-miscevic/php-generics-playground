<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground;

class Sample
{
    public static function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}
