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
		
     h2{
          background-color: green;
		  font-size: 30px;
		  width: 500px;
		  border: 1px solid dodgerblue;
     }
     body{
          background:#cccccc;
     }
     table{
margin-top: -100px;
border: 1px solid #aaa;
padding: 5px;
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
          color: #0000ff;
          border: none;
          outline: none;
          box-shadow:3px 3px 3px #aaa ,-3px -3px 3px #aaa;
          margin-bottom: 4px;

     }
      label{
          font-size: 20px;
          font-weight: 400;
		  color: darkgoldenrod;
          font-family: Georgia, 'Times New Roman', Times, serif;
     }
</style>
	<title></title>
</head>
<?php 
include("database.php");
$allid=$_SESSION['allid'];
if (isset($_POST['disable'])) {
    // code...
    $sql="UPDATE xraydata SET stat='1' where allid='$allid'";
    $query=mysqli_query($con,$sql);

}
if (isset($_POST['enable'])) {
    // code...
    $sql="UPDATE xraydata SET stat='0' where allid='$allid'";
    $query=mysqli_query($con,$sql);
}

?>
<style>
h1{
		background-color: #0000ff;
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
	<?php 
 $sql="SELECT *from xraydata where stat='0' AND allid='$allid'";
 $query=mysqli_query($con,$sql);
 $today_date=date('y/m/d');

 while ($row=mysqli_fetch_assoc($query)) {
 	// code...
	 echo "<h1>$today_date</h1>";
 	?>
    
    <div>
    	<form>
			<table>
				<tr>
					<td><label>Name of patient</label></td>
					<td><input type="text" name="name" value="<?php  echo $row['patientname'] ; ?>" readonly></td>
					</tr>
					<tr>
					<td><label>Age</label></td>
					<td><input type="text" name="age" value="<?php  echo $row['age'] ; ?>"readonly></td>
					</tr><tr>
					<td><label>Ward/Adress</label></td>
					<td><input type="text" name="ward" value="<?php  echo $row['ward'] ; ?>"readonly></td>
					</tr>
					<tr>
					<td><label>Brief Clinical History</label></td>
					<td><input type="text" name="history" value="<?php  echo $row['history'] ; ?>"readonly></td>

					
				</tr>
				<tr>
					<td><label>Radiological Investigation Requested</label></td>
					<td><textarea name="radio"  value="<?php  echo $row['radiology'] ; ?>"readonly></textarea></td>
					</tr><tr>
					<td><label>Medical Office/DR</label></td>
					<td><input type="text" name="dr" value="<?php  echo $row['doctor'] ; ?>"readonly></td>
					</tr>
					<tr>
					<td><label>X-Ray Serial Number</label></td>
					<td><input type="text" name="serial" value="<?php  echo $row['serialno'] ; ?>"readonly></td>
					</tr>
					<tr>
					<td><label>Previous Serial Number/Previous Exams Details</label></td>
					<td>	<textarea name="prev" value="<?php  echo $row['prev'] ; ?>"readonly></textarea></td>
				</tr>
			</table>
		</form>
    </div>

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