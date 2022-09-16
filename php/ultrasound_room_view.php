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

 include("db.php");
 $sql="SELECT *from ultrasound";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    
    <div>
    	




    	
    </div>

 	<?php 
 }



	?>
</div>
</body>
</html>