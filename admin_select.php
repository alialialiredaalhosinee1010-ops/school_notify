<?php
session_start();

// رموز الدخول (عدّلها لو تحب)
$teacher_code = '3049';
$student_code = '2342';

// تهيئة متغيرات لتفادي تحذيرات undefined
$error = '';
$role = $_POST['role'] ?? '';           // قيمة الاختيار (teacher / student)
$name = trim($_POST['name'] ?? '');    // الاسم المدخل
$password = trim($_POST['password'] ?? ''); // الرمز المدخل

// لو سبق ووُجدت كوكيز (تذكر الجلسة) وبدك تستخدمها لتعبئة الاسم:
$prefill_name = $_COOKIE['teacher_name'] ?? $_COOKIE['student_name'] ?? '';

// معالجة فورم بعد الإرسال
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($role === 'teacher' && $password === $teacher_code) {
        // تسجيل الجلسة ووضع كوكي لمدة 30 يوم
        $_SESSION['teacher_name'] = $name ?: 'معلم';
        setcookie('teacher_name', $_SESSION['teacher_name'], time() + (86400 * 30), "/");
        header('Location: teacher_panel.php');
        exit;
    } elseif ($role === 'student' && $password === $student_code) {
        $_SESSION['student_name'] = $name ?: 'طالب';
        setcookie('student_name', $_SESSION['student_name'], time() + (86400 * 30), "/");
        header('Location: student_register.php');
        exit;
    } else {
        $error = 'الرمز أو الدور غير صحيح. حاول مرة أخرى.';
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>اختيار الدور - منصة التبليغات</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>منصة تبليغات مدرسة عمار بن ياسر</h1>

    <?php if($error): ?>
        <p style="color:#b00020; text-align:center; margin-bottom:12px;"><?=htmlspecialchars($error)?></p>
    <?php endif; ?>

    <form method="post">
        <label>اختر الدور</label>
        <select name="role" required>
            <option value="">-- اختر --</option>
            <option value="teacher" <?= $role === 'teacher' ? 'selected' : '' ?>>أستاذ</option>
            <option value="student" <?= $role === 'student' ? 'selected' : '' ?>>طالب</option>
        </select>

        <label>الاسم</label>
        <input type="text" name="name" placeholder="اسمك" value="<?= htmlspecialchars($name ?: $prefill_name) ?>" required>

        <label>الرمز</label>
        <input type="password" name="password" placeholder="ادخل الرمز" required>

        <button type="submit">دخول</button>
    </form>

    <p style="margin-top:12px; font-size:13px; color:#555">رمز الأستاذ: <b>3049</b> — رمز الطالب: <b>2342</b></p>
</div>
</body>
</html>
