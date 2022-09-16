<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include("database.php");
$sql="UPDATE pedatricopddatault SET status ='1'";
$res=mysqli_query($con,$sql);
if ($res) {
	// code...
	echo "success";
}
else{
	echo "failed";
}
?>
</body>
</html>