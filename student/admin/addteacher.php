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

$Tnum = $_POST['Tnum'];
$Name = $_POST['Name_t'];
$Pwd = $_POST['Pwd_t'];

$check_sql = "select count(Tnum) from teacher where Tnum = '" . $Tnum . "'";
$check_result = $db->select($check_sql);
if ($check_result[0][0] == 0) {
    $sql = "INSERT INTO teacher" .
        "(Tnum,Name,Pwd)" .
        "VALUES" .
        "('$Tnum','$Name','$Pwd')";
    $result = $db->insert($sql);
    echo $result;
} else {
    echo 2;
}


