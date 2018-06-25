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

$Mnum = $_POST['Mnum'];
$Mname = $_POST['Mname'];

$check_sql = "select count(Mnum) from major where Mnum = '" . $Mnum . "'";
$check_result = $db->select($check_sql);
if ($check_result[0][0] == 0) {
    $sql = "INSERT INTO major" .
        "(Mnum,Mname)" .
        "VALUES" .
        "('$Mnum','$Mname')";
    $result = $db->insert($sql);
    echo $result;
}else{
    echo 2;
}


