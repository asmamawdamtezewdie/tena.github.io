<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="opd_room2.css">
     <title></title>
</head>
<body>
     <div>
          <a href="../register_patient.php">Record Patient Information</a>
          <a href="viewall_patient_data.php">View</a>

     </div>

    

 <nav class="navbar">
          <ul>
               <li>
                    <?php  
       include("database.php");
              $sql="SELECT *from triageroomarrange where status='0' ORDER BY problemid DESC";
              $res=mysqli_query($con,$sql);


                       ?>
      
   <a href="adult_triage.php" id="notification">
        <label for="check"><h1>Adult Trage</h1>
          <img height="45px" width="45px" src="images.png">
             <span class="count7">
                  <?php  echo mysqli_num_rows($res);  ?>
             </span>
        </label>
   </a>
</li>
</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $document().ready(function(){
          $("#notification").on("click",function(){
               $.ajax({
                    url:"triagupdate.php",
                    success:function(res){
                         console.log(res);
                    }
               });
          });
     });
</script>


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