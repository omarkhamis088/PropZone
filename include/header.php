<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
<style>
    .btn {
        background-color: #007bff; /* لون أزرق */
        border-color: #007bff; /* تحديد لون الحدود */
    }

    .btn:hover {
        background-color: #0056b3; /* لون أزرق أغمق عند التحويم */
        border-color: #0056b3; /* لون الحدود عند التحويم */
    }
</style>
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"> 775144511 967+ <i class="fas fa-phone-alt text-success mr-1"></i></a></li>
                                <li><a href="#"> omar@realestatest.com <i class="fas fa-envelope text-success mr-1"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">تسجيل الخروج</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">تسجيل الدخول</a>&nbsp;&nbsp;
								
								 </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> تسجيل</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">الرئيسية</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">عنا</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">تواصل</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">العقارات</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="agent.php">مكاتب العقار</a> </li>

										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php">الملف الشخصي</a> </li>
												<!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
												<li class="nav-item"> <a class="nav-link" href="feature.php">عقارك</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">تسجيل الخروج</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php">تسجيل الدخول/تسجيل</a> </li>
										<?php } ?>
										
                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">إرسال عقار</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>