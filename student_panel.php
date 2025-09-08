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
$class = $_SESSION['class'];
$section = $_SESSION['section'];

$stmt = $pdo->prepare("SELECT * FROM notifications WHERE class=? AND section=? ORDER BY id DESC");
$stmt->execute([$class,$section]);
$notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<title>لوحة الطالب</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>مرحباً <?php echo htmlspecialchars($student_name); ?>!</h1>
    <div style="margin-bottom:15px;">
    <a href="edit_profile.php">⚙️ تعديل الحساب</a> | 
    <a href="logout.php">🚪 تسجيل خروج</a>
</div>

    <h2>التبليغات الخاصة بصف <?php echo htmlspecialchars($class); ?> شعبة <?php echo htmlspecialchars($section); ?></h2>

    <?php if(count($notifications)==0): ?>
        <p>لا توجد تبليغات حتى الآن.</p>
    <?php else: ?>
        <?php foreach($notifications as $note): ?>
            <div class="notification-card">
                <div class="notification-header">
                    المادة: <?php echo htmlspecialchars($note['subject']); ?> | شعبة: <?php echo htmlspecialchars($note['section']); ?>
                </div>
                <p><?php echo nl2br(htmlspecialchars($note['message'])); ?></p>
                <?php if($note['image']): ?>
                    <img src="uploads/<?php echo htmlspecialchars($note['image']); ?>" alt="صورة التبليغ">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</body>
</html>
