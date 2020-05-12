<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();
$myObj = (object)array();
$password = $conDB->sqlEscapestr($_POST['password']);
$newpassword = $conDB->sqlEscapestr($_POST['newpassword']);
$confirmpassword = $conDB->sqlEscapestr($_POST['confirmpassword']);
if($newpassword != $confirmpassword){
	$myObj->alerts = "Passwords do not match. please check";
}else{
	$strSQL = "SELECT * FROM `user_account` WHERE `username` = '".$_SESSION['USERNAME']."' AND `password` = '".md5($password)."' LIMIT 1";
	$exist = $conDB->sqlNumrows($strSQL);
	if($exist == 0){
		$myObj->alerts = "Password is incorrect. Please check.";
	}else{
		$strSQL2 = "UPDATE `user_account` SET `password` = '".md5($newpassword)."' WHERE `user_account`.`username` = '".$_SESSION['USERNAME']."'";
        $conDB->sqlQuery($strSQL2);
        $myObj->redirect = "../pages/changepassword.php";
	}
}
$myJSON = json_encode($myObj);
echo $myJSON;
?>