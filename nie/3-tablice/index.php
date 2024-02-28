<?php
//$fib=[1,1,2,3,5,8,13];
// foreach ($fib as $key=>$val){
//   echo ($key+1).'='.$val.'<br>';
// }
$fib = [0, 1];
for($i = 2; $i < 10; $i++) {
  $val = $fib[count($fib) - 2] + $fib[count($fib) - 1];
  array_push($fib, $val);
}
foreach ($fib as $key => $val) {
  echo ($key + 1) . ' = ' . $val . '<br>';
}
?>