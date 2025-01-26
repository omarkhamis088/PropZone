<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}
?>
<div class="header"  dir="rtl">
	<!-- Logo -->
	<div class="header-left">
		<a href="dashboard.php" class="logo">
			<img src="assets/img/rsadmin.png" alt="Logo">
		</a>
		<a href="dashboard.php" class="logo logo-small">
			<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
		</a>
	</div>
	<!-- /Logo -->

	<a href="javascript:void(0);" id="toggle_btn">
		<i class="fe fe-text-align-left"></i>
	</a>
	<!-- Mobile Menu Toggle -->
	<a class="mobile_btn" id="mobile_btn">
		<i class="fa fa-bars"></i>
	</a>
	<!-- /Mobile Menu Toggle -->

	<!-- Header Right Menu -->
	<ul class="nav user-menu">
		<!-- User Menu -->
		<!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"><?php echo $_SESSION['auser']; ?></h4> -->
		<li class="nav-item dropdown app-dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31"
						alt="Ryan Taylor"></span>
			</a>
			<div class="dropdown-menu">
				<div class="user-header">
					<div class="avatar avatar-sm">
						<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
					</div>
					<div class="user-text">
						<h6><?php echo $_SESSION['auser']; ?></h6>
						<p class="text-muted mb-0">الإدارة</p>
					</div>
				</div>
				<a class="dropdown-item" href="profile.php">الملف الشخصي</a>
				<a class="dropdown-item" href="logout.php">تسجيل الخروج</a>
			</div>
		</li>
		<!-- /User Menu -->
	</ul>
	<!-- /Header Right Menu -->
</div>

<!-- header --->
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title">
					<span>Main</span>
				</li>
				<li>
					<a href="dashboard.php"><i class="fe fe-home"></i> <span>لوحة التحكم</span></a>
				</li>
				<!-- <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li> -->
				<li class="menu-title">
					<span>كل المستخدمون</span>
				</li>

				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> كل المستخدمون </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="adminlist.php"> المدير </a></li>
						<li><a href="userlist.php"> المستخدمون </a></li>
						<li><a href="useragent.php"> الوكلاء </a></li>
						<li><a href="userbuilder.php"> البنائون </a></li>
					</ul>
				</li>

				<li class="menu-title">
					<span>المحافضة & المدينة</span>
				</li>

				<li class="submenu">
					<a href="#"><i class="fe fe-location"></i> <span>المحافضة & المدينة</span> <span
							class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="stateadd.php"> المحافضة </a></li>
						<li><a href="cityadd.php"> المديرية </a></li>
					</ul>
				</li>
				<li class="menu-title">
					<span>إدارة الممتلكات</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="fe fe-map"></i> <span> ملكية</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="propertyadd.php"> اضافة ملكية</a></li>
						<li><a href="propertyview.php"> عرض ملكيات </a></li>
					</ul>
				</li>
				<li class="menu-title">
					<span>استفسار</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="fe fe-comment"></i> <span> الاتصال، ردود الفعل </span> <span
							class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="contactview.php"> التواصل </a></li>
						<li><a href="feedbackview.php"> ردود الفعل </a></li>
					</ul>
				</li>
				<li class="menu-title">
					<span>حول</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="fe fe-browser"></i> <span>حول الصفحة </span> <span
							class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a href="aboutadd.php"> إضافة محتوى "حول" </a></li>
						<li><a href="aboutview.php"> عرض حول </a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->