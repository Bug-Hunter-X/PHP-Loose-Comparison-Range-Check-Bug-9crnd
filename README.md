# PHP Loose Comparison Range Check Bug

This repository demonstrates a subtle bug in PHP related to loose type comparison in range checks.  The `checkValue` function is intended to verify if a number is within the range [10, 20]. However, due to PHP's weak typing, it incorrectly validates string values as well.

## The Bug
The problem lies in PHP's loose comparison operators (`>=` and `<=`). When comparing a string and a number, PHP attempts to convert the string to a number. If the conversion is successful (as in the case of "15"), the comparison proceeds as if it were a numerical comparison.  If conversion fails (like "abc"), it compares string values, correctly failing the check.  This leads to unexpected behavior where strings representing numbers outside the specified range are accepted.

## The Solution
The solution involves using strict comparison operators (`>=` and `<=`) that require both operands to be of the same type.  Alternatively, type checking can explicitly ensure that the input value is a number before performing the range check. 