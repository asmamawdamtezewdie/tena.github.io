<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>
<?php 
include("database.php");
if (isset($_POST['submit'])) {
	// code...

  extract($_POST);
	$sql="INSERT into pedatricopddatault(dat,fname,lname,weight,age,type,medication,stren,dossage,history,scan,read) values('$date','$name','$lname','$we','$age','$type','$medi','$stre','$dosage','$history','$scan','$read')";
	$query=mysqli_query($con,$sql);
}

?>
<body>
<div>
	<body>
	<h1>Ultrasound Request Form</h1>
	<form method="post">
		<label>Date</label>
		<input type="date" name="date">
		<label>Patient Name</label>
		<input type="text" name="name">
		<label>Last Name</label>
		<input type="text" name="lname">
		<label>Weight</label>
		<input type="text" name="we">
		<label>Age</label>
		<input type="text" name="age">
		<label>Types Of Scan</label>
		<select name="type">
			<option>Abdominal</option>
			<option>Echo/Chest</option>
			<option>Thyroid</option>
			<option>Soft Tissue</option>
			<option>Ocular</option>
		</select>
		<label>Name Of Medication</label>
		<input type="text" name="medi">
		<label>Strength</label>
		<input type="text" name="stre">
		<label>Dossage</label>
		<input type="text" name="dosage">
		<label>Pertinet History</label>
		<textarea name="history">
			
		</textarea>
		<label>Has Patient Been Scanned UVM before?</label>
		<input type="radio" name="scan" value="YES">YES
				<input type="radio" name="scan" value="NO">NO
				<label>STAT Read</label>
				<input type="radio" name="read" value="YES">YES
								<input type="radio" name="read" value="NO">NO

         <input type="submit" name="submit">

	</form>
</div>
</body>
</html>