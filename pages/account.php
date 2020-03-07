<?php
session_start();
ob_start();
include("../connect/database.php");
$_SESSION['PAGE'] = "../pages/account.php";
$conDB = new db_conn();
$strSQL = "SELECT * FROM `user_account`";
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
    <button type="button" class="btn btn-app flat" onClick="goHref('../services/insert.php?type=add_plaintiff<?php echo $doc_id ?>')" title="new">
        <img src="../dist/img/icon/add.svg" width="20"><br>
        New
    </button>
    <button type="button" class="btn btn-app flat"  onClick="goHref('notis_edit.php?act=edit&id=<?php echo $id ?>')">
            <img src="../dist/img/icon/multiply.svg" width="20"><br>
			Discard
        </button>
      <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title">List</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th width="15">ลำดับ</th>
              <th width="100">รหัส</th>
              <th width="200">บัญชี</th>
              <th>ชื่อ-สกุล</th>
              <th width="100">สถานะ</th>
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
              <td><?php echo $objResult['code'] ?></td>
              <td><?php echo $objResult['username'] ?></td>
              <td><?php echo $objResult['name'] ?></td>
              <td><?php echo $objResult['enable'] ?></td>
              <td align="center" style="font-size:16px;">
                <i class="fa fa-pencil text-yellow" onClick="goHref('../pages/plaintiff_edit.php?plaintiff_id=<?php echo $objResult['plaintiff_id']; ?><?php echo $doc_id ?>')" title="edit"></i>
                <i class="fa fa-trash-o text-red" onClick="deleteData('document_report','<?php echo $objResult_doc['doc_report_id'] ?>','doc_report_id','<?php echo $objResult_doc['doc_report_name'] ?>')" title="delete"></i>
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
	  'responsive'  : true,
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
	  "bStateSave"  : true,
	 "fnStateLoaded": function (oSettings, oData) {

	 }
    })
  })
</script>
</html>