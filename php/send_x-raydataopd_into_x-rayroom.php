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
<body>
<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="index.html">Home</a></li>
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
include("database.php");
$allid=$_SESSION['allid'];
if (isset($_POST['submit'])) {
	// code...
extract($_POST);

	$sql="INSERT into xraydata(patientname,age,ward,history,radiology,doctor,serialno,prev,allid) values('$name','$age','$ward','$history','$radio','$dr','$serial','$prev','$allid')";
	$query=mysqli_query($con,$sql);

}

?>
<body>
	<h2>
		X-RAY REQUEST FORM
	</h2>

<div>
	<form method="post">
		
	<center><table>
			<tr>
				<td><label>Name of patient</label></td>
				<td><input type="text" name="name"></td>
				<td><label>Age</label></td>
				<td><input type="text" name="age"></td>
				<td><label>Ward/Adress</label></td>
				<td><input type="text" name="ward"></td>

			</tr>
			<tr>
				<td><label>Brief Clinical History</label></td>
				<td><input type="text" name="history"></td>
				<td><label>Radiological Investigation Requested</label></td>
				<td><textarea name="radio"></textarea></td>
				<td><label>Medical Office/DR</label></td>
				<td><input type="text" name="dr"></td>
				
			</tr>
			<tr>
				<td>
					<label>X-Ray Serial Number</label>
				</td>
				<td><input type="text" name="serial"></td>
				<td><label>Previous Serial Number/Previous Exams Details</label></td>
				<td>	<textarea name="prev">
			
		</textarea></td>
				<td><input style="background-color: deepskyblue; color:white;" type="submit" name="submit" value="send"></td>
			</tr>
		</table></center>

	</form>
</div>
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