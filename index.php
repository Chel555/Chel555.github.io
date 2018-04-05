<html>
	<head>
		<title>Game "Pixel Picture"</title>
	</head>

	<body>
		<h1></b>Game "Pixel picture" by Mikhail Kochitov</b></h1>
		<h4>Please upload PNG picture</h4><br>
		<form action="index.php" enctype="multipart/form-data" method="post">
			<input type="file" name="pictureGame" accept="image/jpeg,image/png">	
			<input type=submit>
		</form>	
		
	</body>

</html>

<?php

if ($_FILES["pictureGame"]["tmp_name"]) {	
	move_uploaded_file($_FILES["pictureGame"]["tmp_name"], "picture.png");
	echo '<script>location.assign("Game.html");</script>';

}

?>