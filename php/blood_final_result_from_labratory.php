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
$allid=$_SESSION['allid'];
if (isset($_POST['disable'])) {
    // code...
    
    $sql="UPDATE blood SET stat='1' where allid='$allid'";
    $query=mysqli_query($con,$sql);
}

if (isset($_POST['enable'])) {
    // code...
     
    $sql="UPDATE blood SET stat='0' where allid='$allid'";
    $query=mysqli_query($con,$sql);
}

?>
<style>
	h1{
		background-color: #0000ff;
	}
</style>
<style>
     h1{
          background-color: green;
     }
     body{
          background:#cccccc;
          margin: 0;
       padding: 0;
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
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="logout.php"><button id="register">logout</button></a></li>
         <div class="button">
            <!-- <button id="login">Login</button>
            <button id="register">Register</button> -->
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

$sql="SELECT *from blood where stat='0' AND allid='$allid'";
$query=mysqli_query($con,$sql);
$today_date=date('y/m/d');
while ($row=mysqli_fetch_assoc($query)){
	// code...
   echo "<h1>$today_date</h1>";
?>


	<form method="post">
	<table>
		<tr>
	<td><label>Name</label></td>
	<td><input type="text" name="name" readonly value="<?php echo $row['name'] ; ?>"></td>

	<td><label>Hospital No</label></td>
	<td><input type="text" name="hnum" readonly value="<?php echo $row['hnum'] ; ?>"><td></tr>
</tr>
<tr>
<td><label>ward</label></td>
<td><input type="text" name="ward" readonly value="<?php echo $row['ward'] ; ?>"></td>
<td><label>Age</label></td>
<td><input type="number" name="age" readonly value="<?php echo $row['age'] ; ?>"></td>
	</tr>
	<tr>
	<td>
	<label>Sex</label>
	</td>
	<td><input type="text" name="sex" readonly value="<?php echo $row['sex'] ; ?>"></td>
	<td><label>Type</label></td>
		<td><input type="text" name="type" readonly value="<?php echo $row['type'] ; ?>"></td>
	</tr>
	<tr>
		<td><label>Date</label></td>
		<td><input type="date" name="date" readonly value="<?php echo $row['date'] ; ?>"></td>
	</tr>
	</table>
	
	

    



</div>

<div>

	<h2>Physician</h2>
	<div>
<center>
			<div>

			<table>
<tr>

<td>	<label>Haemoglobin</label></td>
<td><input type="text" name="hemag" readonly value="<?php echo $row['hemag'] ; ?>"></td>
<td><label>Haematocrit</label></td>
<td><input type="text" name="hemac" readonly value="<?php echo $row['hemac'] ; ?>"></td>
<td><label>MCV</label></td>
<td><input type="MCH" name="mch" readonly value="<?php echo $row['MCH'] ; ?>"></td>
<td><label>Mache</label></td>
<td><input type="text" name="mach" readonly value="<?php echo $row['mach'] ; ?>"></td>
</tr>
<tr>
<td><label>RBC</label></td>
<td><input type="RBC" name="rbc" readonly value="<?php echo $row['RBC'] ; ?>"></td>
<td><label>Reticulocytes</label></td>
<td><input type="text" name="ret" readonly value="<?php echo $row['ret'] ; ?>"></td>
<td><label>Luekocytes</label></td>
<td><input type="text" name="luk" readonly value="<?php echo $row['luk'] ; ?>"></td>
<td><label>Seg.Neutro</label></td>
<td><input type="text" name="neu" readonly value="<?php echo $row['neu'] ; ?>"></td>
</tr>
<tr>
	<td><label>Basophils</label></td>
	<td><input type="text" name="bas" readonly value="<?php echo $row['bas'] ; ?>"></td>
	<td><label>Lymphocytes</label></td>
	<td><input type="text" name="lym" readonly value="<?php echo $row['lym'] ; ?>"></td>
	<td><label>Monocots</label></td>
	<td><input type="text" name="mono" readonly value="<?php echo $row['mono'] ; ?>"></td>
 	<td><label>Platelets</label></td>
	 <td><input type="text" name="plate" readonly value="<?php echo $row['plate'] ; ?>"></td>
</tr>
<tr>
	 <td><label>Bleeding Time</label></td>
	 <td><input type="text" name="Bleed" readonly value="<?php echo $row['Bleed'] ; ?>"></td>
	 <td><label>Clot retraction</label></td>
	 <td><input type="text" name="clot" readonly value="<?php echo $row['clot'] ; ?>"></td>
	 <td><label>Coagulation time</label></td>
	 <td><input type="text" name="coag" readonly value="<?php echo $row['coag'] ; ?>"></td>
</tr>
			</table>		
       </div>
	   </center>
       <div>
       </div>
   
		</form>
		<?php 
		    
			echo "<h4>======================================================================================================================================<h4>";
			echo "<h4>======================================================================================================================================<h4>";
		   
	}
	?>
	</div>
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
</div>
</body>
</html>