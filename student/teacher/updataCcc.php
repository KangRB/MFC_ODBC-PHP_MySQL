<?php include_once '../config/db.inc.php' ?>
<?php
$Stunum_tmp = $_POST['Stunum_tmp'];
$Stunum = $_POST['Stunum'];
$Name = $_POST['Name'];
$Core1 = $_POST['Core1'];
$Core2 = $_POST['Core2'];
$Core3 = $_POST['Core3'];
$db = new DBSQL();
$db->_construct();
$sql = "UPDATE ccc SET Stunum='" . $Stunum . "',Name='" . $Name . "',Core1='" . $Core1 . "',Core2='" . $Core2 . "',Core3='" . $Core3 . "'Where Stunum='" . $Stunum_tmp . "'";
$result = $db->update($sql);
echo $result;


?>
