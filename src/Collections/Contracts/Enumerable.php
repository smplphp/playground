<?php

namespace Smpl\Collections\Contracts;

use Countable;
use IteratorAggregate;
use Smpl\Logic\Contracts\Operation;

/**
 * Enumerable
 *
 * Enumerables are objects that can be counted, iterated over, and converted to
 * arrays.
 *
 * @package Collections
 *
 * @template KeyType of mixed
 * @template ValType of mixed
 *
 * @extends IteratorAggregate<KeyType, ValType>
 *
 * @internal This contract should not be implemented directly
 */
interface Enumerable extends Countable, IteratorAggregate
{
    /**
     * Count the object
     *
     * This method returns the 'count' of the object, typically meaning it will
     * return the current number of elements.
     *
     * @return int<0, max>
     */
    public function count(): int;

    /**
     * Convert the object into an array
     *
     * Returns an array consisting of the values stored within the enumerable object.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Operation}
     * that can be used to convert the current key to a valid array key.
     *
     * Some implementations will have a default method of converting keys to valid
     * array keys, and some will simply throw exceptions.
     *
     * @param \Smpl\Logic\Contracts\Operation<KeyType, array-key>|null $keyConverter
     *
     * @return array<KeyType|array-key, ValType>
     */
    public function toArray(Operation $keyConverter = null): array;
}
