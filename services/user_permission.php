<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();
$u = $conDB->sqlEscapestr($_POST['u']);
$f = $conDB->sqlEscapestr($_POST['f']);
$v = $conDB->sqlEscapestr($_POST['v']);
$strSQL = "UPDATE `user_permission` SET `$f` = '$v' WHERE `user_permission`.`userid` = '$u'";
$conDB->sqlQuery($strSQL);