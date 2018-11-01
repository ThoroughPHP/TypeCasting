# TypeCasting - kind of explicit type casting in PHP

[![Build Status](https://travis-ci.com/Sevavietl/TypeCasting.svg?branch=master)](https://travis-ci.com/Sevavietl/TypeCasting)
[![Coverage Status](https://coveralls.io/repos/github/Sevavietl/TypeCasting/badge.svg)](https://coveralls.io/github/Sevavietl/TypeCasting)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)

Neither real [covariance](https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science)) in method return type hints, nor [explicit type casting](https://www.baeldung.com/java-type-casting) are supported in PHP.

Sometimes it is useful to downcast object, so PhpStorm or PHPStan stop complaining about absent methods or mismatched types.
