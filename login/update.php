<?php
	mysql_connect("localhost","root","");
	mysql_select_db("login_profile_db");

		
	$id = $_POST["id"];
	$target = "img/".basename($_FILES['uprub']['name']);
		if (move_uploaded_file($_FILES['uprub']['tmp_name'], $target)) {
			# code...
		}
	$strSQL = "UPDATE `user` SET `name`='".$_POST["nameuser"]."',`email`='".$_POST["email"]."',`phone`='".$_POST["phone"]."',`facebook`='".$_POST["facebook"]."',`highschool`='".$_POST["highschool"]."',`university`='".$_POST["university"]."',`image_url`='".$_FILES["uprub"]["name"]."' WHERE id = ".$id."";
	$objQuery = mysql_query($strSQL);	
	$message = "Edit Completed!";
	echo "<script type='text/javascript'>alert('$message');localStorage.setItem('name','".$_POST["nameuser"]."');localStorage.setItem('address','".$_POST["address"]."');localStorage.setItem('email','".$_POST["email"]."');localStorage.setItem('phone','".$_POST["phone"]."');localStorage.setItem('facebook','".$_POST["facebook"]."');localStorage.setItem('university','".$_POST["university"]."');localStorage.setItem('highschool','".$_POST["highschool"]."');localStorage.setItem('img','".$_FILES["uprub"]["name"]."');window.location = 'index.html#profile';</script>";

		
	mysql_close();
?>