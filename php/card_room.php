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
<?php 
include("database.php");
if (isset($allid)&&$row['value']=='') {
    // code...
}
$allid=$_SESSION['allid'];
if (isset($_POST['disable'])) {
    // code...
    $sql="UPDATE adultdata SET stat='1' where allid='$allid'";
    $query=mysqli_query($con,$sql);

}
if (isset($_POST['enable'])) {
    // code...
    $sql="UPDATE adultdata SET stat='0' where allid='$allid'";
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
     table ,tr,th,td{
border: 1px solid black;
border-collapse: collapse;
padding: 4px;
     }
    
</style>
<?php

if (isset($_POST['submit'])) {
   // code...
   $mrn=$_POST['mrn'];
   $history=$_POST['history'];
   $sql="INSERT into history(mrn,history) values('$mrn','$history')";
   $query=mysqli_query($con,$sql);

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
  
      
   <?php 
$sql="SELECT *from adultdata where stat='0' AND allid='$allid'";
$query=mysqli_query($con,$sql);
$today_date=date('y/m/d');

while ($row=mysqli_fetch_assoc($query)) {
   // code...
   echo "<h1>$today_date</h1>";
   ?>
   
<table>
         <tr >
                 <!-- <th>Select</th> -->
            <th>MEDICAL RECORDER NUMBER</th>
            <th>DATE OF REGISTRATION</th>
            <th>NAME</th>
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
             
         </tr>
         <tr>
         <td><?php echo  $row['mrn']  ;?></td>
         <td><?php echo   $row['date_reg']  ;?></td>
         <td><?php echo  $row['namee']  ;?></td>
         <td><?php echo  $row['fname']  ;?></td>
         <td><?php echo  $row['gfname']  ;?></td>
         <td><?php echo  $row['sex']  ;?></td>
         <td><?php echo  $row['date_birth']  ;?></td>
         <td><?php echo  $row['age']  ;?></td>
         <td><?php echo  $row['region']  ;?></td>
         <td><?php echo  $row['subcity']  ;?></td>
         <td><?php echo  $row['katena']  ;?></td>
         <td><?php echo  $row['kebele']  ;?></td>
         <td><?php echo  $row['house_number']  ;?></td>
         <td><?php echo  $row['phone']  ;?></td>
         
        
        </tr>
</table>

   </div>

   



<form method="post" action="card_room.php">
   <input type="hidden" name="mrn" value="<?php echo $row['mrn'] ;?>">
      <textarea style="margin-left: 20px; padding:0;;" rows="20" cols="30" name="history">
         
      </textarea><br>

      <input style="position: relative; margin-top:50px;" type="submit" name="submit">


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