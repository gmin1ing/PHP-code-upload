<?php

function myTest() {
  static $x=0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
// 无法访问。该变量仍然是函数的局部变量。
echo $x;
?>