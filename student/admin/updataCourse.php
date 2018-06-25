<?php include_once '../config/db.inc.php' ?>
<?php
$Cnum_tmp = $_POST['Cnum_tmp'];
$Cnum = $_POST['Cnum'];
$Cname = $_POST['Cname'];

$db = new DBSQL();
$db->_construct();
$sql = "UPDATE course SET Cnum='" . $Cnum . "',Cname='" . $Cname . "'Where Cnum='" . $Cnum_tmp . "'";
$result = $db->update($sql);
echo $result;


?>
