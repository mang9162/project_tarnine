<?php
session_start();
ob_start();
include("../connect/database.php");
$_SESSION['PAGE'] = "../pages/permission.php";
$conDB = new db_conn();
$strSQL = "SELECT * FROM `user_account` LEFT JOIN `user_permission` ON `user_permission`.`userid` = `user_account`.`id` WHERE `user_account`.`permission` <> 0";
$objQuery = $conDB->sqlQuery($strSQL);
$index = 0;
?>
<!DOCTYPE html>
<html>
<head>
<?php include("head.php");?>
</head>
<body class="skin-black">
<section class="content-header">
  <h1>จัดการสิทธิ</h1>
  <ol class="breadcrumb"><li class="active">จัดการสิทธิ</li></ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover" >
            <thead>
              <tr>
                <th width="15">ลำดับ</th>
                <th width="400">ชื่อบัญชี</th>
                <th width="200"><center>ฟ้องคดี</center></th>
                <th width="200"><center>สืบทรัพย์</center></th>
                <th width="200"><center>ยึดทรัพย์และอายัด</center></th>
                <th width="200"><center>เบิกเงิน</center></th>
              </tr>
            </thead>
            <tbody>
<?php 
while($objResult = mysqli_fetch_assoc($objQuery)) {
  $index++;
?>
            <tr>        
              <td><?php echo $index ?></td>
              <td><?php echo $objResult['username'] ?></td>
              <td><center><input type="checkbox"<?php if($objResult['menu1'] == 1){ echo "checked"; }?> onChange="postData('<?php echo $objResult['id']; ?>','menu1',this)"></center></td>
              <td><center><input type="checkbox" <?php if($objResult['menu2'] == 1){ echo "checked"; }?> onChange="postData('<?php echo $objResult['id']; ?>','menu2',this)"></center></td>
              <td><center><input type="checkbox" <?php if($objResult['menu3'] == 1){ echo "checked"; }?> onChange="postData('<?php echo $objResult['id']; ?>','menu3',this)"></center></td>
              <td><center><input type="checkbox" <?php if($objResult['menu4'] == 1){ echo "checked"; }?> onChange="postData('<?php echo $objResult['id']; ?>','menu4',this)"></center></td>
            </tr>
<?php 
}
?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<?php include("script.php");?>
<script>
$(function () {
  $('#example1').DataTable({
    'responsive'   : true,
    'paging'       : true,
    'lengthChange' : true,
    'searching'    : true,
    'ordering'     : false,
    'info'         : false,
    'autoWidth'    : false,
    'bStateSave'   : true,
    'fnStateLoaded': function (oSettings, oData) {}
  })
})
function postData(u,f,v){
	var val = v.checked ? false : true;
	var v;
	if(val == true){v='0'}else{v='1'}
	$.post( "../services/user_permission.php", { u:u, f:f, v:v } )
	.done(function( data ) {
    console.log( "Data Loaded: " + data );
  });
}
</script>
</html>