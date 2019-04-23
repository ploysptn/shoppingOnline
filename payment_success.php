<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}




?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping Online</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			table tr td {padding:10px;}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Shopping Online</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>หน้าหลัก</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>สินค้า</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>ขอบคุณ</h1>
						<hr/>
						<p>สวัสดี <?php echo $_SESSION["name"]; ?>,การชำระเงินของคุณคือ
สำเร็จแล้วและรหัสการชำระเงินของคุณคือ<b></b><br/>
						คุณสามารถเลือกซื้อสินค้าต่อ <br/></p>
						<a href="index.php" class="btn btn-success btn-lg">เลือกซื้อสินค้าต่อ</a>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
