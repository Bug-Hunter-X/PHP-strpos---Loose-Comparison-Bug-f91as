The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison checks for both value and type equality, preventing the `false` from being incorrectly interpreted as `0`. This ensures the `if` block only executes when the substring is actually found at the beginning of the string.

```php
<?php
  $haystack = "This is an example string.";
  $needle = "example";

  if (strpos($haystack, $needle) === 0) {
    echo "'" . $needle . "' found at the beginning of the string.";
  } else {
    echo "'" . $needle . "' not found at the beginning of the string.";
  }
?>
```