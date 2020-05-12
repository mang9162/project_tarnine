<?php
session_start();
ob_start();
include("../connect/database.php");
if(isset($_SESSION['USERNAME'])){
  header("Location:../index.php");
} else{
?>
<!DOCTYPE html>
<html>
<head>
<?php include("head.php");?>
<title>Lucksiam Management System. | Log in</title>
</head>
<body>
<div id="alert-background"></div>
<div class="login-box">
  <div class="login-logo"><img src="../dist/img/profile/12795380_443460995864771_2927513966717694732_n.png" alt="" width="200"/></div>
  <div class="login-box-body">
    <form id="login" method="post">
      <div class="form-group has-feedback">
        <b style="font-size:1.5em;">บริษัท ธุรกิจเนติอินเตอร์ลอว์ จำกัด</b>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
        </div>
      </div>
    </form><br />
    <p class="login-box-msg text-red" id="message">&nbsp;</p>
	<center>© 2019, Interlaw Business Barrister System.</center>
  </div>
</div>
</body>
<?php include("script.php");?>
<script>
$(document).ready(function(){
	formPost('login');
})
</script>
</html>
<?php }?>