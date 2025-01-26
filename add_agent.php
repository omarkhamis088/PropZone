<?php 
session_start();
include("config.php"); // تأكد من وجود ملف الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // استلام البيانات
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    // معالجة الصورة
    $target_dir = "admin/user/"; // المسار الذي سيتم حفظ الصورة فيه
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // تحقق من نوع الملف
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "الملف ليس صورة.";
        $uploadOk = 0;
    }

    // تحقق من وجود الملف
    if (file_exists($target_file)) {
        echo "عذرًا، الملف موجود مسبقًا.";
        $uploadOk = 0;
    }

    // تحقق من حجم الملف
    if ($_FILES["image"]["size"] > 500000) { // 500KB كحد أقصى
        echo "عذرًا، حجم الملف كبير جدًا.";
        $uploadOk = 0;
    }

    // السماح بأنواع ملفات محددة
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "عذرًا، فقط ملفات JPG و JPEG و PNG و GIF مسموح بها.";
        $uploadOk = 0;
    }

    // تحقق مما إذا كان $uploadOk تم تعيينه إلى 0 بواسطة أحد الأخطاء
    if ($uploadOk == 0) {
        echo "عذرًا، لم يتم تحميل الملف.";
    } else {
        // محاولة رفع الملف
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // إدخال البيانات في قاعدة البيانات
            $query = "INSERT INTO user (name, email, phone, image, utype) VALUES ('$name', '$email', '$phone', '$target_file', 'agent')";
            if (mysqli_query($con, $query)) {
                echo "تم إضافة الوكيل بنجاح.";
                header("Location: agent.php"); // إعادة التوجيه إلى صفحة الوكلاء
                exit();
            } else {
                echo "خطأ: " . mysqli_error($con);
            }
        } else {
            echo "عذرًا، حدث خطأ أثناء رفع الملف.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>إضافة وكيل</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="text-center mt-5">إضافة عميل أو مكتب عقاري</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">اسم الوكيل</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">رقم الهاتف</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="image">صورة الوكيل</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">إضافة</button>
        <a href="agent.php" class="btn btn-secondary">إلغاء</a>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>