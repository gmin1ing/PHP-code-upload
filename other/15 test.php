<?php


$str = 'one,two,three,four';

// 零 limit
print_r(explode(',',$str,0));
echo "<br>";
print_r(explode(',',$str,1));
echo "<br>";
print_r(explode(',',$str,2));
echo "<br>";
print_r(explode(',',$str,3));
echo "<br>";
print_r(explode(',',$str,4));
echo "<br>";

// 正的 limit
print_r(explode(',',$str,5));
echo "<br>";

// 负的 limit
print_r(explode(',',$str,-1));
print_r(explode(',',$str,-2));
print_r(explode(',',$str,-3));
print_r(explode(',',$str,-4));
print_r(explode(',',$str,-5));
?>
