<html>
	<head>
		<title>Accessing cookies in PHP</title>
	</head>
	<body>
		<?php 
			echo $_COOKIE['name']."<br/>";
		<!--	echo $HTTP_COOKIE_VARS["name"]."<br/>";  --->
		    echo $_COOKIE["age"]."<br/>";
        <!--   echo $HTTP_COOKIE_VARS["age"]."</br>";   --->
		?>
	</body>
</html>