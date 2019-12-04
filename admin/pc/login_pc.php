<?php
session_start();
$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real_escape_string(md5($_POST["password"]));

echo $username,$password;

/*
 	include('conn.php');
	$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST['txtUsername'])."' 
	and Password = '".trim($_POST['txtPassword'])."'
	and Active = 'Yes' ";
	echo $strSQL;
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				echo "Welcome Admin";
				//header("location:admin_page.php");
			}
			else
			{
				echo "Welcome User";
				header("location:user_page.php");
			}
	}
    mysql_close();
    */
?>