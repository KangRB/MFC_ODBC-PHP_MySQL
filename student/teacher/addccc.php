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
$Core1 = $_POST['Core1'];
$Core2 = $_POST['Core2'];
$Core3 = $_POST['Core3'];

$check_sql = "select count(Stunum) from ccc where Stunum = '" . $Stunum . "'";
$check_sql2 = "select count(Stunum) from student where Stunum = '" . $Stunum . "'";
$check_result = $db->select($check_sql);
$check_result2 = $db->select($check_sql2);
if($check_result2[0][0] == 0){
    echo 5;
}else{
    if ($check_result[0][0] == 0) {
        $sql = "INSERT INTO ccc" .
            "(Stunum,Name,Core1,Core2,Core3)" .
            "VALUES" .
            "('$Stunum','$Name','$Core1','$Core2','$Core3')";
        $result = $db->insert($sql);
        echo $result;
    }else{
        echo 2;
    }
}



