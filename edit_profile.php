<?php
session_start();
require 'db.php';

// تحقق من المستخدم الحالي
if (!isset($_SESSION['teacher_name']) && !isset($_SESSION['student_name'])) {
    header("Location: admin_select.php");
    exit;
}

$role = isset($_SESSION['teacher_name']) ? 'teacher' : 'student';
$name = '';
$subject = '';
$class = '';
$section = '';

if ($role === 'teacher') {
    $name = $_SESSION['teacher_name'];
    // إذا مخزن المادة في السيشن
    $subject = $_SESSION['teacher_subject'] ?? '';
} else {
    $name = $_SESSION['student_name'];
    // إذا مخزن الصف والشعبة في السيشن
    $class = $_SESSION['student_class'] ?? '';
    $section = $_SESSION['student_section'] ?? '';
}

// عند الحفظ
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($role === 'teacher') {
        $name = trim($_POST['name']);
        $subject = trim($_POST['subject']);
        $_SESSION['teacher_name'] = $name;
        $_SESSION['teacher_subject'] = $subject;
        setcookie('teacher_name', $name, time() + (86400*30), "/");
        echo "<p style='color:green;'>تم تحديث بياناتك بنجاح ✅</p>";
    } else {
        $name = trim($_POST['name']);
        $class = trim($_POST['class']);
        $section = trim($_POST['section']);
        $_SESSION['student_name'] = $name;
        $_SESSION['student_class'] = $class;
        $_SESSION['student_section'] = $section;
        setcookie('student_name', $name, time() + (86400*30), "/");
        echo "<p style='color:green;'>تم تحديث بياناتك بنجاح ✅</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<title>تعديل الحساب</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>تعديل الحساب (<?= $role === 'teacher' ? 'أستاذ' : 'طالب' ?>)</h2>
    <form method="post">
        <label>الاسم:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required>

        <?php if ($role === 'teacher'): ?>
            <label>المادة:</label>
            <input type="text" name="subject" value="<?= htmlspecialchars($subject) ?>" required>
        <?php else: ?>
            <label>الصف:</label>
            <input type="text" name="class" value="<?= htmlspecialchars($class) ?>" required>
            
            <label>الشعبة:</label>
            <input type="text" name="section" value="<?= htmlspecialchars($section) ?>" required>
        <?php endif; ?>

        <button type="submit">حفظ التعديلات</button>
    </form>

    <a href="<?= $role === 'teacher' ? 'teacher_panel.php' : 'student_panel.php' ?>">رجوع</a>
</div>
</body>
</html>
