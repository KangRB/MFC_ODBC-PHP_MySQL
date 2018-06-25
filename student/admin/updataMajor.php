<?php include_once '../config/db.inc.php' ?>
<?php
$Mnum_tmp = $_POST['Mnum_tmp'];
$Mnum = $_POST['Mnum'];
$Mname = $_POST['Mname'];

$db = new DBSQL();
$db->_construct();
$sql = "UPDATE major SET Mnum='" . $Mnum . "',Mname='" . $Mname . "'Where Mnum='" . $Mnum_tmp . "'";
$result = $db->update($sql);
echo $result;


?>
