<?php
$connect=mysqli_connect('127.0.0.1','root','','competition');
$table1 = $_POST['table1'];
$table2 = $_POST['table2'];

$res_classement = $connect -> query("SELECT * FROM ".$table1);
echo "" .$table2. "<br>";

while($row = mysqli_fetch_array($res_classement))
{
	echo "" . $row['TEAM'] . "<br>";
	echo "INSERT INTO ".$table2." (TEAM, PJ, PG, PP, PN, BM, BC, PTS, DIFF) VALUES ('". $row['TEAM']."', '0','0','0','0','0','0','0','0') <br>";
	$connect -> query("INSERT INTO ".$table2." (TEAM, PJ, PG, PP, PN, BM, BC, PTS, DIFF) VALUES ('". $row['TEAM']."', '0','0','0','0','0','0','0','0')");
}
?>