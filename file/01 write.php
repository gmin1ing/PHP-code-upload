
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("a.txt", "a+");
//echo fread($myfile,filesize("a.txt"));
$txt = "Bill Gates\n";
 fwrite($myfile, "Bill Gates\n");
fclose($myfile);
?>

</body>
</html>