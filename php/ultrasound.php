<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
   <link rel="stylesheet" href="../style44.css">
   <script src="../jquery.js"></script>
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
</head>
<?php 
include("database.php");
if (isset($_POST['submit'])) {
   // code...
   extract($_POST);
     $sql="INSERT into ultrasounddata(dat,fname,lname,weightt,age,typee,medication,stren,dossage,history,scan,readd,allid) values('$date','$name','$lname','$we','$age','$type','$medi','$stre','$dosage','$history','$scan','$readd','$allid')";
     $query=mysqli_query($con,$sql);

}


?>
<body>
<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="alllogin.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
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

 $sql="SELECT *from ultrasounddata";
 $query=mysqli_query($con,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
 	?>
    
    <div>
      <h1>Ultrasound Request Form</h1>
   <form method="post">

   <table>
      <tr>
         <td><label>Date</label></td>
         <td><input type="date" name="date" value="<?php  echo $row['dat'] ;?>"></td>
         <td> <label>Patient Name</label></td>
         <td><input type="text" name="name" value="<?php  echo $row['fname'] ;?>"></td>
         <td> <label>Last Name</label></td>
         <td> <input type="text" name="lname" value="<?php  echo $row['lname'] ;?>"></td>
         <td><label>Weight</label></td>
         <td><input type="text" name="we" value="<?php  echo $row['weightt'] ;?>"></td>
      </tr>
      <tr>
         <td>  <label>Age</label></td>
         <td><input type="text" name="age" value="<?php  echo $row['age'] ;?>"></td>
         <td> <label>Types Of Scan</label></td>
         <td> <select name="type">
         <option>Abdominal</option>
         <option>Echo/Chest</option>
         <option>Thyroid</option>
         <option>Soft Tissue</option>
         <option>Ocular</option>
      </select></td>
      <td><label>Name Of Medication</label></td>
      <td><input type="text" name="medi"></td>
      <td>  <label>Strength</label></td>
      <td><input type="text" name="stre"></td>
      </tr>
      <tr>
         <td><label>Dossage</label></td>
         <td><input type="text" name="dosage"></td>
         <td><label>Pertinet History</label></td>
         <td> <textarea name="history"></textarea></td>
         <td><label>Has Patient Been Scanned UVM before?</label></td>
           <td><select name="scan">
            <option value="YES">YES</option>
            <option value="NO">NO</option>

        </select></td>
            <td>
            <label>STAT Read</label>
            </td>

            <td> </td>
        <td><select name="readd">
            <option value="YES">YES</option>
            <option value="NO">NO</option>

        </select></td></td>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><input type="text" name="allid" value="<?php echo $row['allid'] ;?>" hidden></td>
  <td><input style="background-color: deepskyblue; color:#fff;" type="submit" name="submit" value="send"></td>

      </tr>
   </table>
      
      
      
     
     
     
            
         
        


   </form>
     </div>
   <?php 
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