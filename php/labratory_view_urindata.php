
<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../style44.css">
   <script src="../jquery.js"></script>
	<title></title>
</head>
<style>
     h1{
          background-color: green;
     }
     body{
          background:#cccccc;
          margin: 0;
       padding: 0;
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
          color: green;
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
<?php 
 include("database.php");
 if (isset($_POST["submit"])) {
    // code...
 extract($_POST);
$sql="INSERT into opd_room_urindata(pname,age,sex,MRN,ward,bedno,datebirth,mobile,patientaddress,orderby,date,specimin,site,diagno,samcollby,initial,labserial,rbc,color,wbc,trans,wbcast,foam,rbccast,ph,waxy,blood,ephical,gravity,parasite,albu,bacteria,gluco,yeast,keton,crystals,doneby,appby,logdate,allid) values('$pname','$age','$sex','$mrn','$ward','$bedno','$datebirth','$tel','$address','$orderby','$date','$specimen','$site','$diagno','$samcollby','$initial','$labserial','$rbc','$color','$wbc','$trans','$wbcast','$foam','$rbccast','$ph','$waxy','$blood','$ephical','$gravity','$parasite','$albu','$bacteria','$gluco','$yeast','$keton','$crystals','$doneby','$appby','$logdate','$allid')";
$query=mysqli_query($con,$sql);
if ($query) {
   # code...
echo "inserted successully";
}

}

?>

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

<div>
    	<?php 
 $sql="SELECT *from opd_room_urindata";
 $query=mysqli_query($con,$sql);
 $today_date=date('y/m/d');

 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
    echo "<h1>$today_date</h1>";

 	?>
    
    
    <form method="post" action="#">

<div>
   <table>
      <tr>
         <td> <label>Patient Name</label></td>
         <td><input type="text" readonly name="pname" value="<?php echo $row['pname'] ;?>"></td>
         <td><label>Age</label></td>
         <td><input type="number" readonly name="age" value="<?php echo $row['age'] ;?>"></td>
         <td> <label>Sex</label></td>
         <td> <input type="text" readonly name="sex"><?php echo $row['sex'] ;?></td>
         <td> <label>MRN</label></td>
         <td><input type="text" readonly name="mrn" value="<?php echo $row['MRN'] ;?>"></td>
         
      </tr>
      <tr>
         <td><label>ward/OPD No</label></td>
         <td><input type="text" readonly name="ward" value="<?php echo $row['ward'] ;?>"></td>
         <td><label>Bed No</label></td>
         <td><input type="number"readonly name="bedno" value="<?php echo $row['bedno'] ;?>"></td>
         <td><label>Date of birth</label></td>
         <td><input type="date"readonly name="datebirth" value="<?php echo $row['datebirth'] ;?>"></td>
         <td><label>Tel</label></td>
         <td><input type="number" name="tel" value="<?php echo $row['mobile'] ;?>"></td>
      </tr>
      <tr>
         <td><label>Patient Address</label></td>
         <td><input type="text" name="address" value="<?php echo $row['patientaddress'] ;?>"></td>
          <td>  <label>Test Order By</label></td><td>
            <input type="text" name="orderby" value="<?php echo $row['orderby'] ;?>">
           </td> <td>
            <label>Date</label></td><td>
            <input type="date" name="date" value="<?php echo $row['date'] ;?>">
            </td><td>
            <label>Type of Specimen</label></td>
            <td>
            <input type="text" name="specimen" value="<?php echo $row['specimin'] ;?>"></td>
      </tr>
      <tr>
         <td><label>Site Of Specimen Collected</label></td>
         <td><input type="text" name="site" value=""></td> 
         <td><label>Clinical Diagnosis</label></td>
         <td><input type="text" name="diagno" value=""></td>
         <td><label>Sample Collected by</label></td>
         <td><input type="text" name="samcollby"></td>
         <td>  <label>Initial</label></td>
         <td>  <input type="date" name="initial" value=""></td>
      </tr>
      <tr>
      <td> <label>Lab Serial No</label></td>
         <td><input type="text" name="labserial" value=""></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
      <td>Physical Exam</td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
      <td>RBC</td>
                   <td><input type="text" name="rbc" placeholder="Result"></td>
                    <td>Color</td>
                    <td><input type="text" name="color" placeholder="Result"></td>
                    <td>WBC</td>
                    <td><input type="text" name="wbc" placeholder="Result"></td>
                    <td>Transparency</td>
                    <td><input type="text" name="trans" placeholder="Result"></td>
      </tr>
      <tr>
      <td>WBC Casts</td>
                    <td><input type="text" name="wbcast" placeholder="Result"></td>
                    <td>Foam and Others</td>
                    <td><input type="text" name="foam" placeholder="Result"></td>
                    <td>RBC Casts</td>
                    <td><input type="text" name="rbccast" placeholder="Result"></td>
                    <td></td>
      </tr>
      <tr>
      <td>Chemical Exam</td>
      <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
      </tr>
      <tr>
      <td>PH</td>
                    <td><input type="text" name="ph" placeholder="Result"></td>
                    <td>Waxy Casts</td>
                    <td><input type="text" name="waxy" placeholder="Result"></td>
                    <td>Blood</td>
                    <td><input type="text" name="blood" placeholder="Result"></td>
                    <td>Epithelial cells</td>
                    <td><input type="text" name="ephical" placeholder="Result"></td>
      </tr>
      <tr>
      <td>S/gravity</td>
                    <td><input type="text" name="gravity" placeholder="Result"></td>
                    <td>Parasite</td>
                    <td><input type="text" name="parasite" placeholder="Result"></td>
                    <td>Albumin</td>
                    <td><input type="text" name="albu" placeholder="Result"></td>
                    <td>Bacteria</td>
                    <td><input type="text" name="bacteria" placeholder="Result"></td>
      </tr>
      <tr>
      <td>Glucose</td>
                    <td><input type="text" name="gluco" placeholder="Result"></td>
                    <td>Yeast</td>
                    <td><input type="text" name="yeast" placeholder="Result"></td>
                    <td>Keton</td>
                    <td><input type="text" name="keton" placeholder="Result"></td>
                    <td>Crystals</td>
                    <td><input type="text" name="crystals" placeholder="Result"></td>
      </tr>
      <tr>
        <td><label>Test Done By</label></td> 
        <td><input type="text" name="doneby"></td> 
        <td><label>Checked By</label></td> 
        <td><input type="text" name="appby"></td> 
        <td><label>Specimen Logout</label></td> 
        <td><input type="date" name="logdate"></td> 
        <td><input type="text" name="allid" value="<?php echo $row['allid'] ;?>" hidden></td>
        <td><input type="submit" style="clolor:white;background:deepskyblue;" name="submit"value="Send"></td> 
      </tr>
   </table>

 </form>
    </div>
             
    <?php 
 
 echo "<h4>======================================================================================================================================<h4>";
      echo "<h4>======================================================================================================================================<h4>";
      
 }

 ?>
</div>
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