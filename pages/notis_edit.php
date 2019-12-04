<?php
session_start();
ob_start();
include("../connect/database.php");
$conDB = new db_conn();

$doc_id = $conDB->sqlEscapestr($_GET['id']);

$_SESSION['PAGE'] = "../pages/notis_edit.php?act=view&id=".$doc_id;

$strSQL = "SELECT * FROM `document_notis` LEFT JOIN `plaintiff` ON document_notis.doc_plaintiff_id = plaintiff.plaintiff_id LEFT JOIN `lawyer` ON document_notis.lawyer_id = lawyer.lawyer_id WHERE document_notis.doc_id = '$doc_id'";
$numrow = $conDB->sqlNumrows($strSQL);
if($numrow == 0){
    ?><script>window.history.back();</script><?php
}
$objQuery = $conDB->sqlQuery($strSQL);
$objResult = mysqli_fetch_assoc($objQuery);

if(isset($_GET['act'])){
    if($_GET['act'] == 'view' ){
        $disabled = 'readonly';
        $disSelect = 'disabled';
        $header = 'View';
    } else if($_GET['act'] == 'edit'){
        $header = 'Edit';
        $disabled = '';
        $disSelect = '';
        $_SESSION['PAGE'] = "../pages/notis_edit.php?act=edit&id=".$doc_id;
    }
} else{
    $header = 'Edit';
    $disabled = '';
    $disSelect = '';
}

if(($objResult['doc_no'] == '') && ($_GET['act'] == 'edit')){
    $no_read = '';
}else{
    $no_read = 'readonly';
}

$table = 'document_notis';
$where_f = 'doc_id';

$no = '';

//echo $strSQL;

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
    Notis <?php echo $header ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><span class="active">Document</span></a></li>
    <li><a href="notis_list.php"><span class="active">Notis</span></a></li>
    <li class="active">Edit</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
        <div class="col-xs-12">
        <?php if($disabled == 'readonly'){ ?>
        <button type="button" class="btn btn-app flat" onClick="goHref('../pages/notis_edit.php?act=edit&id=<?php echo $objResult['doc_id']?>')" title="edit">
            <img src="../dist/img/icon/edit.svg" width="20"><br>
			Edit
        </button>
        <button type="button" class="btn btn-app flat" onClick="deleteData('document_notis','<?php echo $objResult['doc_id'] ?>','doc_id','<?php echo $objResult['doc_no'] ?>')" title="delete">
            <img src="../dist/img/icon/delete.svg" width="20"><br>
			Delete
        </button>
        <?php } else {?>
        <button type="button" class="btn btn-app flat" onClick="goHref('../pages/notis_edit.php?act=view&id=<?php echo $objResult['doc_id']?>')" title="delete">
            <img src="../dist/img/icon/search.svg" width="20"><br>
			View
        </button>
        <?php } ?>
        <a href="../report/purchase.php?id=<?php echo $no; ?>" target="_blank"><button type="button" class="btn btn-app flat"  onClick="goHref('purchase.php')" title="print">
            <img src="../dist/img/icon/print.svg" width="20"><br>
			Print
        </button></a>
        <button type="button" class="btn btn-app flat"  onClick="goHref('notis_list.php')" title="discard">
            <img src="../dist/img/icon/multiply.svg" width="20"><br>
			Discard
        </button>
        
            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">Notis Info</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6">
                        <label>เลขที่บัญชี(สัญญา) <span class="text-red">*</span></label>
                        <input type="text" id="doc_no" name="doc_no" class="form-control" placeholder="Document No." value="<?php echo $objResult['doc_no'];?>" maxlength="20" onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" <?php echo $no_read ?> required />
                    </div> 
                    <div class="col-md-6">
                        <label>วันที่สร้าง  <span class="text-red">*</span></label>
                        <div class="input-group date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input type="text" class="form-control pull-right" id="create_date" name="create_date"  value="<?php echo $objResult['doc_create_date']?>" readonly required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>โจทก์ <span class="text-red">*</span></label>
                        <div class="input-group">
                            <input id="doc_plaintiff_id" name="doc_plaintiff_id" type="text" class="form-control"  value="<?php echo $objResult['plaintiff_name'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" readonly>
                            <span class="input-group-btn">
                                  <button type="button" class="btn btn-default btn-flat" onClick="goHref('plaintiff_select.php?doc_id=<?php echo $doc_id ?>')" <?php echo $disSelect ?>><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>สัญญาปรับโครงสร้าง</label>
                        <input type="text" id="doc_restructuring" name="doc_restructuring" class="form-control" placeholder="สัญญาปรับโครงสร้าง" value="<?php echo $objResult['doc_restructuring'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)">
                    </div> 
					<div class="col-md-6">
                        <label>ประเภทสินเชื่อ </label>
                        <input type="text" id="doc_credit_type" name="doc_credit_type" class="form-control" placeholder="ประเภทสินเชื่อ" value="<?php echo $objResult['doc_credit_type'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" />
                    </div>
                    <div class="col-md-6">
                        <label>ศาลจังหวัด </label>
                        <input type="text" id="doc_county" name="doc_county" class="form-control" placeholder="ศาลจังหวัด" value="<?php echo $objResult['doc_county'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" />
                    </div>
                    <div class="col-md-6">
                        <label>ทนายเจ้าของสำนวน <span class="text-red">*</span></label>
                        <div class="input-group">
                            <input id="lawyer_id" name="lawyer_id" type="text" class="form-control"  value="<?php echo $objResult['lawyer_name'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)"  readonly>
                            <span class="input-group-btn">
                                  <button type="button" class="btn btn-default btn-flat" onClick="goHref('lawyer_select.php?doc_id=<?php echo $doc_id;?>')" <?php echo $disSelect ?>><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>โนติสวันที่ </label>
                        <div class="input-group doc_notis_date">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                        <input type="text" class="form-control pull-right" id="doc_notis_date" name="doc_notis_date"  value="<?php echo $objResult['doc_notis_date'];?>" <?php echo $disabled;?> onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)"/>
                        </div>
                    </div>
                    <!-- ส่วนของเก็บ user -->
                    <div class="col-md-6">
                        <label>สถานะ </label>
                        <input type="text" id="doc_status" name="doc_status" class="form-control" placeholder="" value="<?php echo $objResult['doc_status'];?>" onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" readonly/>
                    </div>
                    <div class="col-md-6">
                        <label>สร้างโดย </label>
                        <input type="text" id="create_by_user" name="create_by_user" class="form-control" placeholder="" value="<?php echo $objResult['create_by_user'];?>" onChange="form_autosave('<?php echo $objResult['doc_id'];?>','<?php echo $table ?>','<?php echo $where_f ?>',this)" readonly/>
                    </div>
                    

                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">รายชื่อจำเลย</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <button type="button" class="btn btn-app" onClick="goHref('defendant_select.php?doc_id=<?php echo $doc_id ?>')" title="new" <?php echo $disSelect ?>>
                            <img src="../dist/img/icon/add.svg" width="20"><br> เพิ่มจำเลย
                        </button>
                        <table id="example1" class="table table-bordered table-hover table-fixed">
                            <thead>
                            <tr>
                            <th width="20">No</th>
                            <th>ชื่อจำเลย</th>
                            <th>รหัสบัตรประชาชน</th>
                            <th width="50">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                    <?php 	$index = 1;
                    $strSQL_def = "SELECT * FROM `document_def` WHERE `doc_id` = '$doc_id'";
                    $objQuery_def = $conDB->sqlQuery($strSQL_def);
                    while($objResult_def = mysqli_fetch_assoc($objQuery_def)) { ;?>
                            <tr>
                            <td><?php echo $index++; ?></td>
                            <td><?php echo $objResult_def['doc_def_name'] ?></td>
                            <td><?php echo $objResult_def['doc_def_no'] ?></td>
                            <td align="center" style="font-size:16px;">
                            <i class="fa fa-trash-o text-red" onClick="deleteData('document_def','<?php echo $objResult_def['doc_def_id'] ?>','doc_def_id','<?php echo $objResult_def['doc_def_name'] ?>')" title="delete"></i>
                            </td>
                            </tr>
                <?php }?>
                            </tbody>
          </table>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">เอกสารโนติส</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <button type="button" class="btn btn-app" onClick="goHref('../services/insert.php?type=add_filedoc&doc_id=<?php echo $doc_id ?>')" title="new" <?php echo $disSelect ?>>
                            <img src="../dist/img/icon/add.svg" width="20"><br> เพิ่มเอกสาร
                        </button>
                        <table id="example1" class="table table-bordered table-hover table-fixed">
                            <thead>
                            <tr>
                            <th width="20">No</th>
                            <th>ชื่อเอกสาร</th>
                            <th width="150">วันที่สร้าง</th>
                            <th width="80">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                    <?php 	$index = 1;
                    $strSQL_doc = "SELECT * FROM `document_filedoc` WHERE `doc_id` = '$doc_id'";
                    $objQuery_doc = $conDB->sqlQuery($strSQL_doc);
                    while($objResult_doc = mysqli_fetch_assoc($objQuery_doc)) { ;?>
                            <tr>
                            <td><?php echo $index++; ?></td>
                            <td><?php echo $objResult_doc['doc_file_name'] ?></td>
                            <td><?php echo $objResult_doc['doc_file_date'] ?></td>
                            <td align="center" style="font-size:16px;">
                            <i class="fa fa-pencil text-yellow" onClick="goHref('../pages/filedoc_notis_edit.php?doc_id=<?php echo $doc_id; ?>&doc_file_id=<?php echo $objResult_doc['doc_file_id']; ?>')" title="edit"></i>
                            <a href="../report/notis_document_report.php?doc_file_id=<?php echo $objResult_doc['doc_file_id'] ?>" target="_blank"><i class="fa fa-print" title="print"></i></a>
                            <i class="fa fa-trash-o text-red" onClick="deleteData('document_filedoc','<?php echo $objResult_doc['doc_file_id'] ?>','doc_file_id','<?php echo $objResult_doc['doc_file_name'] ?>')" title="delete"></i>
                            </td>
                            </tr>
                <?php }?>
                            </tbody>
          </table>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

            <div class="box">
            	<div class="box-header with-border">
                  <h3 class="box-title">ฟอร์มโนติส</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- <button type="button" class="btn btn-app" onClick="goHref('../services/insert.php?type=add_filedoc&doc_id=<?php echo $doc_id ?>')" title="new" <?php echo $disSelect ?>>
                            <img src="../dist/img/icon/add.svg" width="20"><br> เพิ่มเอกสาร
                        </button> -->
                        <table id="example1" class="table table-bordered table-hover table-fixed">
                            <thead>
                            <tr>
                                <th>ชื่อเอกสาร</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="../report/form/lawyer_report.php" target="_blank"> ใบแต่งทนาย </a></td>
                                </tr>
                                <tr>
                                    <td><a href="../report/form/statement_request_report.php" target="_blank"> คำแถลงขอส่งหมายและปิดหมาย </a></td>
                                </tr>
                            </tbody>
          </table>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
    </div>

</section>
</body>
<?php include("script.php");?>

<script>
    $('#doc_notis_date').datepicker({
        autoclose: true
    })

</script>
</html>