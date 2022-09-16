<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div>
	<?php 

 include("database.php");
 $sql="SELECT *from triageroomarrange";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    
    <div>
    	
     <p><?php  echo $row['room']  ;?></p>
    </div>

 	<?php 
 }



	?>
</div>
</body>
</html>