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
$allid=$_SESSION['allid'];
if (isset($_POST['send'])) {
	// code...
	extract($_POST);	
	$sql="INSERT into blood(name,hnum,ward,age,sex,type,date,hemag,hemac,MCH,mach,RBC,ret,luk,neu,bas,lym,mono,plate,Bleed,clot,coag,allid) values('$name','$hnum','$ward','$age','$sex','$bed','$date','$hemag','$hemac','$mch','$mach','$rbc','$ret','$luk','$neu','$bas','$lym','$mono','$plate','$Bleed','$clot','$coag','$allid')";
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
	<form method="post" action="#">
		<table>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="name"></td>
				<td><label>Hospital No</label></td>
				<td><input type="text" name="hnum"></td>
				<td><label>ward</label></td>
				<td><input type="text" name="ward"></td>
				
				</tr>
				<tr>
				<td><label>Age</label></td>
				<td><input type="number" name="age"></td>
				<td><label>Sex</label></td>
				<td><select name="sex">
				<option value="male">Male</option>	
				<option value="female">Female</option>	
				</select></td>
				<td>
				<label>Date</label>
  					</td>
                  <td>
                     <input type="date" name="date">
				</td>
				<td><select name="bed">

<option value="Bed Patient">Bed Patient</option>	
<option value="Ambulatory Patient">Ambulatory Patient</option>	
</select></td>
			 </tr>
             <tr>
			 <td><h2>Physician</h2></td>
			 <td></td>
			 <td></td>
			 <td></td>
			 <td></td>
			 </tr>
			 <tr>
				<td><label>Haemoglobin</label></td>
				<td><input type="text" name="hemag"></td>
				<td><label>Haematocrit</label></td>
				<td><input type="text" name="hemac"></td>
				<td><label>MCV</label></td>
				<td><input type="MCH" name="mch"></td>
			 </tr>
			 <tr>
				<td><label>Mache</label></td>
				<td><input type="text" name="mach"></td>
				<td><label>RBC</label></td>
				<td><input type="RBC" name="rbc"></td>
				<td><label>Reticulocytes</label></td>
				<td><input type="text" name="ret"></td>
				
				
			 </tr>
			 <tr> 
			    <td><label>Luekocytes</label></td>
				<td><input type="text" name="luk"></td>
				<td><label>Seg.Neutro</label></td>
				<td><input type="text" name="neu"></td>
				<td><label>Basophils</label></td>
				<td>	<input type="text" name="bas"></td>
			 </tr>
			 <tr>
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
				<td> <input type="submit" style="background-color:deepskyblue; color:#fff;" name="send" value="send the data"></td>
			 </tr>
</table>
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