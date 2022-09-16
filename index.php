<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style44.css">
</head>
<body>
     <header>
       <img src="image/wculogo.png" alt="">
       <h3>WCU HOSPITAL</h3>
       <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">contacts</a></li>
         <div class="button">
            <!-- <button id="login">Login</button> -->
            <!-- <button id="register">Register</button> -->
         </div>
           <div class="menu"><img src="image/menu.png" id="menu" ></div>
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
     <div class="container">
      <div class="l_container">
        <h1>እንኳን ወደ ንግስት እሌኒ መህመድ ሆስፒታል በደህና መጡ!
        </h1>
        <h2>Welcome to Nigist Eleni Mohamed HOSPITAL</h2>
       <a href="php/alllogin.php"><button>Login</button></a> 
        <!-- <a href="register_patient.php"> <button>Register</button></a> -->

      </div>
      <div class="r_container">
       <center> <h1 style="color:rgb(229, 240, 241) ;">የምንሰጣቸው አገልግሎቶች
        </h1>
      <h2 style="color: #fff;">Our Servises</h2></center>
       <div  class="top">
        <div class="t"><h2 style="margin-left: 4px;">የአይን ህክምና</h2></div>
        <div class="t" ><h2 style="margin-left: 4px;">የጥርስ ህክምና</h2></div>
        <div class="t"><h2 style="margin-left: 4px;">የቆዳ ህክምና</h2></div>
       </div>
       <div class="bottom">
        <div class="b" style="margin-left: 4px;"><h2>የውስጥ ደዌ ህክምና</h2></div>
        <div class="b" style="margin-left: 4px;"><h2>ከአንገት በላይ ህክምና</h2></div>
        <div class="b" style="margin-left: 4px;"><h2>የህፃናት ህክምና</h2></div>
       </div>
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