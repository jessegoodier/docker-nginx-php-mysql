<html>
<head>
<title>php table</title>
</head>
<body>
<h1>php mysql table</h1>
 <hr>
 <?php
 $db_host = "db";
 $db_username = "root";
 $db_pass = "notsecure112";
 $db_name = "data";
 $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_pass);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
 $query = $db->query('SELECT * FROM priceScanner order by DateTime');
 ?>


<table border ="1">
<tr>
<th>DateTime</th>
<th>Value</th>
<th>Volume</th>
</tr>


<?php
while ($row = $query->fetch()) 
{
?>
<tr>
<td><?php echo $row['DateTime'];?></td>
<td><?php echo $row['Price'];?></td>
<td><?php echo $row['Volume']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>