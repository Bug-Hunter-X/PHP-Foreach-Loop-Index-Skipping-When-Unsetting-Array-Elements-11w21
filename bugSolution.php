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