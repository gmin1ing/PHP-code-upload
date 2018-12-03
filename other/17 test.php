<?php
print_r(str_word_count("I love Shanghai!",0));
echo "<br>";
print_r(str_word_count("I love Shanghai!",1));
echo "<br>";
print_r(str_word_count("I love Shanghai!",2));
echo "<br>";
print_r(str_word_count("I love Shanghai & good morning!",1));
echo "<br>";
print_r(str_word_count("I love Shanghai & good morning!",1,"&"));
echo "<br>";
echo "<br>";
echo stristr("Hello world!","WORLD",true);
echo "<br>";
echo stristr("Hello world!","WORLD",false);

echo "<br>";
echo strpbrk("I love Shanghai!","Sa");
echo "<br>";
echo strpbrk("I love Shanghai!","sh");
echo "<br>";

$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}
?>