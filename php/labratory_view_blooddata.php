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
		  color: green;
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

if (isset($_POST['send'])) {
	// code...
	extract($_POST);
	$sql="INSERT into blood(name,hnum,ward,age,sex,type,date,hemag,hemac,MCH,mach,RBC,ret,luk,neu,bas,lym,mono,plate,Bleed,clot,coag,allid) values('$name','$hnum','$ward','$age','$sex','$bed','$date','$hemag','$hemac','$mch','$mach','$rbc','$ret','$luk','$neu','$bas','$lym','$mono','$plate','$Bleed','$clot','$coag','$allid')";
	$query=mysqli_query($con,$sql);

}

?>
<body>
	 <?php  

              $sql="SELECT *from blood ORDER BY bid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
                       <style type="text/css">
                       	h1{
                       		color: red;
                       	}
                       </style>
<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="index.html">Home</a></li>
        <h1><li><a href="#">
        	<?php  echo mysqli_num_rows($res) ;?></a></li></h1>
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
   
    $sql="SELECT *from blood";
    $query=mysqli_query($con,$sql);
	$today_date=date('y/m/d');

    while ($row=mysqli_fetch_assoc($query)) {
    	// code...
		echo "<h1>$today_date</h1>";

	?>
	<form method="post" action="#">

	<table>
		<tr>
			<td><label>Name</label></td>
			<td><input type="text" name="name" readonly value="<?php echo $row['name'] ;?>"></td>
		</tr>
		<tr>
			<td><label>Hospital No</label></td>
			<td><input type="text" name="hnum" readonly value="<?php echo $row['hnum'] ;?>"></td>
		</tr>
		<tr>
			<td><label>ward</label></td>
			<td><input type="text" name="ward" readonly value="<?php echo $row['ward'] ;?>"></td>
		</tr>
		<tr>
			<td><label>Age</label></td>
			<td><input type="number" name="age" readonly value="<?php echo $row['age'] ;?>"></td>
		</tr>
		<tr>
			<td><label>Sex</label></td>
			<td> <input type="text" name="sex" readonly value="<?php echo $row['sex'] ;?>"></td>
		</tr>
		<tr>
			<td> <label>Bed</label>	</td>
			<td><input type="text" name="bed" readonly value="<?php echo $row['type'] ;?>"></td>
		</tr>
		<tr><td><label>Date</label></td>
<td><input type="date" name="date" readonly value="<?php echo $row['date'] ;?>"></td>
	</tr>
	<tr>
		<td><h2>Physician</h2></td>
		<td></td><td></td>
		<td></td><td></td>
		<td></td><td></td>
		<td></td>
	</tr>
	<tr>
			<td><label>hemoglobin</label></td>
			<td><input type="text" name="hemag"></td>
			<td><label>Haematocrit</label></td>
			<td><input type="text" name="hemac"></td>
			<td><label>MCV</label></td>
			<td><input type="MCH" name="mch"></td>
			<td><label>Mache</label></td>
			<td><input type="text" name="mach"></td>
			
		</tr>
		<tr>
		
			<td><label>RBC</label></td>
			<td><input type="RBC" name="rbc"></td>
			<td><label>Reticulocytes</label></td>
			<td><input type="text" name="ret"></td>
			<td><label>Luekocytes</label></td>
			<td><input type="text" name="luk"></td>
		    <td><label>Seg.Neutro</label></td>
			<td><input type="text" name="neu"></td>
			
		</tr>
		<tr>
			<td><label>Basophils</label></td>
			<td><input type="text" name="bas"></td>
			<td><label>Lymphocytes</label></td>
			<td><input type="text" name="lym"></td>
			<td><label>Monocots</label></td>
			<td><input type="text" name="mono"></td>
			<td><label>Platelets</label></td>
			<td><input type="text" name="plate"></td>
		</tr>
		<tr>
			<td><label>Bleeding Time</label></td>
			<td><input type="text" name="Bleed"></td>
			<td><label>Clot retraction</label></td>
			<td><input type="text" name="clot"></td>
			<td><label>Coagulation time</label></td>
			<td><input type="text" name="coag"></td>
             
			<td><input type="text" name="allid" value="<?php echo $row['allid'] ;?>" hidden></td>
			<td></td>
			<td><input type="submit" style="background:deepskyblue;" name="send" value="send the data"></td>
		</tr>
	</table>
       
		</form>
	
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