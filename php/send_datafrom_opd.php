<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php 

include("db.php");
$sql="INSERT into opd_room_paper values('')";

?>
<body>
 <div>
          <label>Patient Name</label>
          <input type="text" name="pname">
          <label>Age</label>
          <input type="number" name="age">
          <label>Sex</label>
          <input type="radio" name="male">Male
           <input type="radio" name="female">Female
           <label>MRN</label>
           <input type="text" name="mrn">
           <label>ward/OPD No</label>
           <input type="text" name="ward">
           <label>Bed No</label>
           <input type="number" name="bedno">
           <label>Date of birth</label>
           <input type="date" name="datebirth">
           <label>Tel</label>
           <input type="number" name="tel">
           <label>Patient Address</label>
            <input type="text" name="address">
            <label>Test Order By</label>
            <input type="text" name="orderby">
            <label>Date</label>
            <input type="date" name="date">
            <label>Type of Specimen</label>
            <input type="text" name="specimen">
            <label>Site Of Specimen Collected</label>
            <input type="text" name="site">
            <label>Clinical Diagnosis</label>
             <input type="text" name="diagno">

             <div>
                  <label>Sample Collected by</label>
                  <input type="text" name="samcoll">
                  <label>Initial</label>
                  <input type="date" name="initial">
                  <label>Lab Serial No</label>
                  <input type="text" name="labserial">
             
             </div>

            <tr>
                 <th>Test</th>
                 <th>Result</th>
                 <th>Microscopy exam</th>
                 <th>Result</th>
            </tr>

              <tr>
                   <td>Physical Exam</td>
                   <td></td>
                   <td>RBC</td>
                   <td><input type="text" name="rbc"></td>
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
</body>
</html>