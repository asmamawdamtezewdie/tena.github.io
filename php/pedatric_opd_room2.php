<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
     <link rel="stylesheet" href="../style44.css">
     <script src="..//jquery.js"></script>
     <style>
        body{
             background: #d9d9d9;

        }
        table{
             margin-left:5% ;
             
             margin-top: 7%;
        }
table tr{
   margin-right:100px;
}
        table td{
             
             width: 400px;
             height: 50vh;
             background: #f2f2f2;
             box-shadow:6px 5px 5px #808080 , -6px -6px  6px #808080;
             border-radius: 25px;
          
             
             
             
        }
        td .navbar{
             text-align: center;
        }
        .navbar a{
             text-decoration: none;
             color:blueviolet;
             font-size: 30px;
        }
        .footer{
             transform: translateY(70px);
        }
        .menu_menu{
          display: block;
          position: absolute;
          background: deepskyblue;
          width: 250px;
          padding-left: 10px;
          padding-bottom: 20px;
          padding-top: 5px;
          display: none;
         
         
        }
        .menu_menu .a{

          width: 75%;
          height: 30px;
          margin-top: 2px;
          border-bottom: 1px solid rgb(120,120,120);
          margin-right: 10px;
          
        }
        .menu_menu .a a{
          margin-left: 10px;
          text-decoration:  none;
           color:white;
           padding-top: 4px;
           padding-bottom: 8px;
        }
        .menu_menu .a:hover>a{
          background: #fff;
          color: blue;
        }
     .bar{
          z-index: 1;
          width: 50px;
          height: 30px;
         margin-left: 220px;
         position: absolute;
         cursor: pointer;
     }
     .bar1{
          z-index: 1;
       width:23px ;   
        height: 5px;
        background: #fff;
        margin-bottom: 3px;
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
          <h1>NIGEST MOHAMMED MEMORIAL </h1>
     </div>
     <!-- <div class="menu_menu">
          
          <a href="send_urintest_into_labratory.php">Send Urin Analysis Test</a>
          <a href="send_parasitologydata_labratory.php">Send Parasitology Test</a>
          <a href="send_blooddata_into_labratory.php">Send blood Test</a>
           <a href="send_x-raydata_into_x-rayroom.php">Send x-ray Test</a>
          <a href="send_ultrasound_into_ultrasound.php">Send Ultrasound Test</a>
          
     </div>
     -->
     <div class="bar">
          <div class="bar1"></div>
          <div class="bar1"></div>
          <div class="bar1"></div>
       </div>
     <div class="menu_menu">
         
     <div class="a" ><a href="send_urintest_into_labratory.php">Send Urin Analysis Test</a></div>
     <div class="a" ><a href="send_parasitologydata.php">Send Parasitology Test</a></div>
     <div class="a" ><a href="send_blooddata_into_labratory.php">Send blood Test</a></div>
     <div class="a" ><a href="send_x-raydataopd_into_x-rayroom.php">Send x-ray Test</a></div>
     <div class="a" ><a href="send_ultrasoundopd_into_ultrasound.php">Send Ultrasound Test</a></div>
              
        
         
     </div>
<div>
     <table>
          <tr>
               <td>  <nav class="navbar">
          <ul>
               <li>
                    <?php  
             include("database.php");
              $sql="SELECT *from opd_room_urindata where status='0' ORDER BY opdid DESC";
              $res=mysqli_query($con,$sql);
                       ?>
      
   <a href="urin_final_result_from_labratory.php" id="notification1">
       <label for="check"><h1>Test Urin Result </h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification1").on("click",function(){
               $.ajax({
                    url:"opdurinupdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script></td>
<td>
<nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from opd_room_parsitology_data where status='0' ORDER BY opdparasitid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="parasitology_final_result_from_labra.php" id="notification2">
      <label for="check"><h1>Parasitology Result</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification2").on("click",function(){
               $.ajax({
                    url:"opdparasitupdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td>
<td>

<nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from blood where status='0' ORDER BY bid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="blood_final_result_from_labratory.php" id="notification3">
        <label for="check"><h1>Blood Final Result</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification3").on("click",function(){
               $.ajax({
                    url:"bloodpdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td>
</tr>
<tr>

<td>
<nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from pedatricopddatault where status='0' ORDER BY pedid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="ultrasound_room.php" id="notification6">
       <label for="check"><h1>Ultrasound Result</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification6").on("click",function(){
               $.ajax({
                    url:"pedatricupdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td>
<td>
<nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from pedatricopddata where status='0' ORDER BY pedid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="xray_room.php" id="notification7">
       <label for="check"><h1>X-ray Result</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification7").on("click",function(){
               $.ajax({
                    url:"pedxrayupdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>

</td>
<td>
<nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from patientdata where status='0' ORDER BY cardid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="card_room.php" id="notification9">
        <label for="check"><h1>Card Room</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count0">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){
          $("#notification9").on("click",function(){
               $.ajax({
                    url:"cardpdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>
</td>
</tr>
        
     </table>

    


 




 
 

 

 


 
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
     $(".bar").click(function(){
      $(".menu_menu").slideToggle("fast");
     });
     </script>
     <script src="javascript/cism.js"></script>
 
</div>
</body>
</html>