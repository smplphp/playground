<img src="smpl-logo.png" alt="SMPL" align="left">

# SMPL - Playground

This is the SMPL playground, a repository that contains the development efforts and proof of concept for the
SMPL framework and suite of components.

![Static Badge](https://img.shields.io/badge/php-8.3-blue)
![GitHub Release](https://img.shields.io/github/v/release/smplphp/playground)
![GitHub](https://img.shields.io/github/license/smplphp/playground)
[![codecov](https://codecov.io/gh/smplphp/playground/branch/main/graph/badge.svg?token=FHJ41NQMTA)](https://codecov.io/gh/smplphp/playground)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fsmplphp%2Fplayground%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/smplphp/playground/main)
[![Psalm type coverage](https://shepherd.dev/github/smplphp/playground/coverage.svg)](https://shepherd.dev/github/smplphp/playground)
[![Psalm level](https://shepherd.dev/github/smplphp/playground/level.svg)](https://shepherd.dev/github/smplphp/playground)

## Components

### Logic

The logic component provides a number of utilities for creating functional logic within an application, such as:

#### Comparators

Comparators are classes that take two values of a given type and compare them to determine their equality, as well as
a sorting order.
These classes perform an operation analogous to a mathematical sign function,
returning a number less than 0 if the A is less than B,
0 if A is equal to B, and a number greater than 0 if A is greater
than B.
Comparators are of primary use in the sorting of values.

> [!TIP]
> Comparators are binary operations with the signature <mixed, mixed, int>, so they can be passed where binary 
> operations are accepted.

#### Consumers

Consumers are classes that take a value of a given type and "consume" it.
What this essentially means is that it does something with it, and does not return a value.

#### Operations

Operations are class representations of encapsulated logic that is performed on a value of a given type, and returns a
value of another type.

##### Binary Operations

Binary operations are an alternative operation that instead takes two arguments and returns a value.

> [!TIP]
> Binary operations are not normal operations so can't be passed where operations are accepted.

##### Unary Operations

Unary operations are more specific operations that both takes an argument and returns a value of the same type.

> [!TIP]
> Unary operations are also normal operations so can be passed where operations are accepted.

#### Predicates

Predicates are class representations of boolean-value functions, taking a single argument of a given type, and returning
true or false dependent on its particular implementation.
Predicates are of primary use in the filtering of values.

> [!TIP]
> Predicates are operations with the signature <mixed, bool>, so they can be passed where operations are accepted.

#### Suppliers

Suppliers are the opposite of consumers, taking no arguments and returning a value of a given type.

#### Optional

The `Optional` class either contains a value or not, with the value sometimes being empty. 
This class gives you more control over a value,
providing a few methods for retrieving a default value if none is present.
You'd use an optional instance if you wanted to provide a fluid interface to the presence of a value.

### Collections

The collections component provides collections.

## Install

Install via composer.

```bash
$ composer create-project smplphp/playground
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](https://github.com/smplphp/playground/blob/master/LICENSE.md) for more
information.
