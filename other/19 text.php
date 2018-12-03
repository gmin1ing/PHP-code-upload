<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
Age: <input type="text" name="age">
Sex: <input type="text" name="sex">
<input type="submit">
</form>

<?php 
$name = $_REQUEST['fname']; 
$age = $_REQUEST['age']; 
$sex = $_REQUEST['sex']; 
echo $name; 
echo $age; 
echo $sex; 
?>

</body>
</html>