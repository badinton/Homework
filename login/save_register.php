<?php
	mysql_connect("localhost","root","");
	mysql_select_db("login_profile_db");
	
	if(trim($_POST["username"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
	if(trim($_POST["email"]) == "")
	{
		echo "Please input Email!";
		exit();	
	}	
	if(trim($_POST["phone"]) == "")
	{
		echo "Please input Phone number!";
		exit();	
	}
	if(trim($_POST["address"]) == "")
	{
		echo "Please input Address!";
		exit();	
	}
		if(trim($_POST["name"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}


	
	$strSQL = "SELECT * FROM user WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{		$message = "Username already exists";
			echo "<script type='text/javascript'>alert('$message');window.location = 'index.html#regist';</script>";
	}
	else
	{	$target = "img/".basename($_FILES['uprub']['name']);
		if (move_uploaded_file($_FILES['uprub']['tmp_name'], $target)) {
			# code...
		}
		$strSQL = "INSERT INTO user (username,password,name,email,phone,address,facebook,image_url) VALUES ('".$_POST["username"]."', 
		'".$_POST["password"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["facebook"]."','".$_FILES["uprub"]['name']."')";
		$objQuery = mysql_query($strSQL);	
		$message = "Register Completed!";
		echo "<script type='text/javascript'>alert('$message');window.location = 'index.html';</script>";
			
	}
	mysql_close();
?>