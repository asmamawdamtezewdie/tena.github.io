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
	
     $sql="INSERT into ultrasounddata(dat,fname,lname,weightt,age,typee,medication,stren,dossage,history,scan,readd,allid) values('$date','$name','$lname','$we','$age','$type','$medi','$stre','$dosage','$history','$scan','$read','$allid')";
     $query=mysqli_query($con,$sql);

}

?>
<body>
<div>
	<?php 
$sql="SELECT *from pedatricopddatault";
$query=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($query)) {
	// code...
	?>

     <div>
     	<h1>Ultrasound Request Form</h1>
	<form method="post">
		<label>Date</label>
		<input type="date" name="date" value="<?php  echo $row['dat'] ;?>">
		<label>Patient Name</label>
		<input type="text" name="name" value="<?php  echo $row['fname'] ;?>">
		<label>Last Name</label>
		<input type="text" name="lname" value="<?php  echo $row['lname'] ;?>">
		<label>Weight</label>
		<input type="text" name="we" value="<?php  echo $row['weight'] ;?>">
		<label>Age</label>
		<input type="text" name="age" value="<?php  echo $row['age'] ;?>">
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
	<?php 
}

	?>
</div>
</body>
</html>