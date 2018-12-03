<?php
// 给当前用户找箱子（没有箱子开箱子，有箱子找箱子）
session_start();
$_SESSION['key1']='value1';
unset($_SESSION['key1']);