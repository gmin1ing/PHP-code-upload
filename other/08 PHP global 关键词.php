<?php
$x=5;
$y=10;

function myTest() {
  global $x,$y;
  $y=$x+$y;
}

myTest();
echo $y; // 输出 15



$a=5;
$b=10;

function myTest1() {
  $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
} 

myTest1();
echo $b; // 输出 15
?>