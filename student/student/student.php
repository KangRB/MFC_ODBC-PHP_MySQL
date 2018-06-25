<?PHP
session_start();
if (!isset($_SESSION['type']) || $_SESSION['type'] != 1) {
    echo "<script>window.location.href = \"../index.html\";</script>";
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生页面</title>
    <?php include '../lib/lib.php'; ?>
</head>
<body>
<?php include '../layouts/header.php'; ?>
<div class="container">
    <?php include "./cccTable.html"?>
</div>

</body>
</html>
