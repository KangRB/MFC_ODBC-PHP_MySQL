<?PHP

session_start();
if (!isset($_SESSION['type']) || $_SESSION['type'] != 3) {
    echo "
<script>window.location.href = \"../index.html\";</script>";
}
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理</title>
    <?php include '../lib/lib.php'; ?>
</head>
<body>
<?php include '../layouts/header.php'; ?>

<div class="container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#student" aria-controls="student" role="tab" data-toggle="tab">学生表管理</a>
        </li>
        <li role="presentation"><a href="#teacher" aria-controls="teacher" role="tab" data-toggle="tab">教师管理</a></li>
        <li role="presentation"><a href="#course" aria-controls="course" role="tab" data-toggle="tab">课程管理</a></li>
        <li role="presentation"><a href="#major" aria-controls="major" role="tab" data-toggle="tab">专业管理</a></li>
        <li role="presentation"><a href="#tcc" aria-controls="tcc" role="tab" data-toggle="tab">授课管理</a></li>


        <!-- 隐藏栏目跳转链接-->
        <a href="" aria-controls="" role="tab" data-toggle="tab" id="addsomething"></a>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="student">
            <button type="button" id="addstudent_btn" class="btn btn-success" style="margin:20px 0 10px;">添加学生信息
            </button>
            <?php include './studentTable.html' ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="teacher">
            <button type="button" id="addteacher_btn" class="btn btn-success" style="margin:20px 0 10px;">添加教师信息
            </button>
            <?php include './teacherTable.html' ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="course">
            <button type="button" id="addcourse_btn" class="btn btn-success" style="margin:20px 0 10px;">添加课程信息</button>
            <?php include './courseTable.html' ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="major">
            <button type="button" id="addmajor_btn" class="btn btn-success" style="margin:20px 0 10px;">添加专业信息</button>
            <?php include './majorTable.html' ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="tcc">
            <button type="button" id="addtcc_btn" class="btn btn-success" style="margin:20px 0 10px;">添加授课信息</button>
            <?php include './tccTable.html' ?>
        </div>


        <!--隐藏栏目-->
        <!--        添加学生信息-->
        <div role="tabpanel" class="tab-pane fade" id="addstudent"><?php include "./addstudent.html" ?></div>
        <!--        添加教师信息-->
        <div role="tabpanel" class="tab-pane fade" id="addteacher"><?php include "./addteacher.html" ?></div>
        <!--        添加课程信息-->
        <div role="tabpanel" class="tab-pane fade" id="addcourse"><?php include "./addcourse.html" ?></div>
        <!--        添加专业信息-->
        <div role="tabpanel" class="tab-pane fade" id="addmajor"><?php include "./addmajor.html" ?></div>
        <!--        添加授课信息-->
        <div role="tabpanel" class="tab-pane fade" id="addtcc"><?php include "./addtcc.html" ?></div>

    </div>

</div>
</body>
</html>
<script>
    $('#addstudent_btn').click(function () {
        $('#addsomething').attr("href", "#addstudent").attr("aria-controls", "addstudent").click();
    });
    $('#addteacher_btn').click(function () {
        $('#addsomething').attr("href", "#addteacher").attr("aria-controls", "addteacher").click();
    });
    $('#addcourse_btn').click(function () {
        $('#addsomething').attr("href", "#addcourse").attr("aria-controls", "addcourse").click();
    });
    $('#addmajor_btn').click(function () {
        $('#addsomething').attr("href", "#addmajor").attr("aria-controls", "addmajor").click();
    });
    $('#addtcc_btn').click(function () {
        $('#addsomething').attr("href", "#addtcc").attr("aria-controls", "addtcc").click();
    });

</script>