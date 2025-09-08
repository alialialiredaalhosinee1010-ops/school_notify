<?php
session_start();
require 'db.php';

if(!isset($_SESSION['teacher_name'])){
    header("Location: admin_select.php");
    exit;
}

$id = $_GET['id'] ?? null;
if(!$id) die("تبليغ غير موجود");

// جلب بيانات التبليغ
$stmt = $pdo->prepare("SELECT * FROM notifications WHERE id=?");
$stmt->execute([$id]);
$note = $stmt->fetch();

if(!$note) die("التبليغ غير موجود");

if(isset($_POST['update'])){
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $image_name = $note['image']; // الصورة القديمة

    // لو الأستاذ رفع صورة جديدة
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        if($image_name){ unlink("uploads/" . $image_name); } // حذف القديمة
        $image_name = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image_name");
    }

    $stmt = $pdo->prepare("UPDATE notifications SET subject=?, message=?, class=?, section=?, image=? WHERE id=?");
    $stmt->execute([$subject,$message,$class,$section,$image_name,$id]);

    header("Location: teacher_panel.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<title>تعديل التبليغ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>تعديل التبليغ</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="subject" value="<?php echo htmlspecialchars($note['subject']); ?>" required>
        <textarea name="message" required><?php echo htmlspecialchars($note['message']); ?></textarea>
        <input type="text" name="class" value="<?php echo htmlspecialchars($note['class']); ?>" required>
        <input type="text" name="section" value="<?php echo htmlspecialchars($note['section']); ?>" required>
        <input type="file" name="image">
        <?php if($note['image']): ?>
            <p>الصورة الحالية:</p>
            <img src="uploads/<?php echo htmlspecialchars($note['image']); ?>" alt="الصورة" style="max-width:200px;">
        <?php endif; ?>
        <button type="submit" name="update">تحديث</button>
    </form>
</div>
</body>
</html>
