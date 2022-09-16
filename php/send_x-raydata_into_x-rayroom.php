<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php 
include("database.php");
if (isset($_POST['submit'])) {
	// code...

extract($_post);
	$sql="INSERT into pedatricopddata(patientname,age,ward,history,radiology,doctor,serialno,prev) values('$name','$age','$ward','$history','$radio','$dr','$serial','$prev')";
	$query=mysqli_query($con,$sql);
}

?>
<body>
<h2>
		X-RAY REQUEST FORM
	</h2>

<div>
	<form method="post">
		<label>Name of patient</label>
		<input type="text" name="name">
		<label>Age</label>
		<input type="text" name="age">
		<label>Ward/Adress</label>
		<input type="text" name="ward">
		<label>Brief Clinical History</label>
		<input type="text" name="history">
		<label>Radiological Investigation Requested</label>
		<textarea name="radio">
			
		</textarea>
		<label>Medical Office/DR</label>
		<input type="text" name="dr">
		<label>X-Ray Serial Number</label>
		<input type="text" name="serial">
		<label>Previous Serial Number/Previous Exams Details</label>
		<textarea name="prev">
			
		</textarea>
      <input type="submit" name="submit">
	</form>
</div>
</body>
</html>