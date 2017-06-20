<?php  
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("login_profile_db");
	$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['username'])."'and password = '".mysql_real_escape_string($_POST['password'])."'";
	// echo $strSQL;
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

	if(!$objResult)
	{
			$message = "Username and Password Incorrect!";
			echo "<script type='text/javascript'>alert('$message');window.location = 'index.html';</script>";
	}
	else{
	// {		var active =[{'active':'football'},{'active':'basketball'},{'active':'card'},{'active':'music'},{'active':'game'}];var tmp = JSON.stringify(active)localStorage.setItem('activity',tmp);;
			// echo json_encode(array('name'=>$objResult["name"]));
			echo "<script type='text/javascript'>localStorage.setItem('name','".$objResult['name']."');localStorage.setItem('phone','".$objResult['phone']."');localStorage.setItem('email','".$objResult['email']."');localStorage.setItem('id','".$objResult['id']."');localStorage.setItem('address','".$objResult['address']."');localStorage.setItem('facebook','".$objResult['facebook']."');localStorage.setItem('img','".$objResult['image_url']."');window.location = 'index.html#profile';</script>";
			 
			session_write_close();
			
	}
	mysql_close();
?>

