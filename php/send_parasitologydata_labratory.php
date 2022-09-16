<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php
if (isset($_POST['submit'])) {
	// code...
  extract($_POST);
include('database.php');
$sql="INSERT into opd_room_parasitology_data() values('$pname','$age','$sex','$mrn','$ward','$bedno','$datebirth','$tel','$address','$orderby','$date','$specimen','$samcoll','$labserial','$test1','$test2','$test3','$test4','test5','$test6','$test7','$test8','$com','$doneby','$checkedby','$approvedby')";
$query=mysqli_fetch_assoc($query);
}
?>
<body>
	<p>N.B. The request and report form is valid only the required blank space properly full filled</p>
<div>
	<form method="post" action="send_parasitologydata.php">
        <label>Patient Name</label>
          <input type="text" name="pname">
          <label>Age</label>
          <input type="number" name="age">
          <label>Sex</label>
           
           <input type="text" name="sex">>
           <label>MRN</label>
           <input type="text" name="mrn" >
           <label>ward/OPD No</label>
           <input type="text" name="ward" >
           <label>Bed No</label>
           <input type="number" name="bedno">
           <label>Date of birth</label>
           <input type="date" name="datebirth">
           <label>Tel</label>
           <input type="number" name="tel" >
           <label>Patient Address</label>
            <input type="text" name="address" >
            <label>Test Order By</label>
            <input type="text" name="orderby" >
            <label>Date</label>
            <input type="date" name="date" >
            <label>Type of Specimen</label>
            <input type="text" name="specimen">
         

</div>

	    <div>
                  <label>Sample Collected by</label>
                  <input type="text" name="samcoll">
                 
                  <label>Lab Serial No</label>
                  <input type="text" name="labserial">
             
             </div>
             <div>
             	<table>
             		<tr>
             			<th>Types of Test</th>
             			<th>Result</th>
             		</tr>
             		<tr>
             			<td>Color/apperance</td>
             			<td><input type="text" name="test1"></td>
             			<td>Macroscopic</td>
             			<td><input type="text" name="test2"></td>
             			<td>Macroscopic Exam Hyaline cast</td>
             			<td><input type="text" name="test3"></td>
             			<td>Direct microscopy</td>
             			<td><input type="text" name="test4"></td>
             			<td>Concentration technique</td>
             			<td><input type="text" name="test5"></td>
                        <td>Facial occut blood</td>
                        <td><input type="text" name="test6"></td>
                        <td>Blood film for Hemoparasites</td>
                        <td><input type="text" name="test7"></td>
                        <td>other test</td>
                        <td><input type="text" name="test8"></td>
             		</tr>
             	</table>
             </div>

             <div>
             	<label>Lab personal comment</label>
             	<input type="text" name="com">
             	<label>Test Done By</label>
             	<input type="text" name="doneby">
             	<label>Checked by</label>
             	<input type="text" name="checkedby">
             	<label>Approved by</label>
             	<input type="text" name="approvedby">
             	<input type="submit" name="send" value="send parasitology test">
             </div>

   </form>
</body>
</html>