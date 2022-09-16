<?php   include "database.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style4.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="../jquery.js"></script>
	<title></title>
</head>

<body>
 

<header>
       <img src="../image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
         <div class="button">
            <button id="login">Login</button>
            <button id="register">Register</button>
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
          <h1>NIGEST MOHAMMED MEMORIAL </h1>
     </div>

     <div class="table">
         <table>
          <tr><td><a href="send_urintest_into_labratory.php">Send Urin Analysis Test</a></td><td><a href="send_parasitologydata_labratory.php">Send Parasitology Test</a></td><td>   <a href="send_blooddata_into_labratory.php">Send blood Test</a></td></tr>
          <tr><td>
          <nav class="navbar">
          <ul>
               <li>
                    <?php  
                  
          //     $sql="SELECT *from orc_room_paper where status='0' ORDER BY orcid DESC";
          //     $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="urin_final_result_from_labratory.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification .php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
          </td>  <td> <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT * from dental_room_paper where status='0' ORDER BY dentalid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="parasitology_final_result_from_labra.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td><td>
  <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from eyeunit_room_paper where status='0' ORDER BY eyeid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="blood_final_result_from_labratory.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td> </tr>
<tr><td> <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from pedatric_room_paper where status='0' ORDER BY pedid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="pedatric opd_room.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td> <td> <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from src_paper where status='0' ORDER BY srcid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="src.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td> <td> <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from ultrasound_room_paper where status='0' ORDER BY ultid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="ultrasound_room.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td></tr>

<tr><td><nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from xray_room_paper where status='0' ORDER BY xrayid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="xray_room.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td> <td><nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from pathology_room_paper where status='0' ORDER BY pathoid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="pathology_room.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td> <td><nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from card_room_paper where status='0' ORDER BY cardid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="card_room.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td></tr>
<tr><td><nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from adult_triage_paper where status='0' ORDER BY adultid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="adult triage.php" id="notification">
        <label for="check">
             <i class="fa fa-bell-o" aria-hidden="true"></i>
             <span class="count">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
<input type="checkbox" name="" class="dropdown-check" id="check">
<ul class="dropdown"></ul>
</li>
</ul>
</nav>
<script type="text/javascript" src="eyeunit_room"></script>
<script type="text/javascript">
     $document().ready(function(){
          $("notification").on("click",function(){
               $.ajax({
                    url:"readnotification.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td></tr>
         </table>
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
</script>
<script src="../javascript/cism.js"></script>
</body>
</html>