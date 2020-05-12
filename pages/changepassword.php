<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();
$_SESSION['PAGE'] = "../pages/changepassword.php";
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
    เปลี่ยนรหัสผ่าน
  </h1>
  <ol class="breadcrumb">
    <li class="active">เปลี่ยนรหัสผ่าน</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<form id="changepassword" method="post">
<div class="row">
        <div class="col-xs-12">
        <button type="submit" class="btn btn-app flat"  title="discard">
            <img src="../dist/img/icon/save.svg" width="20"><br>
            Save
        </button>
        <button type="button" class="btn btn-app flat"  onClick="goHref('dashboard.php')" title="discard">
            <img src="../dist/img/icon/multiply.svg" width="20"><br>
            Back
        </button>
            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">ข้อมูลรหัสผ่าน</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                        <label>รหัสผ่าน <span class="text-red" id="message">*</span></label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="รหัสผ่าน" value="" maxlength="20" required />
                    </div> 
                    <div class="col-md-6">
                        <label>รหัสผ่านใหม่ <span class="text-red">*</span></label>
                        <input type="password" id="newpassword" name="newpassword" class="form-control" placeholder="รหัสผ่านใหม่" value="" maxlength="20" required />
                    </div>
                    <div class="col-md-6">
                        <label>ยืนยันรหัสผ่านใหม่ <span class="text-red">*</span></label>
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="ยืนยันรหัสผ่าน" value="" maxlength="20" required />
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
	formPost('changepassword');
})
</script>
</html>