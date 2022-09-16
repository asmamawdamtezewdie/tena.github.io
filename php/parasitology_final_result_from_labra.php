<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" href="../style44.css">
  <script src="../jquery.js"></script>
</head>
<?php 
include("database.php");
$allid=$_SESSION['allid'];
if (isset($_POST['disable'])) {
    // code...
    $sql="UPDATE opd_room_parsitology_data SET stat='1' where allid='$allid'";
    $query=mysqli_query($con,$sql);

}
if (isset($_POST['enable'])) {
    // code...
    $sql="UPDATE opd_room_parsitology_data SET stat='0' where allid='$allid'";
    $query=mysqli_query($con,$sql);
}

?>
<style>
     h1{
          background-color: green;
     }
     body{
          background:#cccccc;

     }
     table{
     margin-top: -400px;
     }

     table td{
          padding-left: 4px;
     }
     table td input{
          background: #fff;
          width: 200px;
          font-size: 20px;
          padding-left:4px;
          height: 40px;
          border: none;
          outline: none;
          color: forestgreen;
          box-shadow:3px 3px 3px #aaa ,-3px -3px 3px #aaa;
          margin-bottom: 4px;

     }
      label{
          font-size: 20px;
          font-weight: 400;
          font-family: Georgia, 'Times New Roman', Times, serif;
     }
</style>
<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="logout.php"><button id="register">logout</button></a></li>
         <div class="button">
            <!-- <button id="login">Login</button> -->
            <!-- <button id="register">Register</button> -->
         </div>
           <div class="menu"><img src="../image/menu.png" id="menu" ></div>
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
<?php 

$sql="SELECT *from opd_room_parsitology_data where stat='0' AND allid='$allid'";
$query=mysqli_query($con,$sql);
$today_date=date('y/m/d');
while ($row=mysqli_fetch_assoc($query)) {
  // code...
  echo "<h1>$today_date</h1>";


?>
<body>

     </div>
	<p>N.B. The request and report form is valid only the required blank space properly full filled</p>
<div>
	<form method="post" action="send_parasitologydata.php">
<table>
  <tr>
    <td><label>Patient Name</label></td>
    <td><input type="text" name="pname" readonly value="<?php echo $row['pname'] ;?>"></td>
    <td><label>Age</label></td>
    <td><input type="number" name="age" readonly value="<?php echo $row['age'] ;?>"></td>
    <td><label>Sex</label></td>
    <td><input type="text" name="sex" readonly value="<?php echo $row['sex'] ;?>"></td>
    <td><label>MRN</label></td>
    <td><input type="text" name="mrn"readonly value="<?php echo $row['mrn'] ;?>"></td>
  </tr>
  <tr>
    <td><label>ward/OPD No</label></td>
    <td><input type="text" name="ward"readonly value="<?php echo $row['opdno'] ;?>"></td>
    <td><label>Bed No</label></td>
    <td><input type="number" name="bedno"readonly value="<?php echo $row['bedno'] ;?>"></td>
    <td><label>Date of birth</label></td>
    <td> <input type="date" name="datebirth"readonly value="<?php echo $row['datebirth'] ;?>"></td>
    <td><label>Tel</label></td>
    <td><input type="number" name="tel"readonly value="<?php echo $row['tel'] ;?>" ></td>
  </tr>
  <tr>
      <td><label>Patient Address</label></td>
      <td><input type="text" name="address"readonly value="<?php echo $row['patient_address'] ;?>" ></td>
       <td> <label>Test Order By</label></td>
       <td><input type="text" name="orderby"readonly value="<?php echo $row['order_by'] ;?>" ></td>
        <td><label>Date</label></td>
      <td><input type="date" name="date" readonly value="<?php echo $row['date'] ;?>"></td>
      <td><label>Type of Specimen</label></td>
      <td>  <input type="text" name="specimen"readonly value="<?php echo $row['specimen_type'] ;?>"></td>
  </tr>
  <tr>
        <td><label>Sample Collected by</label></td>
        <td><input type="text" name="samcoll"readonly value="<?php echo $row['sam_colected_by'] ;?>"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><label>Lab Serial No</label></td>
        <td><input type="text" name="labserial"readonly value="<?php echo $row['lab_serial_no'] ;?>"></td>
  </tr>
</table>
</div>
             <div>
             	<center>
               <table>
             		<tr>
             			<th>Types of Test</th>
             			<th>Result</th>
             		</tr>
             		<tr>
             			<td>Color/apperance</td>
             			<td><input type="text" name="test1"readonly value="<?php echo $row['test1'] ;?>"></td>
                  </tr>
                  <tr>
             			<td>Macroscopic</td>
             			<td><input type="text" name="test2"readonly value="<?php echo $row['test2'] ;?>"></td>
                  </tr>
                  <tr>
             			<td>Macroscopic Exam Hyaline cast</td>
             			<td><input type="text" name="test3"readonly value="<?php echo $row['test3'] ;?>"></td>
                  </tr>
                  <tr>
             			<td>Direct microscopy</td>
             			<td><input type="text" name="test4"readonly value="<?php echo $row['test4'] ;?>"></td>
                  </tr>
                  <tr>
             			<td>Concentration technique</td>
             			<td><input type="text" name="test5"readonly value="<?php echo $row['test5'] ;?>"></td>
                 </tr>
                 <tr>
                        <td>Facial occut blood</td>
                        <td><input type="text" name="test6"readonly value="<?php echo $row['test6'] ;?>"></td>
                        </tr>
                        <tr>
                        <td>Blood film for Hemoparasites</td>
                        <td><input type="text" name="test7"readonly value="<?php echo $row['test7'] ;?>"></td>
                        </tr>
                        <tr>
                        <td>other test</td>
                        <td><input type="text" name="test8"readonly value="<?php echo $row['test8'] ;?>"></td>
             		</tr>
             	</table>
              </center>
             </div>
            <center> <table style="margin-top:0 ;">
                <tr>
                  <td> 	<label>Lab personal comment</label></td>
                  <td>	<input type="text" name="com"readonly value="<?php echo $row['comment'] ;?>"></td>
                  <td><label>Test Done By</label></td>
                  <td>	<input type="text" name="doneby"readonly value="<?php echo $row['doneby'] ;?>"></td>
                  <td><label>Checked by</label></td>
                  <td>	<input type="text" name="checkedby"readonly value="<?php echo $row['checkedby'] ;?>"></td>
                  <td><label>Approved by</label></td>
                  <td> 	<input type="text" name="approvedby"readonly value="<?php echo $row['approvedby'] ;?>"></td>
                </tr>
              </table></center>
            </div>

   </form>
   <?php 
echo "<h4>======================================================================================================================================<h4>";
echo "<h4>======================================================================================================================================<h4>";
 
}
   ?>
   <form method="post" action="#">

       <center> <input style="width:320px ; height:30px; border-radius:5px; border:1px solid white; background:deepskyblue; color:white;" type="submit" name="enable"value="enable">
       <input style="width:320px ; height:30px; border-radius:5px; border:1px solid white; background:deepskyblue; color:white;" type="submit" name="disable"value="disable">
         </center>
         
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