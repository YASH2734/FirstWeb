<?php 
 setcookie('name',"john Wick",time()+3600,'/',"",0);
 setcookie('age',"30",time()+3600,'/',"",0);
?>
<html>
	<head>
		<title>Setting cookies in PHP</title>
	</head>
	<body>
		<?php echo "Set Cookie";?>
	</body>
</html>