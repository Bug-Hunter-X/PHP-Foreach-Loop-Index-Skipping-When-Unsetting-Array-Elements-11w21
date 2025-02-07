function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

// The problem is that the foreach loop iterates over a copy of the array.
// When you unset an element, it's removed from the copy, but the original array is unaffected.
// This causes the index to be skipped.

// Solution: Iterate over the array using a for loop and modify the original array directly.
function foo2(array &$arr) {
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo2($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )