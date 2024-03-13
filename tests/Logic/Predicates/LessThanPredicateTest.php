<?php
declare(strict_types=1);

namespace Smpl\Tests\Logic\Predicates;

use Countable;
use Override;
use PHPUnit\Framework\TestCase;
use Smpl\Logic\Predicates;

/**
 * @group predicate
 * @group comparison
 * @group numerical
 */
class LessThanPredicateTest extends TestCase
{
    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedInteger(): void
    {
        $predicate = new Predicates\LessThanPredicate(10);

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertFalse($predicate->test(10));
        $this->assertFalse($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertFalse($predicate->perform(10));
        $this->assertFalse($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertFalse($predicate(10));
        $this->assertFalse($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }

    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedFloat(): void
    {
        $predicate = new Predicates\LessThanPredicate(10.8);

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertTrue($predicate->test(10));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertTrue($predicate->perform(10));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertTrue($predicate(10));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }

    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedCountable(): void
    {
        $predicate = new Predicates\LessThanPredicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        });

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertFalse($predicate->test(10));
        $this->assertFalse($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertFalse($predicate->perform(10));
        $this->assertFalse($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertFalse($predicate(10));
        $this->assertFalse($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }

    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedIntegerFromHelper(): void
    {
        $predicate = Predicates::lessThan(10);

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertFalse($predicate->test(10));
        $this->assertFalse($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertFalse($predicate->perform(10));
        $this->assertFalse($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertFalse($predicate(10));
        $this->assertFalse($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }

    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedFloatFromHelper(): void
    {
        $predicate = Predicates::lessThan(10.8);

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertTrue($predicate->test(10));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertTrue($predicate->perform(10));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertTrue($predicate(10));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }

    /**
     * @return void
     *
     * @test
     */
    public function correctResultFromTestedCountableFromHelper(): void
    {
        $predicate = Predicates::lessThan(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        });

        // Use the Predicate::test() method
        $this->assertFalse($predicate->test(true));
        $this->assertTrue($predicate->test(1));
        $this->assertTrue($predicate->test(4.0));
        $this->assertFalse($predicate->test('true'));
        $this->assertFalse($predicate->test('false'));
        $this->assertFalse($predicate->test('null'));
        $this->assertFalse($predicate->test(['foo']));
        $this->assertFalse($predicate->test(false));
        $this->assertTrue($predicate->test(0));
        $this->assertFalse($predicate->test(''));
        $this->assertFalse($predicate->test(null));
        $this->assertFalse($predicate->test(10));
        $this->assertFalse($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->test(11));
        $this->assertTrue($predicate->test(9.99999));
        $this->assertFalse($predicate->test(4000));
        $this->assertFalse($predicate->test(6_000_000));
        $this->assertFalse($predicate->test(10E7));
        $this->assertTrue($predicate->test(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the Operation::perform() method
        $this->assertFalse($predicate->perform(true));
        $this->assertTrue($predicate->perform(1));
        $this->assertTrue($predicate->perform(4.0));
        $this->assertFalse($predicate->perform('true'));
        $this->assertFalse($predicate->perform('false'));
        $this->assertFalse($predicate->perform('null'));
        $this->assertFalse($predicate->perform(['foo']));
        $this->assertFalse($predicate->perform(false));
        $this->assertTrue($predicate->perform(0));
        $this->assertFalse($predicate->perform(''));
        $this->assertFalse($predicate->perform(null));
        $this->assertFalse($predicate->perform(10));
        $this->assertFalse($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate->perform(11));
        $this->assertTrue($predicate->perform(9.99999));
        $this->assertFalse($predicate->perform(4000));
        $this->assertFalse($predicate->perform(6_000_000));
        $this->assertFalse($predicate->perform(10E7));
        $this->assertTrue($predicate->perform(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));

        // Use the magic __invoke() method
        $this->assertFalse($predicate(true));
        $this->assertTrue($predicate(1));
        $this->assertTrue($predicate(4.0));
        $this->assertFalse($predicate('true'));
        $this->assertFalse($predicate('false'));
        $this->assertFalse($predicate('null'));
        $this->assertFalse($predicate(['foo']));
        $this->assertFalse($predicate(false));
        $this->assertTrue($predicate(0));
        $this->assertFalse($predicate(''));
        $this->assertFalse($predicate(null));
        $this->assertFalse($predicate(10));
        $this->assertFalse($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 10;
            }
        }));
        $this->assertFalse($predicate(11));
        $this->assertTrue($predicate(9.99999));
        $this->assertFalse($predicate(4000));
        $this->assertFalse($predicate(6_000_000));
        $this->assertFalse($predicate(10E7));
        $this->assertTrue($predicate(new class implements Countable {
            #[Override]
            public function count(): int
            {
                return 7;
            }
        }));
    }
}
