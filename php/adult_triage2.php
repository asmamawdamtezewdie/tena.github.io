<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
     <link rel="stylesheet" href="../style44.css">
     <script src="../jquery.js"></script>
     <style>
 label{
     color: #fff;
     font-size: 30px;

 }
 .input{
   width: 400px;  
   height: 150px;
   text-align: left;
 }
 center{
     color: white;
     font-size: 45px;
padding-top: 5px;
 }

     </style>
<?php 
include("database.php");
if(isset($_POST['submit'])){
     $pro=$_POST['problem'];
     $room=$_POST['room'];
     $sql="INSERT INTO triageroomarrange(problem,room) values('$pro','$room')";
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
     <center>Adalt Triage Room</center>
<div>
     <form method="post">
          <label>what is the problem?</label>
          <textarea type="textArea" class="input" name="problem"></textarea>
<br>
          <label>Room</label>
          <input type="text" name="room">
          <input type="submit" value="insert" name="submit">
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