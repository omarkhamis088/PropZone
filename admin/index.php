<?php 
session_start();
include("config.php");
$error = "";
$remainingTime = 0;

// الإعدادات الخاصة بعدد المحاولات والفترة الزمنية
$maxAttempts = 4; // عدد المحاولات المسموح بها
$lockoutTime = 60; // وقت الانتظار بالثواني

// التحقق من وجود الجلسة للمحاولات
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['last_attempt_time'] = time();
}

// التحقق من انتهاء فترة الحظر
if ($_SESSION['login_attempts'] >= $maxAttempts) {
    $timeSinceLastAttempt = time() - $_SESSION['last_attempt_time'];
    if ($timeSinceLastAttempt >= $lockoutTime) {
        $_SESSION['login_attempts'] = 0; // إعادة تعيين المحاولات بعد انتهاء الحظر
        $_SESSION['last_attempt_time'] = time();
    } else {
        $remainingTime = $lockoutTime - $timeSinceLastAttempt;
    }
}

if (isset($_POST['login'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    $pass = sha1($pass);

    if (!empty($user) && !empty($pass)) {
        // التحقق من تجاوز عدد المحاولات المسموح بها
        if ($_SESSION['login_attempts'] >= $maxAttempts) {
            $error = "تم تجاوز عدد المحاولات المسموح بها. يرجى الانتظار.";
        } else {
            $query = "SELECT auser, apass FROM admin WHERE auser='$user' AND apass='$pass'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $num_row = mysqli_num_rows($result);

            if ($num_row == 1) {
                $_SESSION['auser'] = $user;
                $_SESSION['login_attempts'] = 0; // إعادة تعيين المحاولات بعد تسجيل الدخول بنجاح
                header("Location: dashboard.php");
            } else {
                $_SESSION['login_attempts']++;
                $_SESSION['last_attempt_time'] = time();
                $remainingAttempts = $maxAttempts - $_SESSION['login_attempts'];
                if ($remainingAttempts > 0) {
                    $error = "* اسم المستخدم أو كلمة المرور غير صحيحة. تبقى لديك $remainingAttempts محاولات.";
                } else {
                    $remainingTime = $lockoutTime; // ضبط عداد الانتظار
                    $error = "تم تجاوز عدد المحاولات المسموح بها. يرجى الانتظار.";
                }
            }
        }
    } else {
        $error = "* يرجى ملء جميع الحقول!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>RE Admin - Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        // عداد الانتظار
        document.addEventListener("DOMContentLoaded", () => {
            let remainingTime = <?php echo $remainingTime; ?>;
            if (remainingTime > 0) {
                const countdownElement = document.getElementById('countdown');
                const interval = setInterval(() => {
                    if (remainingTime > 0) {
                        countdownElement.innerText = `يرجى الانتظار ${remainingTime--} ثانية.`;
                    } else {
                        clearInterval(interval);
                        location.reload(); // إعادة تحميل الصفحة بعد انتهاء العداد
                    }
                }, 1000);
            }
        });
    </script>
</head>
<body>
    <div class="page-wrappers login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>لوحة تسجيل الدخول للمسؤول</h1>
                            <p class="account-subtitle">الوصول إلى لوحة التحكم الخاصة بنا</p>
                            <p style="color:red;"><?php echo $error; ?></p>
                            <?php if ($remainingTime > 0): ?>
                                <p id="countdown" style="color:blue; font-weight:bold;">يرجى الانتظار...</p>
                            <?php else: ?>
                                <form method="post">
                                    <div class="form-group">
                                        <input class="form-control" name="user" type="text" placeholder="اسم المستخدم">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="pass" placeholder="كلمة المرور">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" name="login" type="submit">تسجيل الدخول</button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>