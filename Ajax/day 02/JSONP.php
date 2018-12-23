<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>

		<ul id="movies"></ul>




	<script src="jquery-1.12.1.js"></script>
	<script>
		$.ajax({
			url : 'http://api.douban.com/v2/movie/in_theaters',
			dataType: 'jsonp',
			success: function(res){
				$(res.subjects).each(function(i,item){
					$('#movies').append(`<li>${item.title}</li>`);
				})
			}
		});

		// $.ajax({
		// 	url: 'http://localhost/server.php',
		// 	dataType: 'jsonp',
		// 	success: function(res){
		// 		console.log(res);
		// 	}
		// })
	</script>
</body>
</html>