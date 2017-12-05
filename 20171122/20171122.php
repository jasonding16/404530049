<?php
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
?>
