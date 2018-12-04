<?php
// 只要有人请求，意味着不想看到广告
// 给顾客开张票
setcookie('hide_ad','1');
header('Location: index.php');