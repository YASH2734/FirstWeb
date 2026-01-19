<?php 
 
 if(isset($_SESSION['counter'])){$_SESSION['counter']+=1;}else {$_SESSION['counter']=1;}
 $my_Msg="This page is Valid".$_SESSION['counter']; $my_Msg.="this during this _SESSION.";
 
?>
<html>
	<head>
		<title>storing PHP session</title>
	</head
	 <body>
		<?php 
           echo ($my_Msg);
		?>
	</body>
</html>