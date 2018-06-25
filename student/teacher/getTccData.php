<?php include "../config/db.inc.php";
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/21
 * Time: 11:59
 */

$db = new DBSQL();
$db->_construct();
$newdata = array();

$sql = "select * from tcc";
$data = $db->select($sql);


for ($i = 0; $i < count($data); $i++) {
    $sql1 = "select Name from teacher where Tnum = '" . $data[$i][0] . "'";
    $newdata[$i][0] = $db->select($sql1)[0][0];
    $sql2 = "select Cname from course where Cnum = '" . $data[$i][1] . "'";
    $newdata[$i][1] = $db->select($sql2)[0][0];
    $sql3 = "select Mname from major where Mnum = '" . $data[$i][2] . "'";
    $newdata[$i][2] = $db->select($sql3)[0][0];
}

$newdata = json_encode($newdata);

echo $newdata;




