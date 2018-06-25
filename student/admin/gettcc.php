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

$sql_t = "select Tnum,Name from teacher";
$sql_c = "select * from course";
$sql_m = "select * from major";
$t_data = $db->select($sql_t);
$c_data = $db->select($sql_c);
$m_data = $db->select($sql_m);

$data = array($t_data,$c_data,$m_data);
//print_r($data);

$data = json_encode($data);
echo $data;