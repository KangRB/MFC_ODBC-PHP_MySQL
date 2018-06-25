<?php include_once '../config/db.inc.php' ?>
<?php
$Tname = $_POST['Tname_tmp'];
$Cname = $_POST['Cname_tmp'];
$Mname = $_POST['Mname_tmp'];
$Tnum = $_POST['Tnum'];
$Cnum = $_POST['Cnum'];
$Mnum = $_POST['Mnum'];


$db = new DBSQL();
$db->_construct();

$sql_s = "select Tnum from teacher where Name = '" . $Tname . "'";
$sql_c = "select Cnum from course where Cname = '" . $Cname . "'";
$sql_m = "select Mnum from major where Mname = '" . $Mname . "'";
$result_s = $db->select($sql_s);
$result_c = $db->select($sql_c);
$result_m = $db->select($sql_m);


$sql = "UPDATE tcc SET Tnum='" . $Tnum . "',Cnum='" . $Cnum . "',Mnum='" . $Mnum . "' where Tnum = '" . $result_s[0][0] . "' and Cnum = '" . $result_c[0][0] . "' and Mnum = '" . $result_m[0][0] . "'";
$result = $db->update($sql);
echo $result;

?>
