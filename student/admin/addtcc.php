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
$Cnum = $_POST['Cnum'];
$Mnum = $_POST['Mnum'];

$check_sql = "select count(*) from tcc where Tnum = '" . $Tnum . "' and Cnum = '". $Cnum."' and Mnum = '". $Mnum ."'";
$check_result = $db->select($check_sql);
if ($check_result[0][0] == 0) {
    $sql = "INSERT INTO tcc" .
        "(Tnum,Cnum,Mnum)" .
        "VALUES" .
        "('$Tnum','$Cnum','$Mnum')";
    $result = $db->insert($sql);
    echo $result;
}else{
    echo 2;
}


