<!DOCTYPE html>
<html>
<head>
<style>
#teams {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#teams td, #teams th {
  border: 1px solid #ddd;
  padding: 8px;
}

#teams tr:nth-child(even){background-color: #f2f2f2;}

#teams tr:hover {background-color: #ddd;}

#teams th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  text-align: center;
}
#teams td {
  text-align: center;
}
</style>
</head>
<body>
 <?php include 'action_getClassement.php';?>
 <script src="sortTable.js"></script>
</body>
</html>



