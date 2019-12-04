<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();

$type = $conDB->sqlEscapestr($_GET['type']);

if(isset($_GET['doc_id'])){
    $doc_id = $conDB->sqlEscapestr($_GET['doc_id']);
}

$username = $_SESSION['USERNAME'];

if($type == 'add_notis'){
    $table_name = 'document_notis';
    $strSQL = "INSERT INTO `$table_name` (`doc_id`, `doc_no`, `doc_create_date`, `doc_plaintiff_id`, `doc_plaintiff_name`, `doc_restructuring`, `doc_credit_type`, `doc_county`, `doc_notis_date`, `lawyer_id`, `lawyer_name`, `doc_status`, `create_by_user`) VALUES (NULL, '', CURRENT_TIMESTAMP, '', '', '', '', '', NULL, '', '', 'รอ', '$username');";
    $objQuery = $conDB->sqlQuery($strSQL);

    $strSQL = "SELECT * FROM `$table_name` ORDER BY `document_notis`.`doc_create_date` DESC LIMIT 1";
    $objQuery = $conDB->sqlQuery($strSQL);
    while($objResult = mysqli_fetch_assoc($objQuery)) {
        $redirect = "<script>window.location.href = '../pages/notis_edit.php?id=".$objResult['doc_id']."&act=edit'</script>";
    }
}

if($type == 'add_filedoc'){
    $table_name = 'document_filedoc';
    $strSQL = "INSERT INTO `document_filedoc` (`doc_file_id`, `doc_id`, `doc_file_name`, `doc_file_text`, `doc_file_date`) VALUES (NULL, '$doc_id', '', '', CURRENT_TIMESTAMP);";
    $objQuery = $conDB->sqlQuery($strSQL);

    $strSQL = "SELECT * FROM `document_filedoc` ORDER BY `document_filedoc`.`doc_file_date` DESC LIMIT 1";
    $objQuery = $conDB->sqlQuery($strSQL);
    while($objResult = mysqli_fetch_assoc($objQuery)) {
        $redirect = "<script>window.location.href = '../pages/filedoc_notis_edit.php?doc_id=".$doc_id."&doc_file_id=".$objResult['doc_file_id']."'</script>";
    }
}


include("loading.php");
echo $redirect;

?>