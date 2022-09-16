<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <style>
    @import url(../style.css);
     .table2 {
       font-size: 20px;
       color: white;
      margin-top: 40px;
       padding-bottom: 20px;
       margin-left: 27%;
     }
  </style>
</head>
<?php
include('database.php');
$allid=$_SESSION['allid'];
if (isset($_POST['send'])) {
	// code...
  extract($_POST);

$sql="INSERT into opd_room_parsitology_data(pname,age,sex,mrn,opdno,bedno,datebirth,tel,patient_address,order_by,date,specimen_type,sam_colected_by,lab_serial_no,test1,test2,test3,test4,test5,test6,test7,test8,comment,doneby,checkedby,approvedby,allid) values('$pname','$age','$sex','$mrn','$ward','$bedno','$datebirth','$tel','$address','$orderby','$date','$specimen','$samcoll','$labserial','$test1','$test2','$test3','$test4','test5','$test6','$test7','$test8','$com','$doneby','$checkedby','$approvedby','$allid')";
$query=mysqli_query($con,$sql);
}
?>
<body>
<header>
       <img src="image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
         <div class="button">
            <button id="login">Login</button>
            <button id="register">Register</button>
         </div>
           <div class="menu"><img src="image/menu.png" id="menu" ></div>
       </ul>
   
      
   
     </header>
     <div class="menu_l">
        <div class="left_side_bar" id="l_bar">
            <ul>
    
              <li>Home</li>
              <li>Service</li>
              <li>Seting</li>
              <li>Contacts</li>
              <li>About</li>
              <li>helps</li>
            </ul>
    
         </div>
     </div>
	<p>N.B. The request and report form is valid only the required blank space properly full filled</p>

	<form method="post" action="send_parasitologydata.php">
  <table>
     <tr>
       <td><label>PatientName</label></td> 
       <td> <input type="text" name="pname"></td>  
          <td><label>Age</label></td>
          <td><input type="number" name="age"></td>
          <td><label>Sex</label></td>
          <td><input type="text" name="sex"></td>
           </tr> 
<tr>
              <td><label>MRN</label></td>
              <td>  <input type="text" name="mrn" ></td>
              <td><label>ward/OPD No</label></td>
              <td>   <input type="text" name="ward" ></td>
              <td><label>Bed No</label></td>
              <td> <input type="number" name="bedno"></td>
</tr>
<tr>

            <td><label>Date of birth</label></td>
            <td><input type="date" name="datebirth"></td>
            <td> <label>Tel</label></td>
            <td><input type="number" name="tel" ></td>
            <td> <label>Patient Address</label></td>
            <td><input type="text" name="address" ></td>
            
</tr>
<tr>
                <td><label>Test Order By</label></td>
                <td><input type="text" name="orderby" ></td>
                <td> <label>Date</label></td>
                <td><input type="date" name="date" ></td>
                <td><label>Type of Specimen</label></td>
                <td><input type="text" name="specimen"></td>
</tr>
  </table>  

</div>

	    <div>
                  <label>Sample Collected by</label>
                  <input type="text" name="samcoll">
                 
                  <label>Lab Serial No</label>
                  <input type="text" name="labserial">
             
             </div>
             <div>
             	<table class="table2">

             		<tr>
             			<th>Types of Test</th>
             			<th>Result</th>
             		</tr>
             		<tr>
             			<td>Color/apperance</td>
             			<td><input type="text" name="test1"></td>
                   </tr>
                   <tr>
             			<td>Macroscopic</td>
             			<td><input type="text" name="test2"></td>
                   </tr>
                   <tr>
             			<td>Macroscopic Exam Hyaline cast</td>
             			<td><input type="text" name="test3"></td>
                   </tr>
                   <tr>
             			<td>Direct microscopy</td>
             			<td><input type="text" name="test4"></td>
                   </tr><tr>
             			<td>Concentration technique</td>
             			<td><input type="text" name="test5"></td>
                   </tr><tr>
                        <td>Facial occut blood</td>
                        <td><input type="text" name="test6"></td>
                        </tr><tr>
                        <td>Blood film for Hemoparasites</td>
                        <td><input type="text" name="test7"></td>
                       </tr>
                       <tr>
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

             </div>
	<input type="submit" style="margin-left:20%; margin-top:10%; color:white; width: 60%; height:40px; background:deepskyblue; border:none; font-size:30px;" name="send" value="send parasitology test">
  </form>
  <div class="footer">
   <div class="l_footer"></div>
<div class="r_footer">
    <p>+25190002332</p>
    <P>NigistEline12@gmail.com</P>
    <p>HOSSANA ETHIOPIA</p>
    <p>&#169 All Right is reserved</p></div>
 </div>
<script>
   
  $("#menu").click(function(){
    $("#l_bar").slideToggle("fast");
  });
  $("#menu").hover(function(){
  $(this).css({left: '70px'});
});
</script>
<script src="javascript/cism.js"></script>
   
</body>
</html>