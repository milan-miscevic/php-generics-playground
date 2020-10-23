<?php

declare(strict_types=1);

namespace Mmm\PhpGenericsPlayground\Collection;

/**
 * @template T
 */
class Collection
{
    /**
     * @var T[]
     */
    private array $items = [];

    /**
     * @param T $item
     */
    public function add($item): void
    {
        $this->items[] = $item;
    }

    public function count(): int
    {
        return count($this->items);
    }
}
