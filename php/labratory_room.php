<?php include"database.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../style44.css">
     <script src="../jquery.js"></script>
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
     </style>
	<title></title>
</head>
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

<table>
<tr>
     <td>
     <nav class="navbar">
          <ul>
               <li>
                    <?php  

              $sql="SELECT *from blood where status='0' ORDER BY bid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="labratory_view_blooddata.php" id="notification0">
        <label for="check"><h1>Blood Information</h1>
                    <img height="45px" width="45px" src="images.png">

             <span class="count1">
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
          $("#notification0").on("click",function(){
               $.ajax({
                    url:"bloodupdate.php",
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

              $sql="SELECT *from opd_room_parsitology_data where status='0' ORDER BY opdparasitid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="labratory_view_parasitologydata.php" id="notification1">
        <label for="check"><h1>Parasitology Information</h1>
                    <img height="45px" width="45px" src="images.png">

             <span class="count1">
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
                    url:"opdupdate .php",
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

              $sql="SELECT *from opd_room_urindata where status='0' ORDER BY opdid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="labratory_view_urindata.php" id="notification9">
        <label for="check"><h1>view urin test data</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count9">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function(){
          $("#notification9").on("click",function(){
               $.ajax({
                    url:"opddupdate.php",
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
</body>
</html>