<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\ServiceContainer;

/**
 * @template T of object
 */
class ServiceContainer
{
    /**
     * @param class-string<T> $type
     * @return T
     */
    public function get(string $type): object
    {
        /** @psalm-suppress MixedMethodCall */
        return new $type();
    }
}
