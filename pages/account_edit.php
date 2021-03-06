<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();

$account_id = $conDB->sqlEscapestr($_GET['account_id']);

// $_SESSION['PAGE'] = "../pages/plaintiff_edit.php?plaintiff_id=".$plaintiff_id;

$strSQL = "SELECT * FROM `user_account` WHERE `id` = '$account_id'";
$objQuery = $conDB->sqlQuery($strSQL);
$objResult = mysqli_fetch_assoc($objQuery);

$id = $objResult['id'];
$table = 'user_account';
$where_f = 'id';

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
    แก้ไขบัญชีผู้ใช้
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><span class="active">Document</span></a></li>
    <li><a href="account.php"><span class="active">User Account</span></a></li>
    <li class="active">Edit</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn-app flat"  onClick="goHref('../pages/account.php')" title="discard">
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
                        <label>บัญชีผู้ใช้ <span class="text-red">*</span></label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="username" value="<?php echo $objResult['username'];?>" maxlength="20" onChange="duplicate_data('<?php echo $id;?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" required readonly/>
                    </div> 
                    <div class="col-md-6">
                    <label>สิทธิ <span class="text-red">*</span></label>
                    <select id="permission" name="permission" class="form-control" onchange="form_autosave('<?php echo $id;?>','<?php echo $table ?>','<?php echo $where_f ?>',this)">
                    <?php
                        $per_id = $objResult['permission'];
                        $strSQL_per = "SELECT * FROM `permission` WHERE `enable` = 1 ORDER BY `permission`.`permission_id` DESC";
                        $objQuery_per = $conDB->sqlQuery($strSQL_per);
                        while($objResult_per = mysqli_fetch_assoc($objQuery_per)){
                    ?>
                        <option value="<?php echo $objResult_per['permission_id']; ?>" <?php if($per_id == $objResult_per['permission_id']){echo 'selected';} ?>><?php echo $objResult_per['permission_name']  ?></option>
                    <?php
                        }
                    ?>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label>สถานะการใช้งาน <span class="text-red">*</span></label>
                    <select id="enable" name="enable" class="form-control" onchange="form_autosave('<?php echo $id;?>','<?php echo $table ?>','<?php echo $where_f ?>',this)">
                        <option value="1" <?php if($objResult['enable'] == 1){echo 'selected';} ?>>เปิด</option>
                        <option value="0" <?php if($objResult['enable'] == 0){echo 'selected';} ?>>ปิด</option>
                    </select>
                    </div>
                    <div class="col-md-6">
                    <label>ชื่อทนาย <span class="text-red">*</span></label>
                    <select id="ref_lawyerid" name="ref_lawyerid" class="form-control" onchange="form_autosave('<?php echo $id;?>','<?php echo $table ?>','<?php echo $where_f ?>',this)">
                        <option value="0" <?php if($objResult['ref_lawyerid'] == 0){echo 'selected';} ?>>ไม่ระบุ</option>
                        <?php
                        $lawyer_id = $objResult['ref_lawyerid'];
                        $strSQL_per = "SELECT * FROM `lawyer` WHERE `enable` = 1";
                        $objQuery_per = $conDB->sqlQuery($strSQL_per);
                        while($objResult_per = mysqli_fetch_assoc($objQuery_per)){
                        ?>
                            <option value="<?php echo $objResult_per['lawyer_id']; ?>" <?php if($lawyer_id == $objResult_per['lawyer_id']){echo 'selected';} ?>><?php echo $objResult_per['lawyer_name']  ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            
    </div>

</section>
</body>
<?php include("script.php");?>
</html>