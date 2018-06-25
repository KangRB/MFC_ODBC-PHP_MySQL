<?PHP
session_start();
if (!isset($_SESSION['type']) || $_SESSION['type'] != 2) {
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
    <title>教师管理页面</title>
    <?php include '../lib/lib.php'; ?>
</head>
<body>
<?php include '../layouts/header.php'; ?>
<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#student_g" aria-controls="student_g" role="tab" data-toggle="tab">学生成绩管理</a></li>
        <li role="presentation"><a href="#teacher_cc" aria-controls="teacher_cc" role="tab" data-toggle="tab">查看授课</a></li>

        <!-- 隐藏栏目跳转链接-->
        <a href="" aria-controls="" role="tab" data-toggle="tab" id="addsomething"></a>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="student_g">
            <button type="button" id="addccc_btn" class="btn btn-success" style="margin:20px 0 10px;">添加学生成绩</button>
            <?PHP include "cccTable.html"?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="teacher_cc">
            <?PHP include "tccTable.html"?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="addccc"><?php include "./addccc.html" ?></div>
    </div>
</div>

    <script>
        $('#addccc_btn').click(function () {
            $('#addsomething').attr("href", "#addccc").attr("aria-controls", "addccc").click();
        });
    </script>

</body>
</html>

