<?php
session_start();
require 'db.php';

if(!isset($_SESSION['student_name']) && isset($_COOKIE['student_name'])){
    $_SESSION['student_name'] = $_COOKIE['student_name'];
}

if(!isset($_SESSION['student_name'])){
    header("Location: admin_select.php");
    exit;
}

$student_name = $_SESSION['student_name'];

if(isset($_POST['register'])){
    $_SESSION['class'] = $_POST['class'];
    $_SESSION['section'] = $_POST['section'];
    header("Location: student_panel.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<title>تسجيل الطالب</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>تسجيل بياناتك <?php echo htmlspecialchars($student_name); ?></h1>
    <form method="post">
        <input type="text" name="class" placeholder="الصف" required>
        <input type="text" name="section" placeholder="الشعبة" required>
        <button type="submit" name="register">تسجيل</button>
    </form>
</div>
</body>
</html>
