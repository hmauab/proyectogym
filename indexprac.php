<?php
require ("conector.php");
$query = "SELECT * FROM universidades ORDER BY nombre ASC";
$queEmp2 = mysql_query("SELECT * FROM universidades ORDER BY id");
$queEmp = mysql_query($query, $conector);
$queEmp = mysql_query("SELECT * FROM universidades ORDER BY id");
?>

<html>
<head>

<title>Practica Data Base</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head> 
<body>

<b>Log In Fields</b></br>

<form>
USERNAME<input type="text" name="username"></br>
PASSWORD<input type="password" name="password"></br>
<input type="submit" value="submit"></br>
</form>

</br></br></br></br></br>
<table border = "1">
<?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { ?>
<tr>
<td><?php echo $rsEmp['id']; ?></td>
<td><?php echo $rsEmp['nombres']; ?></td>
<td><?php echo $rsEmp['ciudad']; ?></td>
<td><?php echo $rsEmp['telephono']; ?></td>
</tr>
<?php } ?>
</table>


</html>