<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();
$_SESSION['PAGE'] = "../pages/account_create.php";
?>

<!DOCTYPE html>
<html>
<head>
<?php include("head.php");?>
</head>
<body class="skin-black">
<div id="alert-background"></div>
<section class="content-header">
  <h1>
    เพิ่มบัญชีผู้ใช้
  </h1>
  <ol class="breadcrumb">
    <li><a href="account.php"><span class="active">บัญชีผู้ใช้</span></a></li>
    <li class="active">เพิ่มบัญชีผู้ใช้</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<form id="account_create" method="post">
<div class="row">
        <div class="col-xs-12">
        <button type="submit" class="btn btn-app flat"  title="discard">
            <img src="../dist/img/icon/save.svg" width="20"><br>
            Save
        </button>
        <button type="button" class="btn btn-app flat"  onClick="goHref('account.php')" title="discard">
            <img src="../dist/img/icon/multiply.svg" width="20"><br>
            Back
        </button>
            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">ข้อมูลบัญชีผู้ใช้</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                        <label>บัญชีผู้ใช้ <span class="text-red" id="message">*</span></label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="username" value="" maxlength="20" required />
                    </div> 
                    <div class="col-md-6">
                    <label>สิทธิ <span class="text-red">*</span></label>
                    <select id="permission" name="permission" class="form-control">
                    <?php
                        $strSQL_per = "SELECT * FROM `permission` WHERE `enable` = 1 ORDER BY `permission`.`permission_id` DESC";
                        $objQuery_per = $conDB->sqlQuery($strSQL_per);
                        while($objResult_per = mysqli_fetch_assoc($objQuery_per)){
                    ?>
                        <option value="<?php echo $objResult_per['permission_id']; ?>"><?php echo $objResult_per['permission_name']  ?></option>
                    <?php
                        }
                    ?>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label>สถานะการใช้งาน <span class="text-red">*</span></label>
                    <select id="enable" name="enable" class="form-control">
                        <option value="1">เปิด</option>
                        <option value="0">ปิด</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label>ชื่อทนาย <span class="text-red">*</span></label>
                    <select id="ref_lawyerid" name="ref_lawyerid" class="form-control">
                        <option value="0">ไม่ระบุ</option>
                        <?php
                        $strSQL_per = "SELECT * FROM `lawyer` WHERE `enable` = 1";
                        $objQuery_per = $conDB->sqlQuery($strSQL_per);
                        while($objResult_per = mysqli_fetch_assoc($objQuery_per)){
                        ?>
                            <option value="<?php echo $objResult_per['lawyer_id']; ?>"><?php echo $objResult_per['lawyer_name']  ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</form>
</section>
</body>
<?php include("script.php");?>
<script>
$(document).ready(function(){
	formPost('account_create');
})
</script>
</html>