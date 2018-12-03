<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
	  Send these files:<br />
	  <input name="userfile[]" type="file" /><br />
	  <input name="userfile[]" type="file" /><br />
	  <input type="submit" value="Send files" />
	</form>
</body>
</html>



