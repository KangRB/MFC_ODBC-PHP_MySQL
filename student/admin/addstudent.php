<?php
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/21
 * Time: 15:56
 */
include "../config/db.inc.php";
$db = new DBSQL();
$db->_construct();

$Stunum = $_POST['Stunum'];
$Name = $_POST['Name'];
$Pwd = $_POST['Pwd'];

$check_sql = "select count(Stunum) from student where Stunum = '" . $Stunum . "'";
$check_result = $db->select($check_sql);
if ($check_result[0][0] == 0) {
    $sql = "INSERT INTO student" .
        "(Stunum,Name,Pwd)" .
        "VALUES" .
        "('$Stunum','$Name','$Pwd')";
    $result = $db->insert($sql);
    echo $result;
}else{
    echo 2;
}


