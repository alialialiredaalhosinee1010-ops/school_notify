<?php
session_start();
require 'db.php';

// إذا الجلسة مش موجودة بس الكوكي موجود
if(!isset($_SESSION['teacher_name']) && isset($_COOKIE['teacher_name'])){
    $_SESSION['teacher_name'] = $_COOKIE['teacher_name'];
}

if(!isset($_SESSION['teacher_name'])){
    header("Location: admin_select.php");
    exit;
}


$teacher_name = $_SESSION['teacher_name'];

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// حذف التبليغ
if(isset($_POST['delete_id'])){
    $delete_id = $_POST['delete_id'];

    // حذف الصورة من المجلد إذا موجودة
    $stmt = $pdo->prepare("SELECT image FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
    $note = $stmt->fetch();
    if($note && $note['image']){
        unlink("uploads/" . $note['image']);
    }

    // حذف التبليغ من القاعدة
    $stmt = $pdo->prepare("DELETE FROM notifications WHERE id=?");
    $stmt->execute([$delete_id]);
}

// جلب التبليغات
$stmt = $pdo->query("SELECT * FROM notifications ORDER BY id DESC");
$notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<title>لوحة الأستاذ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>مرحبا <?php echo htmlspecialchars($teacher_name); ?></h1>
    <div style="margin-bottom:15px;">
    <a href="edit_profile.php">⚙️ تعديل الحساب</a> | 
    <a href="logout.php">🚪 تسجيل خروج</a>
</div>

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="subject" placeholder="المادة" required>
        <textarea name="message" placeholder="نص التبليغ" required></textarea>
        <input type="text" name="class" placeholder="الصف" required>
        <input type="text" name="section" placeholder="الشعبة" required>
        <input type="file" name="image">
        <button type="submit" name="send">إرسال التبليغ</button>
    </form>

    <h2>التبليغات</h2>
    <?php foreach($notifications as $note): ?>
    <div class="notification-card">
        <div class="notification-header">
            المادة: <?php echo htmlspecialchars($note['subject']); ?> | شعبة: <?php echo htmlspecialchars($note['section']); ?>
        </div>
        <p><?php echo nl2br(htmlspecialchars($note['message'])); ?></p>
        <?php if($note['image']): ?>
            <img src="uploads/<?php echo htmlspecialchars($note['image']); ?>" alt="صورة التبليغ">
        <?php endif; ?>

        <!-- أزرار التعديل والحذف -->
        <form method="post" style="display:inline;">
            <input type="hidden" name="delete_id" value="<?php echo $note['id']; ?>">
            <button type="submit" name="delete">حذف</button>
        </form>

        <form method="get" action="edit_notification.php" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
            <button type="submit">تعديل</button>
        </form>
    </div>
<?php endforeach; ?>

</div>
</body>
</html>
