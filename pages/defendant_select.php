<?php
session_start();
ob_start();
include("../connect/database.php");
$doc_id = $_GET['doc_id'];
$conDB = new db_conn();
$strSQL = "SELECT * FROM `defendant` WHERE `enable` = '1'";
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
    รายชื่อจำเลย
    <small><a href="customer_create.php">+ New</a></small>
  </h1>
  <ol class="breadcrumb">
        <li class="active">Select Defendant</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
    <button type="button" class="btn btn-app flat"  onClick="goBack()">
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
              <th width="15">No</th>
              <th width="25">#</th>
              <th>ชื่อจำเลย</th>
              <th>รหัสบัตรประชาชน</th>
            </tr>
            </thead>
            <tbody>
<?php 
	while($objResult = mysqli_fetch_assoc($objQuery)) {
        $index++;
        ?>
            <tr>        
              <td><?php echo $index ?></td>
              <td style="padding:0px;"><a href="../services/defendant_select.php?doc_id=<?php echo $doc_id; ?>&defendant_id=<?php echo $objResult['defendant_id']; ?>"><button type="button" class="btn btn-success btn-flat btn-block">เลือก</button></a></td>
              <td><?php echo $objResult['defendant_name'] ?></td>
              <td><?php echo $objResult['defendant_no'] ?></td>
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
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
	  "bStateSave"  : true,
	 "fnStateLoaded": function (oSettings, oData) {
	 //alert( 'Saved filter was: '+oData.oSearch.sSearch );
	 }
    })
  })
</script>
</html>