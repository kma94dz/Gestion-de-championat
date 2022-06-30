<?php include 'cnstParams.php';?>
<?php
$res_classement = $connect -> query("SELECT TEAM FROM ".$tableName."");
$R=1;
while($row = mysqli_fetch_array($res_classement))
{
$team1 = $_POST["team".$R];
$PJ1 = $_POST['PJ'.$R];
$PG1 = $_POST['PG'.$R];
$PP1 = $_POST['PP'.$R];
$PN1 = $_POST['PN'.$R];
$BM1 = $_POST['BM'.$R];
$BC1 = $_POST['BC'.$R];
$PTS1 = $_POST['PTS'.$R];
$DIFF1 = $_POST['DIFF'.$R];

$connect -> query("UPDATE ".$tableName." SET PJ=".$PJ1.", BM=".$BM1.", BC=".$BC1.", PG=".$PG1.", PP=".$PP1.", PN=".$PN1.", DIFF=".$DIFF1.", PTS=".$PTS1."  WHERE TEAM='".$team1."'");
$R=$R+1;
}
echo '<script type="text/javascript">
           window.location = "page_editTableClassement.php"
      </script>';
?>