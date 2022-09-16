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
 $sql="SELECT *from pedatricopddata";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    <div>
    	<form method="post">
      <label>Name of patient</label>
      <input type="text" name="name" value="<?php  echo $row['patientname'] ; ?>">
      <label>Age</label>
      <input type="text" name="age" value="<?php  echo $row['age'] ; ?>">
      <label>Ward/Adress</label>
      <input type="text" name="ward" value="<?php  echo $row['ward'] ; ?>">
      <label>Brief Clinical History</label>
      <input type="text" name="history" value="<?php  echo $row['history'] ; ?>">
      <label>Radiological Investigation Requested</label>
      <textarea name="radio"  value="<?php  echo $row['radiology'] ; ?>">
         
      </textarea>
      <label>Medical Office/DR</label>
      <input type="text" name="dr" value="<?php  echo $row['doctor'] ; ?>">
      <label>X-Ray Serial Number</label>
      <input type="text" name="serial" value="<?php  echo $row['serialno'] ; ?>">
      <label>Previous Serial Number/Previous Exams Details</label>
      <textarea name="prev" value="<?php  echo $row['prev'] ; ?>">
         
      </textarea>

   </form>
    </div>

   <?php 
 }



   ?>
    </div>
</div>
</body>
</html>