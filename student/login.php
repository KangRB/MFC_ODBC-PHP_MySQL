<?php
session_start();
include("config/db.inc.php");

$name = $_POST['username'];
$pwd = $_POST['password'];
$usertype = $_POST['usertypeG'];


$db = new DBSQL();
$db->_construct();

if ($name == null || $pwd == null) {
    echo 5;
} else {
    switch ($usertype) {
        // 管理员登陆
        case 3:
            $sql = "select count(*) from admin where Uname = '" . $name . "' and Pwd = '" . $pwd . "'";
            $data = $db->select($sql);
            if ($data != false) {
                if ($data[0][0] == 1) {
                    echo 3;
                    $_SESSION['type'] = 3;
                    $_SESSION['name'] = $name;
                } else {
                    echo 0;
                }
            }
            break;
        case 2:
            // 教师登录
            $sql = "select count(*) from teacher where Tnum = '" . $name . "' and Pwd = '" . $pwd . "'";
            $data = $db->select($sql);
            if ($data != false) {
                if ($data[0][0] == 1) {
                    $_SESSION['type'] = 2;
                    // 获取用户名
                    $sql_1 = "select Name from teacher where Tnum = '" . $name . "'";
                    $data_name = $db->select($sql_1);
                    $_SESSION['name'] = $data_name[0][0];
                    echo 2;
                } else {
                    echo 0;
                }
            }
            break;
        case 1:
            // 学生登录
            $sql = "select count(*) from student where Stunum = '" . $name . "' and Pwd = '" . $pwd . "'";
            $data = $db->select($sql);
            if ($data != false) {
                if ($data[0][0] == 1) {
                    $_SESSION['type'] = 1;
                    $sql_1 = "select Name from student where Stunum = '" . $name . "'";
                    $data_name = $db->select($sql_1);
                    $_SESSION['name'] = $data_name[0][0];
                    echo 1;
                } else {
                    echo 0;
                }
            }
            break;
        default:
            echo 4;
    }
}
?>


