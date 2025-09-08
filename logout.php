<?php
session_start();
session_unset();
session_destroy();
setcookie('teacher_name', '', time() - 3600, '/');
setcookie('student_name', '', time() - 3600, '/');
header('Location: admin_select.php');
exit;
