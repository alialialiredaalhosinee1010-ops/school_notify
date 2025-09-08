<?php
session_start();
if (!isset($_SESSION['teacher_name'])) { header('Location: admin_select.php'); exit; }
require 'db.php';
$id = intval($_GET['id'] ?? 0);
if ($id) {
// حذف الملف إن وجد
$stmt = $pdo->prepare('SELECT image FROM notifications WHERE id=?');
$stmt->execute([$id]);
$r = $stmt->fetch();
if ($r && $r['image'] && file_exists($r['image'])) unlink($r['image']);


$stmt = $pdo->prepare('DELETE FROM notifications WHERE id=?');
$stmt->execute([$id]);
}
header('Location: teacher_panel.php'); exit;