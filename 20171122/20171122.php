<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		height:<input type="text" name="height">m<br>
		weight:<input type="text" name="weight">kg<br>
		<input type="file" name="file" id="file"><br>
		<input type="submit" name="submit"><br>
	</form>
	<?php
		if($_POST){
			if ($_POST["height"]==""||$_POST["weight"]=="") {
				echo "please type in all information<br>";
			}
			else{
				echo "height:".$_POST["height"]."<br>";
				echo "weight:".$_POST["weight"]."<br>";
				$kg = $_POST["height"]/100;
				$bmi = $_POST["weight"]/($kg*$kg);
				echo "bmi :$bmi<br>";
			}
			if($_FILES["file"]["error"]>0){
				echo "wrong file type<br>";
			}
			elseif (filesize($_FILES["file"]["tmp_name"])=="") {
				echo "empty<br>";
			}
			else{
				$filename = $_FILES["file"]["name"];
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
				echo '<img src="upload/'.$filename.'"/>';
			}
		}
	?>
</body>
</html>