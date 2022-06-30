<?php include 'cnstParams.php';?>

<?php

$res_classement = $connect -> query("SELECT * FROM ".$tableName."");

echo "<h1>classement 2021_2022</h1>";
echo "<table id='teams' align='center'>";
echo "<tr>";
echo "    <th>Team</th>";
echo "    <th>PJ</th>";
echo "    <th>PG</th>";
echo "    <th>PP</th>";
echo "    <th>PN</th>";
echo "    <th>BM</th>";
echo "    <th>BC</th>";
echo "    <th>PTS</th>";
echo "    <th>-/+</th>";
echo "  </tr>";

while($row = mysqli_fetch_array($res_classement))
{

echo "<tr>";
echo "<td>" . $row['TEAM'] . "</td>";
echo "<td>" . $row['PJ'] . "</td>";
echo "<td>" . $row['PG'] . "</td>";
echo "<td>" . $row['PP'] . "</td>";
echo "<td>" . $row['PN'] . "</td>";
echo "<td>" . $row['BM'] . "</td>";
echo "<td>" . $row['BC'] . "</td>";
echo "<td>" . $row['PTS'] . "</td>";
echo "<td>" . $row['DIFF'] . "</td>";

echo "</tr>";
}
?>