<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Ventura - Dashboard</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- [if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif] -->
	<style>
		/* .sidebar {
			left: 1300px;
			direction: rtl;
		}

		.page-wrapper {
			right: 240px;
			direction: rtl;
		} */


		.sidebar {
			background-color: #3a4352;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			bottom: 0;
			right: 0;
			margin-top: 0;
			position: fixed;
			top: 60px;
			transition: all 0.2s ease-in-out 0s;
			width: 240px;
			z-index: 1001;
		}

		.sidebar.opened {
			-webkit-transition: all 0.4s ease;
			-moz-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.sidebar-inner {
			height: 100%;
			min-height: 100%;
			transition: all 0.2s ease-in-out 0s;
		}

		.sidebar-menu {
			padding: 15px;
		}

		.sidebar-menu ul {
			font-size: 15px;
			list-style-type: none;
			margin: 0;
			padding: 0;
			position: relative;
		}

		.sidebar-menu li a {
			color: #fff;
			display: block;
			font-size: 16px;
			height: auto;
			padding: 0 20px;
		}

		.sidebar-menu li a:hover {
			color: #2962ff;
		}

		.sidebar-menu>ul>li>a:hover {
			background-color: #e8e8e8;
			color: #000;
		}

		.sidebar-menu>ul>li.active>a:hover {
			background-color: #0044ff;
			color: #fff;
		}

		.sidebar-menu li.active a {
			background-color: #2962ff;
			color: #fff;
		}

		.menu-title {
			color: #9e9e9e;
			display: flex;
			font-size: 14px;
			opacity: 1;
			padding: 5px 15px;
			white-space: nowrap;
		}

		.menu-title>i {
			float: right;
			line-height: 40px;
		}

		.sidebar-menu li.menu-title a {
			color: #ff9b44;
			display: inline-block;
			margin-right: auto;
			padding: 0;
		}

		.sidebar-menu li.menu-title a.btn {
			color: #fff;
			display: block;
			float: none;
			font-size: 15px;
			margin-bottom: 15px;
			padding: 10px 15px;
		}

		.sidebar-menu ul ul a.active {
			color: #2962ff;
			text-decoration: underline;
		}

		.mobile_btn {
			display: none;
			float: left;
		}

		.sidebar .sidebar-menu>ul>li>a span {
			transition: all 0.2s ease-in-out 0s;
			display: inline-block;
			margin-right: 10px;
			white-space: nowrap;
		}

		.sidebar .sidebar-menu>ul>li>a span.chat-user {
			margin-right: 0;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.sidebar .sidebar-menu>ul>li>a span.badge {
			margin-right: auto;
		}

		.sidebar-menu ul ul a {
			display: block;
			font-size: 15px;
			text-align: right;
			/* padding: 7px 45px 7px 10px; */
			position: relative;
		}

		.sidebar-menu ul ul {
			display: none;
		}

		.sidebar-menu ul ul ul a {
			padding-right: 65px;
		}

		.sidebar-menu ul ul ul ul a {
			padding-right: 85px;
		}

		.sidebar-menu>ul>li {
			margin-bottom: 3px;
			position: relative;
		}

		.sidebar-menu>ul>li:last-child {
			margin-bottom: 0;
		}

		.sidebar-menu .menu-arrow {
			-webkit-transition: -webkit-transform 0.15s;
			-o-transition: -o-transform 0.15s;
			transition: transform 0.15s;
			position: absolute;
			left: 15px;
			display: inline-block;
			font-family: "FontAwesome";
			text-rendering: auto;
			line-height: 40px;
			font-size: 16px;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			-webkit-transform: translate(0, 0);
			-ms-transform: translate(0, 0);
			-o-transform: translate(0, 0);
			transform: translate(0, 0);
			line-height: 18px;
			top: 11px;
		}

		.sidebar-menu .menu-arrow::before {
			content: "\f104";
		}

		.sidebar-menu li a.subdrop .menu-arrow {
			-ms-transform: rotate(90deg);
			-webkit-transform: rotate(90deg);
			-o-transform: rotate(90deg);
			transform: rotate(90deg);
		}

		.sidebar-menu ul ul a .menu-arrow {
			top: 10px;
		}

		.sidebar-menu>ul>li>a {
			align-items: center;
			border-radius: 3px;
			display: flex;
			justify-content: flex-start;
			padding: 8px 15px;
			position: relative;
			transition: all 0.2s ease-in-out 0s;
		}

		.sidebar-menu ul li a i {
			display: inline-block;
			font-size: 24px;
			line-height: 24px;
			text-align: left;
			vertical-align: middle;
			width: 20px;
			transition: all 0.2s ease-in-out 0s;
		}

		.sidebar-menu ul li.menu-title a i {
			font-size: 16px !important;
			margin-left: 0;
			text-align: left;
			width: auto;
		}

		.sidebar-menu li a>.badge {
			color: #fff;
		}
	</style>
</head>

<body>
	<!-- Main Wrapper -->

	<!-- Header -->
	<?php include("header.php"); ?>
	<!-- /Header -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">مرحباً 
							<?php
							echo $_SESSION['auser'];
							?>!</h3>
						<p></p>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">لوحة التحكم</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-primary">
									<i class="fe fe-users"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM user WHERE utype = 'user'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">المستخدمون المسجلون</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-primary w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-success">
									<i class="fe fe-users"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM user WHERE utype = 'agent'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">الوكلاء</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-danger">
									<i class="fe fe-user"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM user WHERE utype = 'builder'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">البنائون</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-info">
									<i class="fe fe-home"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">الملكيات</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-warning">
									<i class="fe fe-table"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where type = 'apartment'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">عدد الشقق</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-info">
									<i class="fe fe-home"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where type = 'house'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">عدد المنازل</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-secondary">
									<i class="fe fe-building"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where type = 'building'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">عدد المباني</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-primary">
									<i class="fe fe-tablet"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where type = 'flat'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">عدد الفلل</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-success">
									<i class="fe fe-quote-left"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where stype = 'sale'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">معروض للبيع</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="dash-widget-header">
								<span class="dash-widget-icon bg-info">
									<i class="fe fe-quote-right"></i>
								</span>
							</div>
							<div class="dash-widget-info">
								<h3><?php $sql = "SELECT * FROM property where stype = 'rent'";
								$query = $con->query($sql);
								echo "$query->num_rows"; ?></h3>
								<h6 class="text-muted">الإيجارات</h6>
								<div class="progress progress-sm">
									<div class="progress-bar bg-info w-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">نظرة عامة على المبيعات</h4>
						</div>
						<div class="card-body">
							<div id="morrisArea"></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<div class="card card-chart">
						<div class="card-header">
							<h4 class="card-title">حالة الطلب</h4>
						</div>
						<div class="card-body">
							<div id="morrisLine"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Wrapper -->
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>