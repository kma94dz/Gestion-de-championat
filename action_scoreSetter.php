<?php include 'cnstParams.php';?>

<?php

$team1 = $_POST['team1'];
$team2 = $_POST['team2'];
$score1 = $_POST['score1'];
$score2 = $_POST['score2'];

$PJ1 = $connect -> query("SELECT PJ FROM ".$tableName." WHERE TEAM='".$team1."'");
$PG1 = $connect -> query("SELECT PG FROM ".$tableName." WHERE TEAM='".$team1."'");
$PP1 = $connect -> query("SELECT PP FROM ".$tableName." WHERE TEAM='".$team1."'");
$PN1 = $connect -> query("SELECT PN FROM ".$tableName." WHERE TEAM='".$team1."'");
$BM1 = $connect -> query("SELECT BM FROM ".$tableName." WHERE TEAM='".$team1."'");
$BC1 = $connect -> query("SELECT BC FROM ".$tableName." WHERE TEAM='".$team1."'");
$PTS1 = $connect -> query("SELECT PTS FROM ".$tableName." WHERE TEAM='".$team1."'");
$DIFF1 = $connect -> query("SELECT DIFF FROM ".$tableName." WHERE TEAM='".$team1."'");

$PJ2 = $connect -> query("SELECT PJ FROM ".$tableName." WHERE TEAM='".$team2."'");
$PG2 = $connect -> query("SELECT PG FROM ".$tableName." WHERE TEAM='".$team2."'");
$PP2 = $connect -> query("SELECT PP FROM ".$tableName." WHERE TEAM='".$team2."'");
$PN2 = $connect -> query("SELECT PN FROM ".$tableName." WHERE TEAM='".$team2."'");
$BM2 = $connect -> query("SELECT BM FROM ".$tableName." WHERE TEAM='".$team2."'");
$BC2 = $connect -> query("SELECT BC FROM ".$tableName." WHERE TEAM='".$team2."'");
$PTS2 = $connect -> query("SELECT PTS FROM ".$tableName." WHERE TEAM='".$team2."'");
$DIFF2 = $connect -> query("SELECT DIFF FROM ".$tableName." WHERE TEAM='".$team2."'");

$row = mysqli_fetch_array($PJ1);
$nPJ1 = $row['PJ'] + 1;

$row = mysqli_fetch_array($BM1);
$nBM1 = $row['BM'] + intval( $score1 );

$row = mysqli_fetch_array($BC1);
$nBC1 = $row['BC'] + intval( $score2 );

$row = mysqli_fetch_array($PG1);
$nPG1 =$row['PG'];
if($score1 > $score2){
$nPG1 = $nPG1 + 1;
}

$row = mysqli_fetch_array($PP1);
$nPP1 =$row['PP'];
if($score1 < $score2){
$nPP1 = $nPP1 + 1;
}

$row = mysqli_fetch_array($PN1);
$nPN1 =$row['PN'];
if($score1 == $score2){
$nPN1 = $nPN1 + 1;
}

$row = mysqli_fetch_array($DIFF1);
$nDIFF1 =$row['DIFF'];
$nDIFF1 = ($nBM1 - $nBC1) ;

$row = mysqli_fetch_array($PTS1);
$nPTS1 =$row['PTS'];
$nPTS1 =($nPG1*3)+($nPN1);





$row = mysqli_fetch_array($PJ2);
$nPJ2 = $row['PJ'] + 1;

$row = mysqli_fetch_array($BM2);
$nBM2 = $row['BM'] + intval( $score2 );

$row = mysqli_fetch_array($BC2);
$nBC2 = $row['BC'] + intval( $score1 );

$row = mysqli_fetch_array($PG2);
$nPG2 =$row['PG'];
if($score2 > $score1){
$nPG2 = $nPG2 + 1;
}

$row = mysqli_fetch_array($PP2);
$nPP2 =$row['PP'];
if($score2 < $score1){
$nPP2 = $nPP2 + 1;
}

$row = mysqli_fetch_array($PN2);
$nPN2 =$row['PN'];
if($score1 == $score2){
$nPN2 = $nPN2 + 1;
}

$row = mysqli_fetch_array($DIFF2);
$nDIFF2 =$row['DIFF'];
$nDIFF2 = ($nBM2 - $nBC2) ;

$row = mysqli_fetch_array($PTS2);
$nPTS2 =($nPG2*3)+($nPN2);


$connect -> query("UPDATE ".$tableName." SET PJ=".$nPJ1.", BM=".$nBM1.", BC=".$nBC1.", PG=".$nPG1.", PP=".$nPP1.", PN=".$nPN1.", DIFF=".$nDIFF1.", PTS=".$nPTS1."  WHERE TEAM='".$team1."'");
$connect -> query("UPDATE ".$tableName." SET PJ=".$nPJ2.", BM=".$nBM2.", BC=".$nBC2.", PG=".$nPG2.", PP=".$nPP2.", PN=".$nPN2.", DIFF=".$nDIFF2.", PTS=".$nPTS2."  WHERE TEAM='".$team2."'");
echo '<script type="text/javascript">
           window.location = "page_setMatchesResults.php"
      </script>';
?>