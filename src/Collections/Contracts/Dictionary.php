<?php

namespace Smpl\Collections\Contracts;

use Smpl\Logic\Contracts\Comparator;

/**
 * Dictionary
 *
 * Dictionaries represent keyed-arrays, typically keyed by string, though some
 * implementations allow for objects to be used as keys.
 *
 * @package  Collections\Dictionary
 *
 * @template KeyType of mixed
 * @template ValType of mixed
 * @template PairType of \Smpl\Collections\Contracts\Pair
 *
 * @extends \Smpl\Collections\Contracts\Enumerable<KeyType, ValType>
 *
 * @internal This contract should not be implemented directly
 */
interface Dictionary extends Enumerable
{
    /**
     * Clear the dictionary
     *
     * This method clears the dictionary, removing all elements currently stored
     * within.
     *
     * @return static
     */
    public function clear(): static;

    /**
     * Check if a value is contained in the dictionary
     *
     * This method checks to see if the provided value is present within the
     * dictionary, returning true if it is, and false otherwise.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether a value is considered to be present.
     *
     * Implementations of this method will define their own comparison logic for
     * situations where no comparator is provided.
     *
     * @param ValType                                        $value
     * @param \Smpl\Logic\Contracts\Comparator<ValType>|null $comparator
     *
     * @return bool
     */
    public function contains(mixed $value, ?Comparator $comparator = null): bool;

    /**
     * Check if multiple values are contained in the dictionary
     *
     * This method checks to see if the provided values are all present within
     * the dictionary, returning true if they are, and false if one or more are
     * not.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether a value is considered present.
     *
     * It is recommended that implementations of this method utilise the
     * {@see self::contains()} method, following its rules and conventions.
     *
     * @param iterable<ValType>                              $elements
     * @param \Smpl\Logic\Contracts\Comparator<ValType>|null $comparator
     *
     * @return bool
     */
    public function containsAll(iterable $elements, ?Comparator $comparator = null): bool;

    /**
     * Create a copy of the dictionary
     *
     * This method returns a distinct copy of this dictionary, containing all
     * key value pairs and other relevant data.
     *
     * @return static
     */
    public function copy(): static;

    /**
     * Get a value from the dictionary
     *
     * This method returns a value stored in the dictionary for a given key.
     * If no value was found, the default value will be returned.
     *
     * @param KeyType      $key
     * @param KeyType|null $default
     *
     * @return ValType|null
     */
    public function get(mixed $key, mixed $default = null): mixed;
}
