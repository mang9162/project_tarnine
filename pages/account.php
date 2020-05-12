<?php
session_start();
ob_start();
include("../connect/database.php");
$_SESSION['PAGE'] = "../pages/account.php";
$conDB = new db_conn();
$strSQL = "SELECT `user_account`.*,`lawyer`.`lawyer_name` AS `lawyer_name`,`permission`.`permission_name` AS `permission` FROM `user_account` LEFT JOIN `permission` ON `permission`.`permission_id` = `user_account`.`permission` LEFT JOIN `lawyer` ON `lawyer`.`lawyer_id` = `user_account`.`ref_lawyerid` WHERE `permission`<> 0";
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
  <h1>
    บัญชีผู้ใช้
  </h1>
  <ol class="breadcrumb">
        <li class="active">บัญชีผู้ใช้</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
    <button type="button" class="btn btn-app flat" onClick="goHref('account_create.php')" title="new">
        <img src="../dist/img/icon/add.svg" width="20"><br>
        New
    </button>
    <!-- <button type="button" class="btn btn-app flat"  onClick="goHref('notis_edit.php?act=edit&id=<?php echo $id ?>')">
            <img src="../dist/img/icon/multiply.svg" width="20"><br>
			Discard
        </button> -->
      <div class="box">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th width="15">ลำดับ</th>
              <th>บัญชี</th>
              <th>ชื่อทนาย</th>
              <th width="100"><center>สิทธิ</center></th>
              <th width="100"><center>สถานะ</center></th>
              <th width="90"><center>เปลี่ยนพาสเวิร์ด</center></th>
              <th width="80"></th>
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
              <td><?php echo $objResult['lawyer_name'] ?></td>
              <td><center><?php echo $objResult['permission'] ?><center></td>
              <td><center><?php if($objResult['enable'] == 1){echo "<p style=\"color:green\">เปิดใช้งาน</p>";} else if($objResult['enable'] == 0){echo "<p style=\"color:red\">ปิดใช้งาน</p>";} ?></center></td>
              <td>
                <?php
                    if($objResult['password']=='827ccb0eea8a706c4c34a16891f84e7b'){
                        ?> <center><img src="../dist/img/icon/error.svg" width="20"></center> <?php
                    } else{
                        ?> <center><img src="../dist/img/icon/success.svg" width="20"></center> <?php
                    }
                ?>
              </td>
              <td align="center" style="font-size:16px;">
                <i class="fa fa-pencil text-yellow" onClick="goHref('../pages/account_edit.php?account_id=<?php echo $objResult['id']; ?>')" title="edit"></i>
                <i class="fa fa-refresh text-green" onClick="btn_reset(<?php echo $objResult['id'] ?>,'user_account','id','827ccb0eea8a706c4c34a16891f84e7b','password','<?php echo $objResult['username'] ?>')" title="reset password"></i>
                <i class="fa fa-trash-o text-red" onClick="deleteData('user_account','<?php echo $objResult['id'] ?>','id','<?php echo $objResult['username'] ?>')" title="delete"></i>
              </td>
            </tr>
<?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</body>
<?php include("script.php");?>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,
      "bStateSave"  : true,
    })
  })
</script>
</html>