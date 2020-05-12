<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();
$myObj = (object)array();
$username = $conDB->sqlEscapestr($_POST['username']);
$permission = $conDB->sqlEscapestr($_POST['permission']);
$enable = $conDB->sqlEscapestr($_POST['enable']);
$ref_lawyerid = $conDB->sqlEscapestr($_POST['ref_lawyerid']);

$strSQL = "SELECT `username` FROM `user_account` WHERE `username` = '".$username."' LIMIT 1";
$exist = $conDB->sqlNumrows($strSQL);
if($exist > 0){
	$myObj->alerts = 'Username already exists. Please check.';
}else{
    $insertSQL = "INSERT INTO `user_account` (`username`, `enable`, `permission`, `ref_lawyerid`) VALUES ('$username','$enable', '$permission', '$ref_lawyerid')";
    $conDB->sqlQuery($insertSQL);
	$myObj->redirect = "../pages/account.php";
}
$myJSON = json_encode($myObj);
echo $myJSON;
?>