<?php
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/21
 * Time: 21:32
 */
require_once "config/db.inc.php";
header("Content-Type:text/html;charset=utf-8");
$db = new DBSQL();
$db->_construct();

$Tname = $_GET['Tname'];
$Cname = $_GET['Cname'];
$Mname = $_GET['Mname'];

$sql_s = "select Tnum from teacher where Name = '". $Tname ."'";
$sql_c = "select Cnum from course where Cname = '". $Cname ."'";
$sql_m = "select Mnum from major where Mname = '". $Mname ."'";
$result_s = $db->select($sql_s);
$result_c = $db->select($sql_c);
$result_m = $db->select($sql_m);

$sql = "delete from tcc where Tnum = '" . $result_s[0][0]."' and Cnum = '". $result_c[0][0]."' and Mnum = '". $result_m[0][0] ."'";
$result = $db->delete($sql);
if ($result) {
    echo "<script>alert('删除成功!');parent.location.href='admin/admin.php';</script>";
} else {
    echo "<script>alert('删除失败!');parent.location.href='admin/admin.php';</script>";
}
?>