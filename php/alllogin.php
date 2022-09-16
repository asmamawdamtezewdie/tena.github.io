
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
</head>
<body>
<div>
	<?php 
  include "database.php";
if(isset($_POST["submit"])){
 $name=$_POST["username"];
    $password=$_POST["password"];
        
     $sql= "SELECT * FROM allroom where username='$name' AND password='$password'";
    $query=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($query)) {
        // code...
        $_SESSION['allid']=$row['allid'];
    }


    $sql1= "SELECT * FROM labratory_room where username='$name' AND password='$password'";
    $query1=mysqli_query($con,$sql1);
     

  //  $sql2="SELECT * FROM orc_room where username='$name' AND password='$password'";
  //  $query2=mysqli_query($con,$sql2);


   $sql3="SELECT *from dental_room where username='$name' AND password='$password'";
   $query3=mysqli_query($con,$sql3);


  //  $sql4="SELECT *from eyeunit_room where username='$name' AND password='$password'";
  //  $query4=mysqli_query($con,$sql4);
   

   $sql5="SELECT * from pedatric_opd_room where username='$name' AND password='$password'";
   $query5=mysqli_query($con,$sql5);
   

  //  $sql6="SELECT *from src where username='$name' AND password='$password'";
  //  $query6=mysqli_query($con,$sql6);
   

   $sql7="SELECT *from ultrasound_room where username='$name' AND password='$password'";
   $query7=mysqli_query($con,$sql7);
   

   $sql8="SELECT *from xray_room where username='$name' AND password='$password'";
   $query8=mysqli_query($con,$sql8);

  //  $sql9="SELECT *from pathology_room where username='$name' AND password='$password'";
  //  $query9=mysqli_query($con,$sql9);

   $sql10="SELECT *from opd_room where username='$name' AND password='$password'";
   $query10=mysqli_query($con,$sql10);

   $sql11="SELECT *from card_room where username='$name' AND password='$password'";
   $query11=mysqli_query($con,$sql11);
    
    $sql12="SELECT *from triage_room where username='$name' AND password='$password'";
   $query12=mysqli_query($con,$sql12);


    if(mysqli_num_rows($query1)>0) {
    	// code...
    	header("location:labratory_room.php");

    }
    // elseif (mysqli_num_rows($query2)) {
    // 	// code...
    // 	header("location:orc_room.php");
    // }
    elseif (mysqli_num_rows($query3)>0) {
    	// code...
    	header("location:dental_room.php");
    }

    //  elseif (mysqli_num_rows($query4)>0) {
    // 	// code...
    // 	header("location:eyeunit_room.php");
    // }

     elseif (mysqli_num_rows($query5)>0) {
    	// code...
    	header("location:pedatric_opd_room2.php");
    }

    //  elseif (mysqli_num_rows($query6)>0) {
    // 	// code...
    // 	header("location:src2.php");
    // }

     elseif (mysqli_num_rows($query7)>0) {
    	// code...
    	header("location:ultrasound_room2.php");
    }

     elseif (mysqli_num_rows($query8)>0) {
    	// code...
    	header("location:xray_room2.php");
    }

    //  elseif (mysqli_num_rows($query9)>0) {
    // 	// code...
    // 	header("location:pathology_room2.php");
    // }

     elseif (mysqli_num_rows($query10)>0) {
    	// code...
    	header("location:opd_room2.php");
    }

     elseif (mysqli_num_rows($query11)>0) {
    	// code...
    	header("location:../register_patient.php");
    }



     elseif (mysqli_num_rows($query12)>0) {
    	// code...
    	header("location:adult_triage2.php");
    }

    elseif(mysqli_num_rows($query)>0) {
        // code...
            header("location:opd_room2.php");

    }



   if(empty($name)){
   $user_error="<p style='color:white; font-size:30px;'>please Enter username</p>";

   }
if(empty($password)){
$pass_error="<p style='color:white; font-size:30px;'>please Enter Password</p>";
}

}
	?>

</div>
<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
         <div class="button">
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
    <form  method="post">

        <div id="loginpage">
       
     <input type="text" name="username" placeholder="username" id="uname"><br>
     <?Php if(isset($user_error)){
       ?>
     <p><?php echo $user_error;?></p>
   <?php
     } ?>
      <input type="password" name="password" placeholder="password" id="pass"><br>
      <?php if(isset($pass_error)){
        ?>
        <p><?php  echo $pass_error?></p>
        <?php
      }
      ?>
<input type="submit" value="LOGIN" id="submit" name="submit"><br>
</div>
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
<script src="../javascript/cism.js"></script>

</body>
</html>