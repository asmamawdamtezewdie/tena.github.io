<?php 

session_start();
?>

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
$allid=$_SESSION['allid'];
$sql="UPDATE adultdata SET status ='1' AND allid='$allid'";
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