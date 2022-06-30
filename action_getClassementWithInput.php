<?php include 'cnstParams.php';?>

<?php

$res_classement = $connect -> query("SELECT * FROM ".$tableName."");

echo "<form class='w3-container w3-card-4' method = 'post' action='/classement/action_UpdateTable.php'>";
echo "<h1>classement 2021_2022</h1>";
echo "<table id='teams' align='center'>";
echo "<tr>";
echo "    <th>Team</th>";
echo "    <th>J</th>";
echo "    <th>PG</th>";
echo "    <th>PP</th>";
echo "    <th>PN</th>";
echo "    <th>BM</th>";
echo "    <th>BC</th>";
echo "    <th>PTS</th>";
echo "    <th>-/+</th>";
echo "    <th>Action</th>";
echo "  </tr>";
$R = 1;
while($row = mysqli_fetch_array($res_classement))
{

echo "<tr>";
echo "<td>     <input class='w3-input w3-border' name='team".$R."' type='text' value='". $row['TEAM'] ."' readonly> </td>";
echo "<td>     <input class='w3-input w3-border' name='PJ".$R."' type='number' value='". $row['PJ']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='PG".$R."' type='number' value='". $row['PG'] ."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='PP".$R."' type='number' value='". $row['PP']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='PN".$R."' type='number' value='". $row['PN']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='BM".$R."' type='number' value='". $row['BM']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='BC".$R."' type='number' value='". $row['BC']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='PTS".$R."' type='number' value='". $row['PTS']."'> </td>";
echo "<td>     <input class='w3-input w3-border' name='DIFF".$R."' type='number' value='". $row['DIFF']."'> </td>";
echo "<td> <button class='w3-btn w3-blue'>Register</button> </td>";

echo "</tr>";
$R = $R +1;
}
echo "</form>"
?>