<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title></title>
     <script src="../jquery.js"></script>
     <link rel="stylesheet" href="../style44.css">
</head>
<?php 
include("database.php");
$allid=$_SESSION['allid'];
if (isset($_POST['disable'])) {
    // code...
    $opdid=$_POST['opdid'];
    $sql="UPDATE opd_room_urindata SET stat='1' where allid='$allid'";
    $query=mysqli_query($con,$sql);

}
if (isset($_POST['enable'])) {
    // code...
     $opdid=$_POST['opdid'];
    $sql="UPDATE opd_room_urindata SET stat='0' where allid='$allid'";
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

     }
     table td{
          padding-left: 4px;
     }
     table td input {
          background: #fff;
          width: 200px;
          font-size: 20px;
          padding-left:4px;
          height: 40px;
          border: none;
          outline: none;
          box-shadow:3px 3px 3px #aaa ,-3px -3px 3px #aaa;
          margin-bottom: 4px;

     }
      label{
          font-size: 20px;
          font-weight: 400;
          font-family: Georgia, 'Times New Roman', Times, serif;
     }
</style>
<body>

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
     </div>

   <div>
      
         <!-- <tr>
                 <th>Test</th>
                 <th>Result</th>
                 <th>Microscopy exam</th>
                 <th>Result</th>
            </tr> -->
   </div>
<div>
    	<?php 
 $sql="SELECT *from opd_room_urindata where stat='0'AND allid='$allid'";
 $query=mysqli_query($con,$sql);

 $today_date=date('y/m/d');
$today_time=strtotime($today_date);
// $sql1="SELECT *from date";
// $query1=mysqli_query($con,$sql1);
// $row=mysqli_fetch_assoc($query1);


     # code...
 
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 
      echo "<h1>$today_date</h1>";
     
 	?>

<div>

<center>
<table>
     <tr>
          <td><label>Patient Name</label></td>
          <td><input type="text" readonly name="pname" value="<?php echo $row['pname'] ;?>"></td>
          <td><label>Age</label></td>
          <td><input type="number" readonly name="age" value="<?php echo $row['age'] ;?>"></td>
          <td> <label>Sex</label></td>
          <td>  <input type="text"readonly name="sex"><?php echo $row['sex'] ;?></td>
          <td> <label>MRN</label></td>
          <td><input type="text"readonly name="mrn" value="<?php echo $row['MRN'] ;?>"></td>
</tr>
<tr>
     <td><label>ward/OPD No</label></td>
     <td><input type="text"readonly name="ward" value="<?php echo $row['ward'] ;?>"></td>
     <td><label>Bed No</label></td>
     <td> <input type="number"readonly name="bedno" value="<?php echo $row['bedno'] ;?>"></td>
     <td> <label>Date of birth</label></td>
     <td><input type="date"readonly name="datebirth" value="<?php echo $row['datebirth'] ;?>"></td>
     <td><label>Tel</label></td>
     <td> <input type="number"readonly name="tel" value="<?php echo $row['mobile'] ;?>"></td>

</tr>
<tr>
               <td><label>Patient Address</label></td>
               <td><input type="text"readonly name="address" value="<?php echo $row['patientaddress'] ;?>"></td>
               <td><label>Test Order By</label></td>
               <td><input type="text"readonly name="orderby" value="<?php echo $row['orderby'] ;?>"></td>
               <td><label>Date</label></td>
               <td><input type="date"readonly name="date" value="<?php echo $row['date'] ;?>"></td>
               <td><label>Type of Specimen</label></td>
               <td> <input type="text"readonly name="specimen" value="<?php echo $row['specimin'] ;?>"></td>
</tr>
<tr>
               <td><label>Site Of Specimen Collected</label></td>
               <td><input type="text"readonly name="site" value="<?php echo $row['site'] ;?>"></td>
               <td><label>Clinical Diagnosis</label></td>
               <td><input type="text"readonly name="diagno" value="<?php echo $row['diagno'] ;?>"></td>
               <td><label>Sample Collected by</label></td>
               <td><input type="text"readonly name="samcoll" value="<?php echo $row['samcollby'] ;?>"></td>
               <td><label>Initial</label></td>
               <td><input type="date"readonly name="initial" value="<?php echo $row['initial'] ;?>"></td>
          </tr>
          <tr>
               <td><label>Lab Serial No</label></td>
               <td><input type="text"readonly name="labserial" value="<?php echo $row['labserial'] ;?>"></td>
          </tr>
</table>
<table>
        <tr>
                   <td>Physical Exam</td>
                   <td></td>
                   <td>RBC</td>
                   <td><input type="text"readonly name="rbc" value="<?php echo $row['rbc'] ;?>"></td>
                    <td>Color</td>
                    <td><input type="text"readonly name="color"value="<?php echo $row['color'] ;?>"></td>
                    <td>WBC</td>
                    <td><input type="text"readonly name="wbc"value="<?php echo $row['wbc'] ;?>"></td>
                    </tr>

                    <tr>
                    <td>Transparency</td>
                    <td><input type="text"readonly name="trans"value="<?php echo $row['trans'] ;?>"></td>
                    <td>WBC Casts</td>
                    <td><input type="text"readonly name="wbcast"value="<?php echo $row['wbcast'] ;?>"></td>
                    <td>Foam and Others</td>
                    <td><input type="text"readonly name="foam"value="<?php echo $row['foam'] ;?>"></td>
                    <td>RBC Casts</td>
                    <td><input type="text"readonly name="rbccast" value="<?php echo $row['rbccast'] ;?>"></td>
                    </tr>

                    <tr>
                    <td>Chemical Exam</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>PH</td>
                    <td><input type="text"readonly name="ph"value="<?php echo $row['ph'] ;?>"></td>
                    <td>Waxy Casts</td>
                    <td><input type="text" readonly name="waxy"value="<?php echo $row['waxy'] ;?>"></td>
                    
                    </tr>

                    <tr>
                    <td>Blood</td>
                    <td><input type="text"readonly name="bood"value="<?php echo $row['blood'] ;?>"></td>
                    <td>Epithelial cells</td>
                    <td><input type="text"readonly name="ephicel"value="<?php echo $row['ephical'] ;?>"></td>
                    <td>S/gravity</td>
                    <td><input type="text"readonly name="gravity"value="<?php echo $row['gravity'] ;?>"></td>
                    <td>Parasite</td>
                    <td><input type="text" name="parasite"value="<?php echo $row['parasite'] ;?>"></td>
                    </tr>

                    <tr>
                    <td>Albumin</td>
                    <td><input type="text"readonly name="albu"value="<?php echo $row['albu'] ;?>"></td>
                    <td>Bacteria</td>
                    <td><input type="text"readonly name="bacteria"value="<?php echo $row['bacteria'] ;?>"></td>
                    <td>Glucose</td>
                    <td><input type="text"readonly name="gluco"value="<?php echo $row['gluco'] ;?>"></td>
                    <td>Yeast</td>
                    <td><input type="text"readonly name="yeast"value="<?php echo $row['yeast'] ;?>"></td>
                    </tr>
                    <tr>
                    <td>Keton</td>
                    <td><input type="text"readonly name="keton"value="<?php echo $row['keton'] ;?>"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Crystals</td>
                    <td><input type="text"readonly name="crystals"value="<?php echo $row['crystals'] ;?>"></td>

              </tr>
              </table>
     </div>

       <div>
          <table>
               <tr>

               <td> <label>Test Done By</label></td>
               <td><input type="text"readonly name="doneby"value="<?php echo $row['doneby'] ;?>"></td>
               <td><label>Checked By</label></td>    
               <td><input type="text"readonly name="appby"value="<?php echo $row['appby'] ;?>"></td>
               <td><label>Specimen Logout</label></td>
               <td><input type="date"readonly name="logdate"value="<?php echo $row['logdate'] ;?>"></td>
          </tr>
          </table>

</center>
     
     </div>
    	
    </div>

 	<?php 
     
      echo "<h4>======================================================================================================================================<h4>";
      echo "<h4>======================================================================================================================================<h4>";
     
 }


	?>
</div>
 <form method="post" action="#">
            <input type="text" name="opdid" value="<?php echo $row['opdid'] ;?>" hidden>
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