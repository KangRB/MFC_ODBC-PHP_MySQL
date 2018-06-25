<?php include_once '../config/db.inc.php' ?>
<?php
$Tnum_tmp = $_POST['Tnum_tmp'];
$Tnum = $_POST['Tnum'];
$Name = $_POST['Name'];
$Pwd = $_POST['Pwd'];
$db = new DBSQL();
$db->_construct();
$sql = "UPDATE teacher SET Tnum='" . $Tnum . "',Name='" . $Name . "',Pwd='" . $Pwd . "'Where Tnum='" . $Tnum_tmp . "'";
$result = $db->update($sql);
echo $result;


?>
