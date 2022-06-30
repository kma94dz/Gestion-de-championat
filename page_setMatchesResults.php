<!DOCTYPE html>
<html>
<title>MATCH RESULT INPUT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<form class="w3-container w3-card-4" method = 'post' action="/classement/action_scoreSetter.php">
  <h2 class="w3-text-blue">MATCH RESULTS</h2>
  <p>ENTER THE NAME AND SCORE OF EACH TEAM AND THEN CLICK REGISTER</p>
  
  <?php
$connect=mysqli_connect('127.0.0.1','root','','competition');
$res_classement = $connect -> query("SELECT TEAM FROM classement2021_2022");
echo "<select name='team1' class='w3-input w3-border'>";
while($row = mysqli_fetch_array($res_classement))
{
	echo " <option value='".$row['TEAM']."'> ".$row['TEAM']."</option> ";
}
echo " </select>";
?>
  
  <p>      
  <label class="w3-text-blue"><b>SCORE</b></label>
  <input class="w3-input w3-border" name="score1" type="number">
  </p>
  <p>      
  <label class="w3-text-blue"><b>VS</b></label>
  </p>

  <?php
$connect=mysqli_connect('127.0.0.1','root','','competition');
$res_classement = $connect -> query("SELECT TEAM FROM classement2021_2022");
echo "<select name='team2' class='w3-input w3-border'>";
while($row = mysqli_fetch_array($res_classement))
{
	echo " <option value='".$row['TEAM']."'> ".$row['TEAM']."</option> ";
}
echo " </select>";
?>
  <p>      
  <label class="w3-text-blue"><b>SCORE</b></label>
  <input class="w3-input w3-border" name="score2" type="number"></p>
  <p>  
  <button class="w3-btn w3-blue">Register</button></p>
</form>

</body>
</html> 
