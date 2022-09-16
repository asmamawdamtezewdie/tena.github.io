

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
if (isset($_GET['view']) && $_GET['view']==='room1') {
	// code...
	$sql="SELECT *from room1 where room1id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>


<?php 
if (isset($_GET['view']) && $_GET['view']==='room2') {
	// code...
	$sql="SELECT *from room2 where room2id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room3') {
	// code...
	$sql="SELECT *from room3 where room3id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room4') {
	// code...
	$sql="SELECT *from room4 where room4id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room5') {
	// code...
	$sql="SELECT *from room5 where room5id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room6') {
	// code...
	$sql="SELECT *from room6 where room6id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room7') {
	// code...
	$sql="SELECT *from room7 where room7id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

<?php 
if (isset($_GET['view']) && $_GET['view']==='room8') {
	// code...
	$sql="SELECT *from room8 where room8id=".$_SESSION['roomid']." ";
	$query=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_assoc($query)) {
		// code...

		?>

     



		<?php 
	}

}
?>

</body>
</html>