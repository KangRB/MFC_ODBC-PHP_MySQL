<?php include "../config/db.inc.php";
session_start();
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/21
 * Time: 11:59
 */
$name = $_SESSION['name'];

$db = new DBSQL();
$db->_construct();
$sql = "select * from ccc where Name = '" . $name . "'";
$data = $db->select($sql);
$data = json_encode($data);
echo $data;