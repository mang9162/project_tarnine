<?php
date_default_timezone_set("Asia/Bangkok");
define('DB_SERVER','localhost');
define('DB_USER','administrator');
define('DB_PASS' ,'ris,,skik=');
define('DB_NAME', 'lawyer_system');
class db_conn{
	var $DB;
	function __construct(){
		$conDB = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysqli_error());
		$this->DB = $conDB;
		mysqli_select_db($conDB,DB_NAME);
		mysqli_query($this->DB,"SET NAMES utf8");
	}
	public function sqlQuery($strSQL){
		mysqli_query($this->DB,"SET NAMES utf8");
		$objQuery = mysqli_query($this->DB, $strSQL);
		return $objQuery;
	}
	public function sqlEscapestr($value){
		if($value != ''){
			$obj = mysqli_real_escape_string($this->DB,$value);
		}else{
			$obj = $value;
		}
		return $obj;
	}
	public function sqlNumrows($strSQL){
		$objQuery = mysqli_query($this->DB,$strSQL);
		$numRows = mysqli_num_rows($objQuery);
		return $numRows;
	}
	public function close_db(){
		mysqli_close($conn);
	}
}
?>