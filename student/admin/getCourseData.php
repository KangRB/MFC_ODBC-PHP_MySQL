<?php include "../config/db.inc.php"; ?>
<?php
/**
 * Created by PhpStorm.
 * User: 83579
 * Date: 2018/6/21
 * Time: 11:59
 */

$db = new DBSQL();
$db->_construct();
$sql = "select * from course";
$data = $db->select($sql);
$data = json_encode($data);
echo $data;