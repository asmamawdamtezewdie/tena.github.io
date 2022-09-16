<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php

include("database.php");
if (isset($_GET['mrn'])) {
	# code...
	$mrn=$_GET['mrn'];
	$sql="SELECT *from history where mrn='$mrn'";
	$query=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($query)){

		?>
     <textarea cols="80" rows="50">
    <?php  echo $row['history']   ;?>
	 </textarea>
		<?php
	}
}
		?>
<body>



<div>
	<table>
	
			<tr>
				<th>MEDICAL RECORDER NUMBER</th>
				<th>DATE OF REGISTRATION</th>
				<th>Patient Name</th>
				<th>FATHER NAME</th>
				<th>GRAND FATHER NAME</th>
				<th>SEX</th>
			    <th>DATE OF BIRTH</th>
			    <th>AGE</th>
			    <th>REGION</th>
			    <th>WOREDA/SUBCITY</th>
			    <th>KATENA/GOTT</th>
			    <th>KEBELE</th>
			    <th>HOUSE NUMBER</th>
			    <th>PHONE NUMBER</th> 
			    <th>action</th>
			</tr>
		<?php 
$sql="SELECT *from patientdata";
$query=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($query)) {
	// code...
	?>
        <tr>
              
        	<td><?php  echo $row['mrn']  ;?></td>
        	<td><?php echo $row['date_reg']  ;?></td>
        	<td><?php echo $row['name']  ;?></td>
        	<td><?php echo $row['fname']  ;?></td>
        	<td><?php echo $row['gfname']  ;?></td>
        	<td><?php echo $row['sex']  ;?></td>
        	<td><?php echo $row['date_birth']  ;?></td>
        	<td><?php echo  $row['age']  ;?></td>
        	<td><?php echo $row['region']  ;?></td>
        	<td><?php echo $row['subcity']  ;?></td>
        	<td><?php echo $row['katena']  ;?></td>
        	<td><?php echo $row['kebele']  ;?></td>
        	<td><?php echo $row['house_number']  ;?></td>
        	<td><?php echo $row['phone']  ;?></td>
			<td>
             	<form method="post">
             		<input type="checkbox" name="records[]" value="<?php echo $row['cardid']  ;?>">
				<a href="viewall_patient_data.php?mrn=<?php echo $row['mrn']  ;?>">History</a>
				<a href="update.php?id=<?php echo $row['cardid'] ; ?>">Update</a>
             </td>
        	
        
        </tr>

			<?php 
		
}


?>
             <div>
             	<input type="submit" name="delete" value="delete">
            
             </div>
			 </form>
            <?php 

             if (isset($_POST['delete'])) {
             	// code...
             	$number_checkbox=count($_POST['records']);
             	$i=0;
             	while ($i<$number_checkbox) {
             		// code...
             		$keyToDelete=$_POST['records'][$i];
             		mysqli_query($con,"DELETE FROM patientdata where cardid='$keyToDelete'");
                        		$i++;
             	}
             	header("location:viewall_patient_data.php");
             	
             }

            ?>
		
	</table>
</div>


</body>
</html>