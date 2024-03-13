<?php
declare(strict_types=1);

namespace Smpl\Logic\Predicates;

use Override;
use Smpl\Logic\Contracts\Predicate;

/**
 * Logical AND Predicate
 *
 * A logical AND predicate takes two instances of {@see \Smpl\Logic\Contracts\Predicate}
 * and tests the same value with one, then the other, looking for a true
 * value from both.
 *
 * This class is called the logical AND predicate, but it does not use the
 * logical AND operator, it instead short-circuits and returns early if the
 * first predicate fails.
 *
 * @template ValType of mixed
 *
 * @extends \Smpl\Logic\Predicates\BasePredicate<ValType>
 */
final class LogicalAndPredicate extends BasePredicate
{
    /**
     * @var \Smpl\Logic\Contracts\Predicate<ValType>
     */
    private Predicate $first;

    /**
     * @var \Smpl\Logic\Contracts\Predicate<ValType>
     */
    private Predicate $second;

    /**
     * Create a new instance of the logical or predicate
     *
     * @param \Smpl\Logic\Contracts\Predicate<ValType> $first
     * @param \Smpl\Logic\Contracts\Predicate<ValType> $second
     */
    public function __construct(Predicate $first, Predicate $second)
    {
        $this->first  = $first;
        $this->second = $second;
    }

    /**
     * Test a value
     *
     * This method will return true if the value passes both the first and the
     * second predicate.
     *
     * This method short circuits and returns false early if the first
     * predicate fails.
     *
     * @param ValType $value
     *
     * @return bool
     */
    #[Override]
    public function test(mixed $value): bool
    {
        if (! $this->first->test($value)) {
            return false;
        }

        return $this->second->test($value);
    }
}
