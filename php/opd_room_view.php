<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php 
 include("db.php");
 if (isset($_POST['submit'])) {
    // code...
 
$sql="INSERT into opd_room_paper() values('$pname','$age','$','sex','$mrn','$ward','$bedno','$datebirth','$tel','$address','$orderby','$date','$specimen','$site','$diagno','$samcoll','$initial','$labserial','$rbc','$color','$wbc','$trans','$wbcast','$foam','$rbccast','$ph','$waxy','$bood','$ephicel','$gravity','$parasite','$albu','$bacteria','$gluco','$yeast','$keton','$crystals','$doneby','$appby','$logdate')";
$query=mysqli_query($con,$sql);

}

?>
<body>
   <div>
      
         <tr>
                 <th>Test</th>
                 <th>Result</th>
                 <th>Microscopy exam</th>
                 <th>Result</th>
            </tr>
   </div>
<div>
    	<?php 
 $sql="SELECT *from opd_room_paper";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    
    
    	

<div>
          <label>Patient Name</label>
          <input type="text" name="pname" value="<?php echo $row[''] ;?>">
          <label>Age</label>
          <input type="number" name="age" value="<?php echo $row[''] ;?>">
          <label>Sex</label>
           
           <input type="text" name="sex"><?php echo $row[''] ;?>
           <label>MRN</label>
           <input type="text" name="mrn" value="<?php echo $row[''] ;?>">
           <label>ward/OPD No</label>
           <input type="text" name="ward" value="<?php echo $row[''] ;?>">
           <label>Bed No</label>
           <input type="number" name="bedno" value="<?php echo $row[''] ;?>">
           <label>Date of birth</label>
           <input type="date" name="datebirth" value="<?php echo $row[''] ;?>">
           <label>Tel</label>
           <input type="number" name="tel" value="<?php echo $row[''] ;?>">
           <label>Patient Address</label>
            <input type="text" name="address" value="<?php echo $row[''] ;?>">
            <label>Test Order By</label>
            <input type="text" name="orderby" value="<?php echo $row[''] ;?>">
            <label>Date</label>
            <input type="date" name="date" value="<?php echo $row[''] ;?>">
            <label>Type of Specimen</label>
            <input type="text" name="specimen" value="<?php echo $row[''] ;?>">
            <label>Site Of Specimen Collected</label>
            <input type="text" name="site" value="<?php echo $row[''] ;?>">
            <label>Clinical Diagnosis</label>
             <input type="text" name="diagno" value="<?php echo $row[''] ;?>">

             <div>
                  <label>Sample Collected by</label>
                  <input type="text" name="samcoll" value="<?php echo $row[''] ;?>">
                  <label>Initial</label>
                  <input type="date" name="initial" value="<?php echo $row[''] ;?>">
                  <label>Lab Serial No</label>
                  <input type="text" name="labserial" value="<?php echo $row[''] ;?>">
             
             </div>

        <tr>
                   <td>Physical Exam</td>
                   <td></td>
                   <td>RBC</td>
                   <td><input type="text" name="rbc" ></td>
                    <td>Color</td>
                    <td><input type="text" name="color"></td>
                    <td>WBC</td>
                    <td><input type="text" name="wbc"></td>
                    <td>Transparency</td>
                    <td><input type="text" name="trans"></td>
                    <td>WBC Casts</td>
                    <td><input type="text" name="wbcast"></td>
                    <td>Foam and Others</td>
                    <td><input type="text" name="foam"></td>
                    <td>RBC Casts</td>
                    <td><input type="text" name="rbccast"></td>
                    <td>Chemical Exam</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>PH</td>
                    <td><input type="text" name="ph"></td>
                    <td>Waxy Casts</td>
                    <td><input type="text" name="waxy"></td>
                    <td>Blood</td>
                    <td><input type="text" name="bood"></td>
                    <td>Epithelial cells</td>
                    <td><input type="text" name="ephicel"></td>
                    <td>S/gravity</td>
                    <td><input type="text" name="gravity"></td>
                    <td>Parasite</td>
                    <td><input type="text" name="parasite"></td>
                    <td>Albumin</td>
                    <td><input type="text" name="albu"></td>
                    <td>Bacteria</td>
                    <td><input type="text" name="bacteria"></td>
                    <td>Glucose</td>
                    <td><input type="text" name="gluco"></td>
                    <td>Yeast</td>
                    <td><input type="text" name="yeast"></td>
                    <td>Keton</td>
                    <td><input type="text" name="keton"></td>
                    <td>Crystals</td>
                    <td><input type="text" name="crystals"></td>

              </tr>
     </div>

       <div>
          <label>Test Done By</label>
          <input type="text" name="doneby">
          <label>Checked By</label>
          <input type="text" name="appby">
          <label>Specimen Logout</label>
          <input type="date" name="logdate">
          <input type="submit" name="submit"value="Send">
     </div>
    	
    </div>

 	<?php 
 }



	?>
</div>
</body>
</html>