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

$Cnum = $_POST['Cnum'];
$Cname = $_POST['Cname'];

$check_sql = "select count(Cnum) from course where Cnum = '" . $Cnum . "'";
$check_result = $db->select($check_sql);
if ($check_result[0][0] == 0) {
    $sql = "INSERT INTO course" .
        "(Cnum,Cname)" .
        "VALUES" .
        "('$Cnum','$Cname')";
    $result = $db->insert($sql);
    echo $result;
}else{
    echo 2;
}


