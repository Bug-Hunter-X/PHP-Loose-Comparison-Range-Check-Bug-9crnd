The solution addresses the loose comparison issue by explicitly type-casting the input to an integer and then performing the range check. This prevents unexpected results caused by PHP's loose typing.

```php
<?php
function checkValue($value) {
  $value = (int)$value; // Explicit type casting to integer
  return $value >= 10 && $value <= 20;
}

var_dump(checkValue(15)); // true (correct)
var_dump(checkValue('15')); // true (correct)
var_dump(checkValue('25')); // false (correct)
var_dump(checkValue('abc')); // false (correct)
?>
```

Alternatively, you can use `is_numeric()` function for better error handling:

```php
<?php
function checkValue($value) {
  if (!is_numeric($value)) {
    return false; // Handle non-numeric input
  }
  $value = (int)$value; 
  return $value >= 10 && $value <= 20;
}

var_dump(checkValue(15)); // true (correct)
var_dump(checkValue('15')); // true (correct)
var_dump(checkValue('25')); // false (correct)
var_dump(checkValue('abc')); // false (correct)
?>
```