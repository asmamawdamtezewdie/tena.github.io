<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
h1{
		background-color: #0000ff;
	}
	</style>
<?php 
 include("database.php");
 if (isset($_POST['submit'])) {
$sql="INSERT into pedatricopddata() values('$name','$age','$ward','$history','$radio','$dr','$serial','$prev')";
$query=mysqli_query($con,$sql);
}
?>
<body>
<div>
	<?php 
 $sql="SELECT *from pedatricopddata";
 $query=mysqli_query($con,$sql);
 $today_date=date('y/m/d');

 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
   echo "<h1>$today_date</h1>";

 	?>
    <div>
    	<form method="post">
      <label>Name of patient</label>
      <input type="text" name="name" value="<?php echo $row['patientname'] ;?>">
      <label>Age</label>
      <input type="text" name="age" value="<?php echo $row['age'] ;?>">
      <label>Ward/Adress</label>
      <input type="text" name="ward" value="<?php echo $row['ward'] ;?>">
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

 	<?php 
  echo "<h4>======================================================================================================================================<h4>";
  echo "<h4>======================================================================================================================================<h4>";
  
 }
	?>
</div>
</body>
</html>