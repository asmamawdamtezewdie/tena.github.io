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
 $sql="SELECT *from pedatricopddatault";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    
    <div>
    	<form method="post">
      <label>Date</label>
      <input type="date" name="date" value="<?php echo $row['dat'] ;?>">
      <label>Patient Name</label>
      <input type="text" name="name" value="<?php echo $row['fname'] ;?>">
      <label>Last Name</label>
      <input type="text" name="lname" value="<?php echo $row['lname'] ;?>">
      <label>Weight</label>
      <input type="text" name="we" value="<?php echo $row['weight'] ;?>">
      <label>Age</label>
      <input type="text" name="age" value="<?php echo $row['age'] ;?>">
      <label>Types Of Scan</label>
      <input type="text" name="type" value="<?php echo $row['type'] ;?>">
      <label>Name Of Medication</label>
      <input type="text" name="medi" value="<?php echo $row['medication'] ;?>">
      <label>Strength</label>
      <input type="text" name="stre" value="<?php echo $row['stren'] ;?>">
      <label>Dossage</label>
      <input type="text" name="dosage" value="<?php echo $row['dossage'] ;?>">
      <label>Pertinet History</label>
      <textarea name="history" value="<?php echo $row['history'] ;?>">
         
      </textarea>
      <label>Has Patient Been Scanned UVM before?</label>
      <input type="text" name="" value="<?php echo $row['scan'] ; ?>">
            <label>STAT Read</label>
            <input type="text" name="read" value="<?php echo $row['read'] ; ?>">
   </form>

   <?php 
 }



   ?>
    </div>

</div>
</body>
</html>