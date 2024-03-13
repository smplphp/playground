<?php

namespace Smpl\Collections\Contracts;


use Smpl\Logic\Contracts\Comparator;
use Smpl\Logic\Contracts\Predicate;

/**
 * Collection
 *
 * Collections represent list-style arrays, containing zero or more elements of a
 * given type, with an integer key.
 * By default, collections do not provide a method of interacting with the elements
 * via their key, though some implementations mad do.
 *
 * @package  Collections\Collection
 *
 * @template ElType of mixed
 *
 * @extends \Smpl\Collections\Contracts\Enumerable<int, ElType>
 *
 * @internal This contract should not be implemented directly
 */
interface Collection extends Enumerable
{
    /**
     * Add an element to the collection
     *
     * This method adds an element to the collection, and returns true if the
     * collection was modified, or false otherwise.
     *
     * Implementations of this method should only return false if an element
     * not being added is expected or allowed behaviour, opting to use
     * exceptions in all other cases.
     *
     * @param ElType $element
     *
     * @return bool
     */
    public function add(mixed $element): bool;

    /**
     * Add multiple elements to the collection
     *
     * This method adds multiple elements to the collection, and returns true if
     * the collection was modified, or false otherwise.
     *
     * It should be noted that this method returning true does not mean that all
     * elements were added, just that the collection itself was modified as a
     * result.
     *
     * It is recommended that implementations of this method utilise the
     * {@see self::add()} method, following its rules and conventions.
     *
     * @param iterable<ElType> $elements
     *
     * @return bool
     */
    public function addAll(iterable $elements): bool;

    /**
     * Clear the collection
     *
     * This method clears the collection, removing all elements currently stored
     * within.
     *
     * @return static
     */
    public function clear(): static;

    /**
     * Check if an element is contained in the collection
     *
     * This method checks to see if the provided element is present within the
     * collection, returning true if it is, and false otherwise.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether an element is considered to be present.
     *
     * Implementations of this method will define their own comparison logic for
     * situations where no comparator is provided.
     *
     * @param ElType                                        $element
     * @param \Smpl\Logic\Contracts\Comparator<ElType>|null $comparator
     *
     * @return bool
     */
    public function contains(mixed $element, ?Comparator $comparator = null): bool;

    /**
     * Check if multiple elements are contained in the collection
     *
     * This method checks to see if the provided elements are all present within
     * the collection, returning true if they are, and false if one or more are
     * not.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether an element is considered present.
     *
     * It is recommended that implementations of this method utilise the
     * {@see self::contains()} method, following its rules and conventions.
     *
     * @param iterable<ElType>                              $elements
     * @param \Smpl\Logic\Contracts\Comparator<ElType>|null $comparator
     *
     * @return bool
     */
    public function containsAll(iterable $elements, ?Comparator $comparator = null): bool;

    /**
     * Create a copy of the collection
     *
     * This method returns a distinct copy of this collection, containing all
     * elements and other relevant data.
     *
     * @return static
     */
    public function copy(): static;

    /**
     * Check if the collection is empty
     *
     * This method returns true if the collection is empty, and false otherwise.
     *
     * Implementations should ensure that if this method returns true,
     * {@see self::isNotEmpty()} returns false, and {@see self::count()} returns 0.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Check if the collection is not empty
     *
     * This method returns true if the collection is not empty, and false otherwise.
     *
     * Implementations should ensure that if this method returns true,
     * {@see self::isEmpty()} returns false, and {@see self::count()} returns a
     * value greater than 0.
     *
     * @return bool
     */
    public function isNotEmpty(): bool;

    /**
     * Remove an element from the collection
     *
     * This method removes an element from the collection, and returns true if the
     * collection was modified, or false otherwise.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether an element should be removed.
     *
     * It is recommended that implementations of this method only remove the
     * first match within the collection, though some implementations may remove
     * every matching element.
     *
     * @param ElType                                        $element
     * @param \Smpl\Logic\Contracts\Comparator<ElType>|null $comparator
     *
     * @return bool
     */
    public function remove(mixed $element, ?Comparator $comparator = null): bool;

    /**
     * Remove multiple elements from the collection
     *
     * This method removes multiple elements from the collection, and returns
     * true if the collection was modified, or false otherwise.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether an element should be removed.
     *
     * It should be noted that this method returning true does not mean that all
     * elements were removed, just that the collection itself was modified as a
     * result.
     *
     * It is recommended that implementations of this method utilise the
     * {@see self::remove()} method, following its rules and conventions.
     *
     * @param iterable<ElType>                              $elements
     * @param \Smpl\Logic\Contracts\Comparator<ElType>|null $comparator
     *
     * @return bool
     */
    public function removeAll(iterable $elements, ?Comparator $comparator = null): bool;

    /**
     * Remove multiple elements that meet the criteria
     *
     * This method removes all elements from the collection that pass the provided
     * {@see \Smpl\Logic\Contracts\Predicate}.
     *
     * @param \Smpl\Logic\Contracts\Predicate<ElType> $predicate
     *
     * @return bool
     */
    public function removeIf(Predicate $predicate): bool;

    /**
     * Retain multiple elements in the collection
     *
     * This method removes all elements from the collection that do not match
     * the provided collection of elements.
     * This method also accepts an optional {@see \Smpl\Logic\Contracts\Comparator}
     * to determine whether an element should be removed.
     *
     * It should be noted that this method returning true does not mean that all
     * elements were present, just that the collection itself was modified as a
     * result.
     *
     * This method is considered the inverse of {@see self::remove()}.
     *
     * @param iterable<ElType>                              $elements
     * @param \Smpl\Logic\Contracts\Comparator<ElType>|null $comparator
     *
     * @return bool
     */
    public function retainAll(iterable $elements, ?Comparator $comparator = null): bool;

    /**
     * Retain multiple elements that meet the criteria
     *
     * This method removes all elements from the collection that do not pass the
     * provided {@see \Smpl\Logic\Contracts\Predicate}.
     *
     * This method is considered the inverse of {@see self::removeIf()}.
     *
     * @param \Smpl\Logic\Contracts\Predicate $predicate
     *
     * @return bool
     */
    public function retainIf(Predicate $predicate): bool;
}
