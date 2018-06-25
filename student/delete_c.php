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

$Cnum = $_GET['Cnum'];
$sql = "delete from course where Cnum = " . $Cnum;
$result = $db->delete($sql);
if ($result) {
    echo "<script>alert('删除成功!');parent.location.href='admin/admin.php';</script>";
} else {
    echo "<script>alert('删除失败!');parent.location.href='admin/admin.php';</script>";
}
?>
