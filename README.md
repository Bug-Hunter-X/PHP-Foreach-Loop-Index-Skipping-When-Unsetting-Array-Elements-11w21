# PHP Foreach Loop Bug

This repository demonstrates a common error in PHP when using `foreach` loops to modify arrays by unsetting elements.  The standard `foreach` loop creates a copy of the array's internal pointer, resulting in index skipping when elements are removed.

The `bug.php` file shows the erroneous code and its unexpected output.  `bugSolution.php` provides a corrected version using a `for` loop that directly modifies the original array, avoiding the index skipping issue. 

## How to Reproduce

1. Clone this repository.
2. Run `php bug.php` and note the output.
3. Run `php bugSolution.php` and observe the corrected output.

## Explanation

The `foreach` loop in `bug.php` iterates over a copy of the array. Unsetting an element affects the copy but not the original. This leads to incorrect indexing, potentially causing bugs when processing your data.  The `for` loop avoids this issue because it directly modifies the array.

This example highlights the importance of understanding how PHP handles array iteration and modification when using loops.