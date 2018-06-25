<?php include_once '../config/db.inc.php' ?>
<?php
$Stunum_tmp = $_POST['Stunum_tmp'];
$Stunum = $_POST['Stunum'];
$Name = $_POST['Name'];
$Pwd = $_POST['Pwd'];
$db = new DBSQL();
$db->_construct();
$sql = "UPDATE student SET Stunum='" . $Stunum . "',Name='" . $Name . "',Pwd='" . $Pwd . "'Where Stunum='" . $Stunum_tmp . "'";
$result = $db->update($sql);
echo $result;


?>
